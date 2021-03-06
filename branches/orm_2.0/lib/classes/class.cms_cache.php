<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2007 by Ted Kulp (ted@cmsmadesimple.org)
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
#$Id$

/**
 * Wrapper class around Cache:Lite for caching full pages and function output.
 *
 * @author Ted Kulp
 * @since 2.0
 * @version $Revision$
 * @modifiedby $LastChangedBy$
 * @lastmodified $Date$
 * @license GPL
 **/
class CmsCache extends CmsObject
{
	static private $cache = null;
	
	function __construct($type = 'function')
	{
		parent::__construct();

		// Set a few options
		$options = array(
		    'cacheDir' => cms_join_path(ROOT_DIR, 'tmp', 'cache/'),
		    'lifeTime' => 300
		);

		if ($type == 'function')
		{
			//if (!CmsConfig::get('function_caching') || CmsConfig::get('debug'))
			if (!CmsConfig::get('function_caching'))
				$options['caching'] = false;

			require_once(cms_join_path(ROOT_DIR, 'lib', 'pear', 'cache', 'lite', 'Function.php'));
			self::$cache = new Cache_Lite_Function($options);
		}
		else
		{
			require_once(cms_join_path(ROOT_DIR, 'lib', 'pear', 'cache', 'lite', 'Function.php'));
			self::$cache = new Cache_Lite($options);
		}
	}
	
	public static function get_instance($type = 'function')
	{
		static $instances;

		if (!isset($instances))
		{
			$instances = array();
		}

		if (empty($instances[$type]))
		{
			$instances[$type] = new CmsCache($type);
		}

		return $instances[$type];
	}
	
	public function get($id, $group = 'default', $doNotTestCacheValidity = FALSE)
	{
		return self::$cache->get($id, $group, $doNotTestCacheValidity);
	}
	
	public function save($data, $id = NULL, $group = 'default')
	{
		return self::$cache->save($data, $id, $group);
	}
	
	public function call()
	{
		$args = func_get_args();
		return call_user_func_array(array(&self::$cache, 'call'), $args);
	}
	
	public function drop()
	{
		$args = func_get_args();
		return call_user_func_array(array(&self::$cache, 'drop'), $args);
	}
	
	public function clean($group = FALSE, $mode = 'ingroup')
	{
		CmsContentOperations::clear_cache();
		return self::$cache->clean($group, $mode);
	}
	
	static public function clear($group = FALSE, $mode = 'ingroup')
	{
		return self::get_instance()->clean($group, $mode);
	}
}

# vim:ts=4 sw=4 noet
?>