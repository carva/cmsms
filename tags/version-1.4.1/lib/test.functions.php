<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
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
 * Handles test functions
 *
 * @package CMS
 */

/**
 * @return array
 * @var string  $property
*/
function getTestValues($property)
{
	$range = array(
		'phpversion'			=> array('minimum'=>'4.3.0', 'recommended'=>'5.0.4'),
		'gd_version'			=> array('minimum'=>2),
		'memory_limit'			=> array('minimum'=>'16M', 'recommended'=>'24M'),
		'max_execution_time'	=> array('minimum'=>30, 'recommended'=>60),
		'post_max_size'			=> array('minimum'=>'2M', 'recommended'=>'10M'),
		'upload_max_filesize'	=> array('minimum'=>'2M', 'recommended'=>'10M'),
		'mysqlversion'			=> array('minimum'=>'3.23', 'recommended'=>'4.1'),
		'pgsqlversion'			=> array('minimum'=>'7.4', 'recommended'=>'8'),
	);


	if(array_key_exists($property, $range))
	{
		if(empty($range[$property]['recommended']))
		{
			$range[$property]['recommended'] = $range[$property]['minimum'];
		}
		return array($range[$property]['minimum'], $range[$property]['recommended']);
	}

	return array();
}

/**
 * @return string
 * @var string  $return
*/
function getTestReturn($return)
{
	switch($return)
	{
		case 'true':	return lang('success'); break;
		case 'green':	return lang('success'); break;
		case 'yellow':	return lang('caution'); break;
		case 'false':	return lang('failure'); break;
		case 'red':		return lang('failure'); break;
	}

	return '';
}

/**
 * @return array
 * @var boolean $result
 * @var boolean $set
*/
function testGlobal($result, $set = false)
{
	static $continueon = true;
	static $special_failed = false;
	if( ($set) && (is_array($result)) )
	{
		$return = array($continueon, $special_failed);
		list($continueon, $special_failed) = $result;
		return $return;
	}
	if($result == true)
	{
		$continueon = false;
	}
	elseif($result == false)
	{
		$special_failed = true;
	}

	return array($continueon, $special_failed);
}

/**
 * @return object
 * @var string  $title
 * @var string  $value
 * @var string  $return
 * @var string  $message
 * @var string  $error
*/
function & testDummy($title, $value, $return, $message = '', $error = '')
{
	$test =&new StdClass();
	$test->title = $title;
	$test->value = $value;
	$test->secondvalue = null;
	if(trim($message) != '')
	{
		$test->message = $message;
	}
	if(trim($error) != '')
	{
		$test->error = $error;
	}

	$test->res = $return;
	$test->res_text = getTestReturn($return);

	return $test;
}

/**
 * @return object
 * @var string  $title
 * @var string  $varname
 * @var string  $testfunc
 * @var string  $message
*/
function & testConfig($title, $varname, $testfunc = '', $message = '')
{
	global $gCms;
	$config = $gCms->config;

	if( (isset($config[$varname])) && (is_bool($config[$varname])) )
	{
		$value = (true == $config[$varname]) ? 'true' : 'false';
	}
	else if(! empty($config[$varname]))
	{
		$value = $config[$varname];
		if(! empty($testfunc))
		{
			$test = $testfunc(0, $title, $value);
		}
	}
	else
	{
		$value = '';
	}

	if(! isset($test))
	{
		$test =&new StdClass();
		$test->title = $title;
		$test->value = $value;
		$test->secondvalue = null;
		if(trim($message) != '')
		{
			$test->message = $message;
		}
	}

	return $test;
}

