<?php // -*- mode:php; tab-width:2; indent-tabs-mode:t; c-basic-offset:2; -*-
#CMS - CMS Made Simple
#(c)2004-2012 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: class.global.inc.php 6939 2011-03-06 00:12:54Z calguy1000 $

/**
 * @package CMS
 */

/**
 * A class to represent a smarty template.
 *
 * @since 1.12
 * @author Robert Campbell <calguy1000@gmail.com>
 */
class CmsLayoutStylesheet
{
  const TABLENAME = 'layout_stylesheets';
  
  private $_dirty;
  private $_data = array();
  private $_design_assoc;
	private static $_name_cache = array();
	private static $_css_cache = array();
	private static $_lock_cache;
	private static $_lock_cache_loaded;

	public function __clone()
	{
		if( isset($this->_data['id']) ) unset($this->_data['id']);
		$this->_dirty = TRUE;
	}

  public function get_id()
  {
    if( isset($this->_data['id']) ) return $this->_data['id'];
  }

  public function get_name()
  {
    if( isset($this->_data['name']) ) return $this->_data['name'];
  }

  public function set_name($str)
  {
    $str = trim($str);
    if( !$str ) throw new CmsInvalidDataException('Name cannot be empty');
		if( !preg_match('<^[a-zA-Z0-9_\x7f-\xff][a-zA-Z0-9\s\+_\:\-\x7f-\xff]*$>', $str) ) {
			throw new CmsInvalidDataException('Invalid characters in name '.$str);
		}
    $this->_data['name'] = $str;
    $this->_dirty = TRUE;
  }

  public function get_content()
  {
    if( isset($this->_data['content']) ) return $this->_data['content'];
  }

  public function set_content($str)
  {
    $str = trim($str);
    if( !$str ) throw new CmsInvalidDataException('Template content cannot be empty');
    $this->_data['content'] = $str;
    $this->_dirty = TRUE;
  }

  public function get_description()
  {
    if( isset($this->_data['description']) ) return $this->_data['description'];
  }

  public function set_description($str)
  {
    $str = trim($str);
    $this->_data['description'] = $str;
    $this->_dirty = TRUE;
  }

  public function get_media_types()
  {
		// returns an array...
    if( isset($this->_data['media_type']) ) return $this->_data['media_type'];
  }

	public function has_media_type($str)
	{
    $str = trim($str);
		if( isset($this->_data['media_type']) )
		{
			if( in_array($str,$this->_data['media_type']) ) return TRUE;
		}
		return FALSE;
	}

	public function add_media_type($str)
	{
    $str = trim($str);
		if( !is_array($this->_data['media_type']) ) $this->_data['media_type'] = array();
		$this->_data['media_type'][] = $str;
		$this->_dirty = TRUE;
	}

  public function set_media_types($arr)
  {
		if( !is_array($arr) ) {
			if( (int)$arr == 0 && is_string($arr) ) {
				$arr = array($arr);
			}
			else {
				return;
			}
		}

    $this->_data['media_type'] = $arr;
    $this->_dirty = TRUE;
  }

  public function get_media_query()
  {
    if( isset($this->_data['media_query']) ) return $this->_data['media_query'];
  }

  public function set_media_query($str)
  {
    $str = trim($str);
    $this->_data['media_query'] = $str;
    $this->_dirty = TRUE;
  }

  public function get_created()
  {
    if( isset($this->_data['created']) ) return $this->_data['created'];
  }

  public function get_modified()
  {
    if( isset($this->_data['modified']) ) return $this->_data['modified'];
  }

  public function get_designs()
  {
    if( !$this->get_id() ) return;
    if( is_null($this->_design_assoc) ) {
      $this->_design_assoc = null;
      $db = cmsms()->GetDb();
      $query = 'SELECT design_id FROM '.cms_db_prefix().CmsLayoutCollection::CSSTABLE.' WHERE css_id = ?';
      $tmp = $db->GetCol($query,array($this->get_id()));
      if( is_array($tmp) && count($tmp) ) $this->_design_assoc = $tmp;
    }
    return $this->_design_assoc;
  }

