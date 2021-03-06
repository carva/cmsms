<?php

class cms_config implements ArrayAccess
{
  const TYPE_STRING = 'STRING';
  const TYPE_INT = 'INT';
  const TYPE_BOOL = 'BOOL';
  
  private static $_instance;
  private $_types;
  private $_data = array();
  private $_cache = array();
  private $_friends = array('CMSInstallerPage7','CMSUpgradePage3');

  // this is a singleton.
  private function __construct()  {}

  private function get_upload_size()
  {
    $maxFileSize = ini_get('upload_max_filesize');
    if (!is_numeric($maxFileSize))
      {
	$l=strlen($maxFileSize);
	$i=0;$ss='';$x=0;
	while ($i < $l)
	  {
	    if (is_numeric($maxFileSize[$i]))
	      {$ss .= $maxFileSize[$i];}
	    else
	      {
		if (strtolower($maxFileSize[$i]) == 'm') $x=1000000;
		if (strtolower($maxFileSize[$i]) == 'k') $x=1000;
	      }
	    $i ++;
	  }
	$maxFileSize=$ss;
	if ($x >0) $maxFileSize = $ss * $x;
      }
    else
      {
	$maxFileSize = 1000000;
      }
    return $maxFileSize;
  }

  private function load_config()
  {
    $this->_types = array();
    $this->_types['dbms'] = self::TYPE_STRING;
    $this->_types['db_hostname'] = self::TYPE_STRING;
    $this->_types['db_username'] = self::TYPE_STRING;
    $this->_types['db_password'] = self::TYPE_STRING;
    $this->_types['db_name'] = self::TYPE_STRING;
    $this->_types['db_port'] = self::TYPE_INT;
    $this->_types['db_prefix'] = self::TYPE_STRING;
    $this->_types['use_adodb_lite'] = self::TYPE_BOOL;
    $this->_types['root_url'] = self::TYPE_STRING;
    $this->_types['ssl_url'] = self::TYPE_STRING;
    $this->_types['root_path'] = self::TYPE_STRING;
    $this->_types['admin_dir'] = self::TYPE_STRING;
    $this->_types['uploads_path'] = self::TYPE_STRING;
    $this->_types['uploads_url'] = self::TYPE_STRING;
    $this->_types['ssl_uploads_url'] = self::TYPE_STRING;
    $this->_types['image_uploads_path'] = self::TYPE_STRING;
    $this->_types['image_uploads_url'] = self::TYPE_STRING;
    $this->_types['debug'] = self::TYPE_BOOL;
    $this->_types['process_whole_template'] = self::TYPE_BOOL;
    $this->_types['output_compression'] = self::TYPE_BOOL;
    $this->_types['timezone'] = self::TYPE_STRING;
    $this->_types['persist_db_conn'] = self::TYPE_BOOL;
    $this->_types['previews_path'] = self::TYPE_STRING;
    $this->_types['max_upload_size'] = self::TYPE_INT;
    $this->_types['default_upload_permission'] = self::TYPE_STRING;
    $this->_types['use_smarty_php_tags'] = self::TYPE_BOOL;
    $this->_types['auto_alias_content'] = self::TYPE_BOOL;
    $this->_types['url_rewriting'] = self::TYPE_STRING;
    $this->_types['page_extension'] = self::TYPE_STRING;
    $this->_types['query_var'] = self::TYPE_STRING;
    $this->_types['image_manipulation_prog'] = self::TYPE_STRING;
    $this->_types['image_transform_lib_path'] = self::TYPE_STRING;
    $this->_types['locale'] = self::TYPE_STRING;
    $this->_types['default_encoding'] = self::TYPE_STRING;
    $this->_types['admin_encoding'] = self::TYPE_STRING;
    $this->_types['set_names'] = self::TYPE_BOOL;
    $this->_types['wiki_url'] = self::TYPE_STRING;
    $this->_types['admin_url'] = self::TYPE_STRING;
    $this->_types['ignore_lazy_load'] = self::TYPE_BOOL;

    $config = array();
    if (file_exists(CONFIG_FILE_LOCATION))
      {
	include(CONFIG_FILE_LOCATION);
      }
    $this->_data = $config;
  }


  /**
   * @ignore
   * @internal
   */
  public function merge($newconfig)
  {
    if( !is_array($newconfig) ) return;
    $trace = debug_backtrace(FALSE);
    $class = '';
    if( isset($trace[1]['class']) ) $class = $trace[1]['class'];
    if( $class && in_array($class,$this->_friends) )
      {
	$this->_data = array_merge($this->_data,$newconfig);
      }
  }


  public static function &get_instance()
  {
    if (!isset(self::$_instance)) {
      $c = __CLASS__;
      self::$_instance = new $c;

      // now load the config
      self::$_instance->load_config();
    }

    return self::$_instance;
  }


  public function offsetExists($key)
  {
    return isset($this->_types[$key]) || isset($this->_data[$key]);
  }