/**
 * @return boolean
 * @var object  $test
 * @var string  $varname
 * @var string  $type
*/
function testIni(&$test, $varname, $type)
{
	$error = null;
	$str = ini_get($varname);

	switch($type)
	{
		case 'boolean':
			$str = (bool) $str;
			break;
		case 'integer':
		case 'string':
			$str = (string) $str;
			if(empty($str))
			{
				#$error = lang('could_not_retrieve_a_value');
				if((string) get_cfg_var($varname) != '')
				{
					$str = (string) get_cfg_var($varname);
					#$error .= lang('displaying_the_value_originally');
				}
			}

			if($type == 'integer')
			{
				$str = (int) $str;
			}
			break;
	}

	$test->ini_val = $str;
	$test->error = $error;
	return true;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var mixed   $var
 * @var string  $message
 * @var boolean $ini
 * @var boolean $negative_test
*/
function & testBoolean($required, $title, $var, $message = '', $ini = true, $negative_test = false)
{
	$test =&new StdClass();
	$test->title = $title;

	if($ini)
	{
		testIni($test, $var, 'boolean');
	}
	else
	{
		$test->ini_val = $var;
	}
	$test->ini_val = $negative_test ? (! (bool) $test->ini_val) : (bool) $test->ini_val;

	if($test->ini_val == false)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		if(trim($message) != '')
		{
			$test->message = $message;
		}

		$test->value = $negative_test ? 'On' : 'Off';
		$test->secondvalue = $negative_test ? lang('true') : lang('false');
		if($required)
		{
			$test->res = 'false';
			$test->res_text = getTestReturn($test->res);
		}
		else
		{
			$test->res = 'yellow';
			$test->res_text = getTestReturn($test->res);
		}
	}
	else
	{
		$test->value = $negative_test ? 'Off' : 'On';
		$test->secondvalue = $negative_test ? lang('false') : lang('true');
		if($required)
		{
			$test->res = 'true';
			$test->res_text = getTestReturn($test->res);
		}
		else
		{
			$test->res = 'green';
			$test->res_text = getTestReturn($test->res);
		}
	}

	return $test;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var mixed   $var
 * @var string  $message
 * @var mixed   $minimum
 * @var mixed   $recommended
 * @var boolean $ini
 * @var int     $unlimited
*/
function & testVersionRange($required, $title, $var, $message = '', $minimum, $recommended, $ini = true, $unlimited = null)
{
	$test =& new StdClass();
	$test->title = $title;

	if($ini)
	{
		testIni($test, $var, 'string');
		if(isset($test->error))
		{
			$required = false;
		}
	}
	else
	{
		$test->ini_val = $var;
	}

	$test->value = $test->ini_val;
	$test->secondvalue = null;


	if( (! is_null($unlimited)) && ($test->ini_val == (string) $unlimited) )
	{
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);
		$test->value = lang('unlimited');
	}
	elseif(version_compare($test->ini_val, $minimum) < 0)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
		if(trim($message) != '')
		{
			$test->message = $message;
		}
	}
	elseif(version_compare($test->ini_val, $recommended) < 0)
	{
		$test->res = 'yellow';
		$test->res_text = getTestReturn($test->res);
		if(trim($message) != '')
		{
			$test->message = $message;
		}
	}
	else
	{
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);
	}

	return $test;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var mixed   $var
 * @var string  $message
 * @var mixed   $minimum
 * @var mixed   $recommended
 * @var boolean $ini
 * @var boolean $test_as_bytes
 * @var int     $unlimited
*/
function & testRange($required, $title, $var, $message = '', $minimum, $recommended, $ini = true, $test_as_bytes = false, $unlimited = null)
{
	$test =& new StdClass();
	$test->title = $title;

	if($ini)
	{
		testIni($test, $var, 'string');
		if(isset($test->error))
		{
			$required = false;
		}
	}
	else
	{
		$test->ini_val = $var;
	}

	$test->value = $test->ini_val;
	$test->secondvalue = null;

	if($test_as_bytes)
	{
		$test->ini_val = returnBytes($test->ini_val);
		$minimum = returnBytes($minimum);
		$recommended = returnBytes($recommended);
	}

	if( (! is_null($unlimited)) && ((int) $test->ini_val == (int) $unlimited) )
	{
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);
		$test->value = lang('unlimited');
	}
	elseif((int) $test->ini_val < $minimum)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
	}
	elseif((int) $test->ini_val < $recommended)
	{
		$test->res = 'yellow';
		$test->res_text = getTestReturn($test->res);
	}
	else
	{
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);
	}

	if((int) $test->ini_val < $recommended && trim($message) != '')
	{
		$test->message = $message;
	}

	return $test;
}

/**
 * @return int
 * @var string $val
 */