  public function set_designs($x)
  {
    if( !is_array($x) ) return;

    foreach( $x as $y ) {
      if( !is_numeric($y) ) throw new CmsInvalidDatException('Invalid data in design list.  Expect array of integers');
    }

    $this->_design_assoc = $x;
  }

  public function add_design($a) 
  {
    $n = null;
    if( is_object($a) && is_a($a,'CmsLayoutCollection') ) {
      $n = $a->get_id();
    }
    else if( (int)$a > 0 ) {
      $n = $a;
    }
    else if( (is_string($a) && strlen($a)) || (int)$a > 0 ) {
      $design = CmsLayoutCollection::load($a);
      $n = $design->get_id();
    }

    if( !is_array($this->_design_assoc) ) $this->_design_assoc = array();
    $this->_design_assoc[] = $n;
    $this->_dirty = TRUE;
  }

  public function remove_design($a)
  {
    if( !is_array($this->_design_assoc) || count($this->_design_assoc) == 0 ) return;

    $n = null;
    if( is_object($a) && is_a($a,'CmsLayoutCollection') ) {
      $n = $a->get_id();
    }
    else if( (int)$a > 0 ) {
      $n = $a;
    }
    else if( (is_string($a) && strlen($a)) || (int)$a > 0 ) {
      $design = CmsLayoutCollection::load($a);
      $n = $design->get_id();
    }

    if( in_array($n,$this->_design_assoc) ) {
      $t = array();
      foreach( $this->_design_assoc as $one ) {
				if( $n == $one ) continue;
				$t[] = $one;
      }
      $this->_design_assoc = $t;
      $this->_dirty = TRUE;
    }
  }

  protected function validate()
  {
    if( !$this->get_name() ) throw new CmsInvalidDataException('Each stylesheet must have a name');
    if( !$this->get_content() ) throw new CmsInvalidDataException('Each stylesheet must have some content');
		if( endswith($this->get_name(),'.css') ) throw new CmsInvalidDataException('Invalid name for a database stylesheet');

    $db = cmsms()->GetDb();
    $tmp = null;
    if( $this->get_id() ) {
      // double check the name.
      $query = 'SELECT id FROM '.cms_db_prefix().self::TABLENAME.' WHERE name = ? AND id != ?';
      $tmp = $db->GetOne($query,array($this->get_name(),$this->get_id()));
    } else {
      // double check the name.
      $query = 'SELECT id FROM '.cms_db_prefix().self::TABLENAME.' WHERE name = ?';
      $tmp = $db->GetOne($query,array($this->get_name()));
    }
    if( $tmp ) {
      throw new CmsInvalidDataException('Stylesheet with the same name already exists.');
    }
  }

  protected function _update()
  {
    if( !$this->_dirty ) return;
    $this->validate();

    $query = 'UPDATE '.cms_db_prefix().self::TABLENAME.'
              SET name = ?, content = ?, description = ?, media_type = ?, media_query = ?,
                  modified = ?
              WHERE id = ?';
		$tmp = '';
		if( isset($this->_data['media_type']) ) $tmp = implode(',',$this->_data['media_type']);
    $db = cmsms()->GetDb();
    $dbr = $db->Execute($query,
												array($this->get_name(),$this->get_content(),$this->get_description(),
															$tmp,$this->get_media_query(),time(), $this->get_id()));
    if( !$dbr ) throw new CmsSQLErrorException($db->sql.' -- '.$db->ErrorMsg());

		// todo: query the designs that have this stylesheet
		$query = 'SELECT design_id FROM '.cms_db_prefix().CmsLayoutCollection::CSSTABLE.' WhERE css_id = ?';
		$design_list = $db->GetCol();
		if( !is_array($design_list) ) $design_list = array();

		// cross reference design_list with $dl ... find designs in this object that aren't already known.
		$dl = $this->get_designs();
		$new_dl = array();
		foreach( $dl as $one ) {
			if( !in_array($one,$design_list) ) $new_dl[] = $one;
		}

    if( is_array($new_dl) && count($new_dl) ) {
			$query1 = 'SELECT MAX(COALESCE(item_order,0))+1 FROM '.cms_db_prefix().CmsLayoutCollection::CSSTABLE.' WHERE design_id = ?';
      $query2 = 'INSERT INTO '.cms_db_prefix().CmsLayoutCollection::CSSTABLE.' (css_id,design_id,item_order) VALUES(?,?,?)';
      foreach( $new_dl as $one ) {
				$one = (int)$one;
				$num = $db->GetOne($query1,array($one));
				$dbr = $db->Execute($query,array($this->get_id(),$one,$num));
      }
    }

    CmsTemplateCache::clear_cache();
    audit($this->get_id(),'CMSMS','Stylesheet '.$this->get_name().' Updated');
    $this->_dirty = FALSE;
  }