  public function offsetGet($key)
  {
    if( isset($this->_data[$key]) )
      {
	return $this->_data[$key];
      }

    if( isset($this->_cache[$key]) )
      {
	// this saves recursion and dynamic calculations all the time.
	return $this->_cache[$key];
      }

    // it's not explicitly specified in the config file.
    $calculated_root_path = dirname(dirname(dirname(__FILE__)));
    switch( $key )
      {
      case 'dbms':
      case 'db_hostname':
      case 'db_username':
      case 'db_password':
      case 'db_name':
	// these guys have to be set
	stack_trace();
	die('FATAL ERROR: Could not find database connection key '.$key.' in the config file');
	break;

      case 'use_adodb_lite':
	return true;

      case 'persist_db_conn':
	return false;

      case 'set_names':
	return true;

      case 'root_path':
	return dirname(dirname(dirname(__FILE__)));

      case 'root_url':
	{
	  $parts = parse_url($_SERVER['REQUEST_URI']);
	  $path = '';
	  if( !empty($parts['path']) )
	    {
	      $path = dirname($parts['path']);
	      if( endswith($path,'install') )
		{
		  $path = substr($path,0,strlen($path)-strlen('install')-1);
		}
	    }
	  // todo: here we could get the default content object and test if it's secure
	  $str = 'http://'.$_SERVER['HTTP_HOST'].$path;
	  return $str;
	}
	break;

      case 'ssl_url':
	$this->_cache[$key] = str_replace('http://','https://',$this->offsetGet('root_url'));
	return $this->_cache[$key];
	
      case 'uploads_path':
	$this->_cache[$key] = cms_join_path($this->offsetGet('root_path'),'uploads');
	return $this->_cache[$key];

      case 'uploads_url':
	$this->_cache[$key] = $this->offsetGet('root_url').'/uploads';
	return $this->_cache[$key];

      case 'ssl_uploads_url':
	$this->_cache[$key] = str_replace('http://','https://',$this->offsetGet('uploads_url'));
	return $this->_cache[$key];
	
      case 'image_uploads_path':
	$this->_cache[$key] = cms_join_path($this->offsetGet('uploads_path'),'images');
	return $this->_cache[$key];

      case 'image_uploads_url':
	$this->_cache[$key] = $this->offsetGet('uploads_url').'/images';
	return $this->_cache[$key];

      case 'previews_path':
	return TMP_CACHE_LOCATION;

      case 'admin_dir':
	return 'admin';

      case 'debug':
	return false;

      case 'process_whole_template':
	return false;

      case 'output_compression':
	return false;

      case 'timezone':
	return '';

      case 'db_port':
	return '';

      case 'max_upload_size':
      case 'upload_max_filesize':
	return $this->get_upload_size();

      case 'default_upload_permission':
	return '664';

      case 'use_smarty_php_tags':
	return false;

      case 'auto_alias_content':
	return true;

      case 'url_rewriting':
	return 'none';

      case 'page_extension':
	return '';

      case 'query_var':
	return 'page';

      case 'image_manipulation_prog':
	return 'GD';

      case 'image_transform_lib_path':
	return ('WIN' === strtoupper(substr(PHP_OS, 0, 3))) ? 'C:/Program Files/VisualMagick/bin/' : '/usr/bin/ImageMagick/';

      case 'locale':
	return '';

      case 'default_encoding':
      case 'admin_encoding':
	return 'utf-8';

      case 'wiki_url':
	return 'http://wiki.cmsmadesimple.org/index.php/User_Handbook/Admin_Panel';

      case 'admin_url':
	return $this->offsetGet('root_url').'/'.$this->offsetGet('admin_dir');

      case 'ignore_lazy_load':
	return false;

      default:
	// not a mandatory key for the config.php file... and one we don't understand.
	return null;
      }
  }

  public function offsetSet($key,$value)
  {
    $tmp = debug_backtrace();
    $parent = '';
    if( isset($tmp[1]) && isset($tmp[1]['class']) )
      {
	$class = $tmp[1]['class'];
	$parent = get_parent_class($class);
      }
    if( $parent != 'CMSInstallerPage' )
      {
	trigger_error('Modification of config variables is deprecated',E_USER_ERROR);
	return;
      }
    $this->_data[$key] = $value;
  }


  public function offsetUnset($key)
  {
    trigger_error('Unsetting config variable '.$key.' is invalid',E_USER_ERROR);
  }


  private function _printable_value($key,$value)
  {
    $type = self::TYPE_STRING;

    if( isset($this->_types[$key]) )
      {
	$type = $this->_types[$key];
      }

    $str = '';
    switch( $type )
      {
      case self::TYPE_STRING:
	$str = "'".$value."'";
	break;

      case self::TYPE_BOOL:
	$str = ($value)?'true':'false';
	break;

      case self::TYPE_INT:
	$str = (int)$value;
	break;
      }
    return $str;
  }


  public function save($verbose = true,$filename = '')
  {
    if( !$filename )
      {
	$filename = CONFIG_FILE_LOCATION;
      }

    // backup the original config.php file (just in case)
    if( file_exists($filename) )
      {
	@copy($filename,cms_join_path(TMP_CACHE_LOCATION,basename($filename).time().'.bak'));
      }

    $output = "<?php\n";
    // output header to the config file.

    foreach( $this->_data as $key => $value )
    {
      // we're writing this var to the config file.
      if( $verbose )
	{
	  // see if we can get some help for the item.
	  $fn = cms_join_path($this->offsetGet('root_path'),'doc','help_'.$key.'.txt');
	  if( file_exists($fn) )
	    {
	      $output .= "\n".file_get_contents($fn);
	      if( !endswith($output,"\n") )
		{
		  $output .= "\n";
		}
	    }
	}
      $outvalue = $this->_printable_value($key,$value);
      $output .= "\$config['{$key}'] = $outvalue;\n";
    }

    $output .= "?>\n";

    // and write it.
    $fh = fopen($filename,'w');
    if( $fh )
      {
	fwrite($fh,$output);
	fclose($fh);
      }
  }

} // end of class

?>