function returnBytes($val)
{
	if(is_string($val) && $val != '')
	{
		$val = trim($val);
		$last = strtolower(substr($val, strlen($val/1), 1));
		switch($last)
		{
			case 'g':
				$val *= 1024;
			case 'm':
				$val *= 1024;
			case 'k':
				$val *= 1024;
		}
	}

	return (int) $val;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var string  $umask
 * @var string  $message
 * @var boolean $debug
 * @var string  $dir
 * @var string  $file
 * @var string  $data
 */
function & testUmask($required, $title, $umask, $message = '', $debug = false, $dir = '', $file = '_test_umask_', $data = 'this is a test')
{
	$test =& new StdClass();
	$test->title = $title;

	if(empty($dir))
	{
		$dir = TMP_CACHE_LOCATION;
	}

	$_test = true;
	if(! $debug)
	{
		if( (! @is_dir($dir)) || (! @is_writable($dir)) )
		{
			$_test = false;
		}
	}
	else
	{
		if( (! is_dir($dir)) || (! is_writable($dir)) )
		{
			$_test = false;
		}
	}


	if(! $_test)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
		$test->error = lang('errordirectorynotwritable') .' ('. $dir . ')';
		if(trim($message) != '')
		{
			$test->message = $message;
		}
		return $test;
	}
	$_test = true;

	clearstatcache();
	$test->value = $dir;
	$test->secondvalue = substr(sprintf('%o', @fileperms($dir)), -4);

	$test_file = $dir . DIRECTORY_SEPARATOR . $file;
	if(file_exists($test_file)) @unlink($test_file);

	if(! $debug)
	{
		@umask(octdec($umask));
		$fp = @fopen($test_file, "w");
	}
	else
	{
		umask(octdec($umask));
		$fp = fopen($test_file, "w");
	}

	if($fp !== false)
	{
		$_return = '';
		if(! $debug) $_return = @fwrite($fp, $data);
		else         $_return = fwrite($fp, $data);
		@fclose($fp);

		$_opt = permission_stat($test_file, $debug);
		if($_opt == false)
		{
			list($test->continueon, $test->special_failed) = testGlobal($required);
			$test->res = 'red';
			$test->res_text = getTestReturn($test->res);
			$test->error = lang('errorcantcreatefile') .' ('. $test_file . ')';
			if(trim($message) != '')
			{
				$test->message = $message;
			}
			return $test;
		}

		$test->opt = $_opt;

		if(! $debug) @unlink($test_file);
		else          unlink($test_file);
		if(! empty($_return))
		{
			$test->res = 'green';
			$test->res_text = getTestReturn($test->res);
			return $test;
		}
	}

	list($test->continueon, $test->special_failed) = testGlobal($required);
	$test->res = 'red';
	$test->res_text = getTestReturn($test->res);
	$test->error = lang('errorcantcreatefile') .' ('. $test_file .')';
	return $test;
}



/**
 * @return array
 * @var string  $file
 * @var boolean $debug
 */
function permission_stat($file, $debug = false)
{
	clearstatcache();
	$filestat = stat($file);
	if($filestat == false)
	{
		return false;
	}

	clearstatcache();
	if(! $debug) $mode = @fileperms($file);
	else         $mode = fileperms($file);

	$opt['permsdec'] = substr(sprintf('%o', $mode), -4);
	$opt['permsstr'] = permission_octal2string($mode);

	// functions not available on WAMP systems
	if( (function_exists('posix_getpwuid')) && (function_exists('posix_getgrgid')) )
	{
		if(! $debug)
		{
			$userinfo = @posix_getpwuid($filestat[4]);
			$groupinfo = @posix_getgrgid($filestat[5]);
		}
		else
		{
			$userinfo = posix_getpwuid($filestat[4]);
			$groupinfo = posix_getgrgid($filestat[5]);
		}
		$opt['username'] = isset($userinfo['name']) ? $userinfo['name'] : lang('unknown');
		$opt['usergroup'] = isset($groupinfo['name']) ? $groupinfo['name'] : lang('unknown');
	}
	else
	{
		$opt['username'] = lang('unknown');
		$opt['usergroup'] = lang('unknown');
	}

	return $opt;
}