  protected function _insert()
  {
    if( !$this->_dirty ) return;
    $this->validate();

    // insert the record
		$tmp = '';
		if( isset($this->_data['media_type']) ) $tmp = implode(',',$this->_data['media_type']);
    $query = 'INSERT INTO '.cms_db_prefix().self::TABLENAME.' (name,content,description,media_type,media_query, created,modified) 
              VALUES (?,?,?,?,?,?,?)';
    $db = cmsms()->GetDb();
    $dbr = $db->Execute($query,
			array($this->get_name(),$this->get_content(),$this->get_description(),
			      $tmp,$this->get_media_query(), time(),time()));
    if( !$dbr ) throw new CmsSQLErrorException($db->sql.' -- '.$db->ErrorMsg());
    $this->_data['id'] = $db->Insert_ID();

    $t = $this->get_designs();
    if( is_array($t) && count($t) ) {
      $query = 'INSERT INTO '.cms_db_prefix().CmsLayoutCollection::CSSTABLE.' (css_id,design_id) VALUES(?,?)';
      foreach( $t as $one ) {
				$dbr = $db->Execute($query,array($this->get_id(),(int)$one));
      }
    }

    $this->_dirty = FALSE;
    CmsTemplateCache::clear_cache();
    audit($this->get_id(),'CMSMS','Stylesheet '.$this->get_name().' Created');
  }

  public function save()
  {
    if( $this->get_id() ) {
			Events::SendEvent('Core','EditStylesheetPre',array(get_class($this)=>&$this));
      $this->_update();
			Events::SendEvent('Core','EditStylesheetPost',array(get_class($this)=>&$this));
			return;
    }
		Events::SendEvent('Core','AddStylesheetPre',array(get_class($this)=>&$this));
		$this->_insert();
		Events::SendEvent('Core','AddStylesheetPost',array(get_class($this)=>&$this));
  }

  public function delete()
  {
    if( !$this->get_id() ) return;

		Events::SendEvent('Core','DeleteStylesheetPre',array(get_class($this)=>&$this));
    $db = cmsms()->GetDb();
    $query = 'DELETE FROM '.cms_db_prefix().CmsLayoutCollection::CSSTABLE.' WHERE css_id = ?';
    $dbr = $db->Execute($query,array($this->get_id()));

    $query = 'DELETE FROM '.cms_db_prefix().self::TABLENAME.' WHERE id = ?';
    $dbr = $db->Execute($query,array($this->get_id()));

    CmsTemplateCache::clear_cache();
    audit($this->get_id(),'CMSMS','Stylesheet '.$this->get_name().' Deleted');
		Events::SendEvent('Core','DeleteStylesheetPost',array(get_class($this)=>&$this));
    unset($this->_data['id']);
    $this->_dirty = TRUE;
  }

	private static function get_locks()
	{
		if( !self::$_lock_cache_loaded ) {
			$tmp = CmsLockOperations::get_locks('stylesheet');
			if( is_array($tmp) && count($tmp) ) {
				self::$_lock_cache = array();
				foreach( $tmp as $one ) {
					self::$_lock_cache[$one['oid']] = $one;
				}
			}
			self::$_lock_cache_loaded = TRUE;
		}
		return self::$_lock_cache;
	}

	public function get_lock()
	{
		$locks = self::get_locks();
		if( isset($locks[$this->get_id()]) ) return $locks[$this->get_id()];
	}