/**
 * @var octal $mode
 * @return string
 */
function permission_octal2string($mode)
{
	if(($mode & 0xC000) === 0xC000) {
		$type = 's';
	} elseif(($mode & 0xA000) === 0xA000) {
		$type = 'l';
	} elseif(($mode & 0x8000) === 0x8000) {
		$type = '-';
	} elseif(($mode & 0x6000) === 0x6000) {
		$type = 'b';
	} elseif(($mode & 0x4000) === 0x4000) {
		$type = 'd';
	} elseif(($mode & 0x2000) === 0x2000) {
		$type = 'c';
	} elseif(($mode & 0x1000) === 0x1000) {
		$type = 'p';
	} else{
		$type = '?';
	}

	$owner  = ($mode & 00400) ? 'r' : '-';
	$owner .= ($mode & 00200) ? 'w' : '-';
	if($mode & 0x800) {
		$owner .= ($mode & 00100) ? 's' : 'S';
	} else {
		$owner .= ($mode & 00100) ? 'x' : '-';
	}

	$group  = ($mode & 00040) ? 'r' : '-';
	$group .= ($mode & 00020) ? 'w' : '-';
	if($mode & 0x400) {
		$group .= ($mode & 00010) ? 's' : 'S';
	} else {
		$group .= ($mode & 00010) ? 'x' : '-';
	}

	$other  = ($mode & 00004) ? 'r' : '-';
	$other .= ($mode & 00002) ? 'w' : '-';
	if($mode & 0x200) {
		$other .= ($mode & 00001) ? 't' : 'T';
	} else {
		$other .= ($mode & 00001) ? 'x' : '-';
	}

	return $type . $owner . $group . $other;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var string  $message
 * @var boolean $debug
 * @var string  $dir
 * @var string  $file
*/
function & testCreateDirAndFile($required, $title, $message='', $debug = false, $dir = '_test_dir_file_', $file = '_test_dir_file_')
{
	$test =& new StdClass();
	$test->title = $title;
	$dir = cms_join_path(TMP_CACHE_LOCATION, $dir);
	$file = cms_join_path($dir, $file);

	if(file_exists($file)) @unlink($file);
	if( (is_dir($dir)) && (false !== strpos($dir, dirname(dirname(__FILE__)))) ) @rmdir($dir);

	if(! $debug)
	{
		@mkdir($dir);
		@touch($file);
		$_test = file_exists($file);
		@unlink($file);
		@rmdir($dir);
	}
	else
	{
		if(! mkdir($dir)) $test->error = lang('errordirectorynotwritable') .' ('. $dir . ')';
		if(! touch($file)) $test->error = lang('errorcantcreatefile') .' ('. $file . ')';
		$_test = file_exists($file);
	}

	if(! $_test)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->continueon = false;
		$test->special_failed = true;
		$test->res = 'false';
		if(trim($message) != '')
		{
			$test->message = $message;
		}
	}
	else
	{
		$test->res = 'true';
	}
	$test->res_text = getTestReturn($test->res);
	return $test;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var string  $dir
 * @var string  $message
 * @var boolean $quick
 * @var boolean $debug
 * @var string  $file
 * @var string  $data
*/
function & testDirWrite($required, $title, $dir, $message = '', $quick = 0, $debug = false, $file = '_test_dir_write_', $data = 'this is a test')
{
	$test =& new StdClass();
	$test->title = $title;

	if(empty($dir))
	{
		$dir = TMP_CACHE_LOCATION;
	}
	$test->value = $dir;
	$test->secondvalue = substr(sprintf('%o', @fileperms($dir)), -4);

	$_test = true;
	if(! $debug)
	{
		if( (! @is_dir($dir)) || (! @is_writable($dir)) )
		{
			$_test = false;
		}
	}
	else
	{
		if( (! is_dir($dir)) || (! is_writable($dir)) )
		{
			$_test = false;
		}
	}

	if(! $_test)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
		$test->error = lang('errordirectorynotwritable') .' ('. $dir . ')';
		if(trim($message) != '')
		{
			$test->message = $message;
		}
		return $test;
	}
	$_test = true;

	if($quick)
	{
		// we're only doing the quick test
		// which sucks
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);
		return $test;
	}

	$test_file = $dir . DIRECTORY_SEPARATOR . $file;
	if(file_exists($test_file)) @unlink($test_file);

	if(! $debug) $fp = @fopen($test_file, "w");
	else         $fp = fopen($test_file, "w");
	if($fp !== false)
	{
		$_return = '';
//		flock($fp, LOCK_EX); //no on NFS filesystem
		if(! $debug) $_return = @fwrite($fp, $data);
		else         $_return = fwrite($fp, $data);
//		flock($fp, LOCK_UN);
		@fclose($fp);

		if(! $debug) @unlink($test_file);

		if(! empty($_return))
		{
			$test->res = 'green';
			$test->res_text = getTestReturn($test->res);
			return $test;
		}
	}

	list($test->continueon, $test->special_failed) = testGlobal($required);
	$test->res = 'red';
	$test->res_text = getTestReturn($test->res);
	$test->error = lang('errorcantcreatefile') .' ('. $test_file . ')';
	if(trim($message) != '')
	{
		$test->message = $message;
	}

	return $test;
}