	public function locked()
	{
		$lock = $this->get_lock();
		if( is_object($lock) ) return TRUE;
		return FALSE;
	}

	public function lock_expired()
	{
		$lock = $this->get_lock();
		if( !is_object($lock) ) return FALSE;
		return $lock->expired();
	}

  private static function &_load_from_data($row)
  {
    $ob = new CmsLayoutStylesheet();
		$row['media_type'] = explode(',',$row['media_type']);;
    $ob->_data = $row;
		self::$_css_cache[$row['id']] = $ob;
		self::$_name_cache[$row['name']] = $row['id'];
    return $ob;
  }

  public static function &load($a)
  {
		// check the cache first..
    $db = cmsms()->GetDb();
    $row = null;
    if( (int)$a > 0 ) {
			$a = (int)$a;
			if( isset(self::$_css_cache[$a]) ) return self::$_css_cache[$a];
			// not in cache
      $query = 'SELECT * FROM '.cms_db_prefix().self::TABLENAME.' WHERE id = ?';
      $row = $db->GetRow($query,array($a));
    }
    else if( is_string($a) && strlen($a) > 0 ) {
			if( isset(self::$_name_cache[$a]) ) {
				$b = (int)self::$_name_cache[$a];
				if( isset(self::$_css_cache[$b]) ) return self::$_css_cache[$b];
			}
			// not in cache
      $query = 'SELECT * FROM '.cms_db_prefix().self::TABLENAME.' WHERE name = ?';
      $row = $db->GetRow($query,array($a));
    }
    if( !is_array($row) || count($row) == 0 ) throw new CmsDataNotFoundException('Could not find template identified by '.$a);

    return self::_load_from_data($row);
  }

	public static function load_bulk($ids)
	{
		if( !is_array($ids) || count($ids) == 0 ) return;

		$is_ints = FALSE;
		if( (int)$ids[0] > 0 ) {
			$is_ints = TRUE;
			for( $i = 0; $i < count($ids); $i++ ) {
				$ids[$i] = (int)$ids[$i];
			}
		}
		else if( is_string($ids[0]) && strlen($ids[0]) > 0 ) {
			for( $i = 0; $i < count($ids); $i++ ) {
				$ids[$i] = "'".trim($ids[$i])."'";
			}
		}
		else {
			// what the fuck
			throw new CmsInvalidDataException('Invalid data passed to '.__CLASS__.'::'.__METHOD__);
		}

		$ids = array_unique($ids);

		$db = cmsms()->GetDb();
		$query = 'SELECT * FROM '.cms_db_prefix().self::TABLENAME.' WHERE id IN ('.implode(',',$ids).')';
		if( !$is_ints ) $query = 'SELECT * FROM '.cms_db_prefix().self::TABLENAME.' WHERE name IN ('.implode(',',$ids).')';

		$dbr = $db->GetArray($query);
		$out = array();
		if( is_array($dbr) && count($dbr) ) {
			foreach( $dbr as $row ) {
				$id = $row['id'];
				if( isset(self::$_css_cache[$id]) ) {
					$out[] = self::$_css_cache[$id];
				}
				else {
					$tmp = self::_load_from_data($row);
					if( is_object($tmp) ) $out[] = self::_load_from_data($row);
				}
			}
		}

		if( count($out) ) return $out;
	}

  public static function get_all($as_list = FALSE)
  {
    $db = cmsms()->GetDb();

		$query = null;
		if( $as_list ) {
			$query = 'SELECT id,name FROM '.cms_db_prefix().self::TABLENAME.' ORDER BY modified DESC';
		}
		else {
			$query = 'SELECT id,name,media_type,media_query,media_type,created,modified FROM '.cms_db_prefix().self::TABLENAME.
				       ' ORDER BY modified DESC';
		}
		$dbr = $db->GetArray($query);

    if( is_array($dbr) && count($dbr) ) {
      $out = array();
      foreach( $dbr as $row ) {
				if( $as_list ) {
					$out[$row['id']] = $row['name'];
				}
				else {
					$out[] = self::_load_from_data($row);
				}
      }
      return $out;
    }
  }
} // end of class

#
# EOF
#
?>