/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var string  $dir
 * @var string  $message
 * @var boolean $debug
 * @var string  $search
*/
function & testRemoteFile($required, $title, $url = '', $message = '', $debug = false, $search = 'cmsmadesimple')
{
	if(empty($url))
	{
		$url = 'http://dev.cmsmadesimple.org/latest_version.php';
	}

	$test =& new StdClass();
	$test->title = $title;
	//$test->value = $url;

	if(!$url_info = parse_url($url))
	{
		// Relative or invalid URL?
		$test->error = lang('invalid_test');
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
		return $test;
	}

	$handle = false;
	$result = testBoolean(0, '', 'allow_url_fopen', lang('test_allow_url_fopen_failed'), false, false);
	if($result->value == 'On') // Primary test with fopen
	{
		if(! $debug) $handle = @fopen($url, 'rb');
		else         $handle = fopen($url, 'rb');
	}

	if( ($result->value == 'Off') || (false === $handle) ) // Test with fsockopen
	{
		switch($url_info['scheme'])
		{
			case 'https': // Check for 4.3.7 minimum?
				$scheme = 'ssl://';
				$port = (isset($url_info['port'])) ? $url_info['port'] : 443;
				break;
			case 'http':
			default:
				$scheme = '';
				$port = (isset($url_info['port'])) ? $url_info['port'] : 80;
		}

		$test->message = lang('use_fsockopen');
		$complete_url  = (isset($url_info['path'])) ? $url_info['path'] : '/';
		$complete_url .= (isset($url_info['query'])) ? '?'.$url_info['query'] : '';
		$handle = @fsockopen($scheme . $url_info['host'], $port, $errno, $errstr, 30);
		if(false !== $handle)
		{
			$out  = "GET " . $complete_url . " HTTP/1.1\r\n";
			$out .= "Host: " . $url_info['host'] . "\r\n";
			$out .= "Connection: Close\r\n\r\n";
			@fwrite($handle, $out);
		}
		else
		{
		  $test->error = lang('use_fsockopen_error');
		}
	}

	if(false !== $handle)
	{
		$content = '';
		while(!feof($handle))
		{
			$content .= @fgets($handle, 128);
		}
		@fclose($handle);

		if( (!empty($search)) && (false !== strpos($content, $search)) && (empty($test->message)) )
		{
			$test->res = 'green';
			$test->res_text = getTestReturn($test->res);
			return $test;
		}
		elseif( (false !== strpos($content, '200 OK')) || (empty($test->message)) )
		{
			$test->res = 'yellow';
			$test->res_text = getTestReturn($test->res);
			return $test;
		}
	}

	list($test->continueon, $test->special_failed) = testGlobal($required);
	$test->res = 'red';
	$test->res_text = getTestReturn($test->res);
	if(trim($message) != '')
	{
		$test->message = $message;
	}

	return $test;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var string  $file1
 * @var string  $file2
 * @var int     $timestamp2
 * @var string  $message
 * @var string  $formattime
*/
function & testFileChecksum($required, $title, $file1, $file2, $timestamp2 = 0, $message = '', $formattime = '%c')
{
	$test =& new StdClass();
	$test->title = $title;
	$test->value = $file1;

	if(! file_exists($file1))
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
		$test->error = lang('nofiles') .' ('. $file1 . ')';
		if(trim($message) != '')
		{
			$test->message = $message;
		}
		return $test;
	}

	$file1_checksum = @md5_file($file1);
	$file1_time = @filemtime($file1);

	if(file_exists($file2))
	{
		$file2_checksum = @md5_file($file2);
		$file2_time = @filemtime($file2);
	}
	elseif(!empty($timestamp2)) // Not file but get data (and modification time) everywhere
	{
		$file2_checksum = $file2;
		$file2_time = $timestamp2;
	}
	else // Not file but get everywhere, not modification time
	{
		$file2_checksum = $file2;
	}

	if($file1_checksum == $file2_checksum)
	{
		$test->secondvalue = lang('checksum_match');
		$test->opt['file1_timestamp'] = $file1_time;
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);

		if( (isset($file2_time)) && ($file1_time <> $file2_time) )
		{
			$test->opt['file2_timestamp'] = $file2_time;
			$test->opt['format_timestamp'] = $formattime;
			$test->res = 'yellow';
			$test->res_text = getTestReturn($test->res);
		}

		return $test;
	}

	$test->secondvalue = lang('checksum_not_match');
	$test->opt['file1_timestamp'] = $file1_time;
	if( (isset($file2_time)) && ($file1_time <> $file2_time) )
	{
		$test->opt['file2_timestamp'] = $file2_time;
	}
	$test->opt['format_timestamp'] = $formattime;

	list($test->continueon, $test->special_failed) = testGlobal($required);
	$test->res = 'red';
	$test->res_text = getTestReturn($test->res);
	if(trim($message) != '')
	{
		$test->message = $message;
	}

	return $test;
}

/**
 * @return object
 * @var string  $file1
 * @var string  $checksum
 * @var string  $formattime
*/
function & testOptimizedLoopFileChecksum($file1, $checksum, $formattime = '%c')
{
	static $result = array();

	if(! file_exists($file1))
	{
		$test =& new StdClass();
		$test->value = $file1;
		$test->secondvalue = lang('nofiles') .' ('. $file1 . ')';

		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);

		$result[] = $test;
	}

	$file1_checksum = @md5_file($file1);

	if($file1_checksum != $checksum)
	{
		$test =& new StdClass();
		$test->value = $file1;
		$test->secondvalue = lang('checksum_not_match');

		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);

		$file1_time = @filemtime($file1);
		$test->opt['file1_timestamp'] = $file1_time;
		$test->opt['format_timestamp'] = $formattime;

		$result[] = $test;
	}

	return $result;
}

/**
 * @return object
 * @var boolean $required
 * @var string  $title
 * @var string  $minimum
 * @var string  $message
*/
function & testGDVersion($required, $title, $minimum, $message = '')
{
	$test =& new StdClass();
	$test->title = $title;

	$gd_version_number = GDVersion();
	$test->value = $gd_version_number;
	$test->secondvalue = null;

	if($gd_version_number < $minimum)
	{
		list($test->continueon, $test->special_failed) = testGlobal($required);
		$test->res = 'red';
		$test->res_text = getTestReturn($test->res);
		if(trim($message) != '')
		{
			$test->message = $message;
		}
	}
	else
	{
		$test->res = 'green';
		$test->res_text = getTestReturn($test->res);
	}

	return $test;
}

/**
 * @return string
*/
function GDVersion()
{
	static $gd_version_number = null;

	if(is_null($gd_version_number)) {
		if(extension_loaded('gd')) {
			if(defined('GD_MAJOR_VERSION')) {
				$gd_version_number = GD_MAJOR_VERSION;
				return $gd_version_number;
			}
			$gdinfo = @gd_info();
			if(preg_match('/\d+/', $gdinfo['GD Version'], $gdinfo)) {
				$gd_version_number = (int) $gdinfo[0];
			} else {
				$gd_version_number = 1;
			}
			return $gd_version_number;
		}
		$gd_version_number = 0;
	}

	return $gd_version_number;
}
# vim:ts=4 sw=4 noet
?>
