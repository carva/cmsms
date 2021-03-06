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
#$Id: misc.functions.php 2707 2006-04-19 20:55:08Z wishy $

/**
 * Misc functions
 *
 * @package CMS
 */
/**
 * Redirects to relative URL on the current site
 *
 * @author http://www.edoceo.com/
 * @since 0.1
 */
function redirect($to, $noappend=false)
{
	$_SERVER['PHP_SELF'] = null;

    global $gCms;
	if (isset($gCms))
		$config =& $gCms->GetConfig();
	else
		$config = array();

    $schema = $_SERVER['SERVER_PORT'] == '443' ? 'https' : 'http';
    $host = strlen($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:$_SERVER['SERVER_NAME'];

    $components = parse_url($to);
    if(count($components) > 0)
    {
        $to =  (isset($components['scheme']) && startswith($components['scheme'], 'http') ? $components['scheme'] : $schema) . '://';
        $to .= isset($components['host']) ? $components['host'] : $host;
        $to .= isset($components['port']) ? ':' . $components['port'] : '';
        if(isset($components['path']))
        {
            if(in_array(substr($components['path'],0,1),array('\\','/')))//Path is absolute, just append.
            {
                $to .= $components['path'];
            }
            //Path is relative, append current directory first.
			else if (isset($_SERVER['PHP_SELF']) && !is_null($_SERVER['PHP_SELF'])) //Apache
            {
                $to .= (strlen(dirname($_SERVER['PHP_SELF'])) > 1 ?  dirname($_SERVER['PHP_SELF']).'/' : '/') . $components['path'];
            }
			else if (isset($_SERVER['REQUEST_URI']) && !is_null($_SERVER['REQUEST_URI'])) //Lighttpd
            {
				if (endswith($_SERVER['REQUEST_URI'], '/'))
					$to .= (strlen($_SERVER['REQUEST_URI']) > 1 ? $_SERVER['REQUEST_URI'] : '/') . $components['path'];
				else
					$to .= (strlen(dirname($_SERVER['REQUEST_URI'])) > 1 ? dirname($_SERVER['REQUEST_URI']).'/' : '/') . $components['path'];
            }
        }
        $to .= isset($components['query']) ? '?' . $components['query'] : '';
        $to .= isset($components['fragment']) ? '#' . $components['fragment'] : '';
    }
    else
    {
        $to = $schema."://".$host."/".$to;
    }

    //If session trans-id is being used, and they is on yo website, add it.
	/*
    if (ini_get("session.use_trans_sid") != "0" && $noappend == false && strpos($to,$host) !== false)
    {
        if(strpos($to,'?') !== false)//If there are no arguments start a querystring
        {
            //$to = $to."?".session_name()."=".session_id();
        }
        else//There are arguments, print an arg seperator
        {
            //$to = $to.ini_get('arg_separator.input').session_name()."=".session_id();
        }
    }
	*/

    if (headers_sent() && !(isset($config) && $config['debug'] == true))
    {
        // use javascript instead
        echo '<script type="text/javascript">
            <!--
                location.replace("'.$to.'");
            // -->
            </script>
            <noscript>
                <meta http-equiv="Refresh" content="0;URL='.$to.'">
            </noscript>';
        exit;

    }
    else
    {
        if (isset($config) && $config['debug'] == true)
        {
            echo "Debug is on.  Redirecting disabled...  Please click this link to continue.<br />";
            echo "<a href=\"".$to."\">".$to."</a><br />";
            global $sql_queries;
            if (isset($sql_queries))
            {
                echo $sql_queries;
            }
            exit();
        }
        else
        {
            header("Location: $to");
            exit();
        }
	}
}

/**
 * Shows the difference in seconds between two microtime() values
 *
 * @since 0.3
 */
function microtime_diff($a, $b) {
	list($a_dec, $a_sec) = explode(" ", $a);
	list($b_dec, $b_sec) = explode(" ", $b);
	return $b_sec - $a_sec + $b_dec - $a_dec;
}

/**
 * Shows a very close approximation of an Apache generated 404 error.
 *
 * Shows a very close approximation of an Apache generated 404 error.
 * It also sends the actual header along as well, so that generic
 * browser error pages (like what IE does) will be displayed.
 *
 * @since 0.3
 */
#function ErrorHandler404($errno, $errmsg, $filename, $linenum, $vars)
function ErrorHandler404()
{
	#if ($errno == E_USER_WARNING) {
		@ob_end_clean();
		header("HTTP/1.0 404 Not Found");
		echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
</body></html>';
		exit();
	#}
}

/**
 * Simple template parser
 *
 * @since 0.6.1
 */

	function parse_template ($template, $tpl_array, $warn=0)
	{
		while ( list ($key,$val) = each ($tpl_array) )
		{
			if (!(empty($key)))
			{
				if(gettype($val) != "string")
				{
					settype($val,"string");
				}
				$template = eregi_replace('\{' . $key . '\}',$val,$template);
			}
		}

		if(!$warn)
		{
			// Silently remove anything not already found

			$template = ereg_replace('\{[A-Z0-9_]+\}', "", $template);
		}
		else
		{
			// Warn about unresolved template variables
			if (ereg('\{[A-Z0-9_]+\}',$template))
			{
				$unknown = split("\n",$template);
				while (list ($Element,$Line) = each($unknown) )
				{
					$UnkVar = $Line;
					if(!(empty($UnkVar)))
					{
						$this->show_unknowns($UnkVar);
					}
				}
			}
		}
		return $template;

	}	// end parse_template();

function cms_htmlentities($string, $param=ENT_QUOTES, $charset="UTF-8")
{
	$result = "";
	#$result = htmlentities($string, $param, $charset);
	$result = my_htmlentities($string);
	return $result;
}

/**
 * Figures out the page name from the uri string.  Has to use different logic
 * based on the type of httpd server.
 */
function cms_calculate_url()
{
	$result = '';

	//Apache
	if (isset($_SERVER["PHP_SELF"]) && !endswith($_SERVER['PHP_SELF'], 'index.php'))
	{
		$matches = array();
		if (preg_match('/.*index\.php\/(.*?)$/', $_SERVER['PHP_SELF'], $matches))
		{
			$result = $matches[1];
		}
	}
	//lighttpd
	else if (isset($_SERVER["REQUEST_URI"]) && !endswith($_SERVER['REQUEST_URI'], 'index.php'))
	{
		$matches = array();
		if (preg_match('/.*index\.php\/(.*?)$/', $_SERVER['REQUEST_URI'], $matches))
		{
			$result = $matches[1];
		}
	}

	return $result;
	
}

/**
 * Enter description here...
 *
 * @param unknown $val
 * @param integer $quote_style
 * @return unknown
 * 
 * $quote_style may be one of:
 *     ENT_COMPAT   : Will convert double-quotes and leave single-quotes alone. 
 *     ENT_QUOTES   : Will convert both double and single quotes. 
 *     ENT_NOQUOTES : Will leave both double and single quotes unconverted. 
 */
function my_htmlentities($val)
{
	if ($val == "")
	{
		return "";
	}
	$val = str_replace( "&#032;", " ", $val ); 

	//Remove sneaky spaces 
	// $val = str_replace( chr(0xCA), "", $val );   

	$val = str_replace( "&"            , "&amp;"         , $val ); 
	$val = str_replace( "<!--"         , "&#60;&#33;--"  , $val ); 
	$val = str_replace( "-->"          , "--&#62;"       , $val ); 
	$val = preg_replace( "/<script/i"  , "&#60;script"   , $val ); 
	$val = str_replace( ">"            , "&gt;"          , $val ); 
	$val = str_replace( "<"            , "&lt;"          , $val ); 
	
	
	$val = str_replace( "\""           , "&quot;"        , $val ); 

	// Uncomment it if you need to convert literal newlines 
	//$val = preg_replace( "/\n/"        , "<br>"          , $val ); 

	$val = preg_replace( "/\\$/"      , "&#036;"        , $val ); 

	// Uncomment it if you need to remove literal carriage returns 
	//$val = preg_replace( "/\r/"        , ""              , $val ); 

	$val = str_replace( "!"            , "&#33;"         , $val ); 
	$val = str_replace( "'"            , "&#39;"         , $val ); 
	 
	// Uncomment if you need to convert unicode chars 
	//$val = preg_replace("/&#([0-9]+);/s", "&#\1;", $val ); 

	// Strip slashes if not already done so. 

	//if ( get_magic_quotes_gpc() ) 
	//{ 
	//	$val = stripslashes($val); 
	//} 

	// Swop user inputted backslashes 

	//$val = preg_replace( "/\(?!&#|?#)/", "&#092;", $val );

	return $val;
}


//Taken from http://www.webmasterworld.com/forum88/164.htm
function nl2pnbr( $text )
{
	// Use \n for newline on all systems
	$text = preg_replace("/(\r\n|\n|\r)/", "\n", $text);

	// Only allow two newlines in a row.
	$text = preg_replace("/\n\n+/", "\n\n", $text);

	// Put <p>..</p> around paragraphs
	$text = preg_replace('/\n?(.+?)(\n\n|\z)/s', "<p>$1</p>", $text);

	// Convert newlines not preceded by </p> to a <br /> tag
	$text = preg_replace('|(?<!</p>)\s*\n|', "<br />", $text);

	return $text;
}

function debug_bt() 
{ 
    $bt=debug_backtrace(); 
    $file = $bt[0]['file']; 
    $line = $bt[0]['line']; 
 
    echo "\n\n<p><b>Backtrace in $file on line $line</b></p>\n"; 
 
    $bt = array_reverse($bt); 
    echo "<pre><dl>\n"; 
    foreach($bt as $trace) 
    { 
        $file = $trace['file']; 
        $line = $trace['line']; 
        $function = $trace['function']; 
        $args = implode(',', $trace['args']); 
        echo "
        <dt><b>$function</b>($args) </dt> 
        <dd>$file on line $line</dd> 
		";
	} 
    echo "</dl></pre>\n"; 
}

/**
* Debug function to display $var nicely in html.
* 
* @param mixed $var
* @param string $title (optional)
* @param boolean $echo_to_screen (optional)
* @return string
*/
function debug_display($var, $title="", $echo_to_screen = true, $use_html = true)
{
	$titleText = "Debug: ";
	if($title)
	{
		$titleText = "Debug display of '$title':";
	}

	ob_start();
	if ($use_html)
		echo "<p><b>$titleText</b><pre>\n";

	if(is_array($var))
	{
		echo "Number of elements: " . count($var) . "\n";
		print_r($var);
	}
	elseif(is_object($var))
	{
		print_r($var);
	}
	elseif(is_string($var))
	{
		print_r(htmlentities(str_replace("\t", '  ', $var)));
	}
	elseif(is_bool($var))
	{
		echo $var === true ? 'true' : 'false';
	}
	else
	{
		print_r($var);
	}

	if ($use_html)
		echo "</pre></p>\n";

	$output = ob_get_contents();
	ob_end_clean();

	if($echo_to_screen)
	{
		echo $output;
	}

	return $output;
}

/**
 * Display $var nicely only if $config["debug"] is set
 *
 * @param mixed $var
 * @param string $title
 */
function debug_output($var, $title="")
{
	
	global $gCms;
	if($gCms->config["debug"] == true)
	{
		debug_display($var, $title, true);
	}

}

/**
 * Display $var nicely to the $gCms->errors array if $config['debug'] is set
 *
 * @param mixed $var
 * @param string $title
 */
function debug_buffer($var, $title="")
{
	global $gCms;
	$errors = &$gCms->errors;

	if($gCms->config["debug"] == true)
	{
		array_push($errors, debug_display($var, $title, false, true));
	}
}

/**
* Retrieve value from $_REQUEST. Returns $default_value if
*		value is not in $_REQUEST or is not the same basic type as
*		$default_value.
*		If $session_key is set, then will return session value in preference
*		to $default_value if $_REQUEST[$value] is not set.
* 
* @param string $value
* @param mixed $default_value (optional)
* @param string $session_key (optional)
* @return mixed
*/
function get_request_value($value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['request_values'][$session_key][$value]))
		{
			$default_value = $_SESSION['request_values'][$session_key][$value];
		}
	}
	if(isset($_REQUEST[$value]))
	{
		$result = get_value_with_default($_REQUEST[$value], $default_value);
	}
	else
	{
		$result = $default_value;
	}

	if($session_key != '')
	{
		$_SESSION['request_values'][$session_key][$value] = $result;
	}

	return $result;
}

/**
* Return $value if it's set and same basic type as $default_value,
*			otherwise return $default_value. Note. Also will trim($value)
*			if $value is not numeric.
* 
* @param string $value
* @param mixed $default_value
* @return mixed
*/
function get_value_with_default($value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['default_values'][$session_key]))
		{
			$default_value = $_SESSION['default_values'][$session_key];
		}
	}

	// set our return value to the default initially and overwrite with $value if we like it.
	$return_value = $default_value;

	if(isset($value))
	{
		if(is_array($value))
		{
			// $value is an array - validate each element.
			$return_value = array();
			foreach($value as $element)
			{
				$return_value[] = get_value_with_default($element, $default_value);
			}
		}
		else
		{
			if(is_numeric($default_value))
			{
				if(is_numeric($value))
				{
					$return_value = $value;
				}
			}
			else
			{
				$return_value = trim($value);
			}
		}
	}
	
	if($session_key != '')
	{
		$_SESSION['default_values'][$session_key] = $return_value;
	}
	
	return $return_value;
}

/**
 * Retrieve the $value from the $parameters array checking for
 * $parameters[$value] and $params[$id.$value]. Returns $default
 * if $value is not in $params array. 
 * Note: This function will also trim() string values.
 *
 * @param array $parameters
 * @param string $value
 * @param mixed $default_value
 * @param string $session_key
 * @return mixed
 */
function get_parameter_value($parameters, $value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['parameter_values'][$session_key]))
		{
			$default_value = $_SESSION['parameter_values'][$session_key];
		}
	}

	// set our return value to the default initially and overwrite with $value if we like it.
	$return_value = $default_value;
	if(isset($parameters[$value]))
	{
		if(is_bool($default_value))
		{
			// want a boolean return_value
			if(isset($parameters[$value]))
			{
				$return_value = (boolean)$parameters[$value];
			}
		}
		else
		{
			// is $default_value a number?
			$is_number = false;
			if(is_numeric($default_value))
			{
				$is_number = true;
			}
		
			if(is_array($parameters[$value]))
			{
				// $parameters[$value] is an array - validate each element.
				$return_value = array();
				foreach($parameters[$value] as $element)
				{
					$return_value[] = get_value_with_default($element, $default_value);
				}
			}
			else
			{
				if(is_numeric($default_value))
				{
					// default value is a number, we only like $parameters[$value] if it's a number too.
					if(is_numeric($parameters[$value]))
					{
						$return_value = $parameters[$value];
					}
				}
				elseif(is_string($default_value))
				{
					$return_value = trim($parameters[$value]);
				}
				else
				{
					$return_value = $parameters[$value];
				}
			}
		}
	}

	if($session_key != '')
	{
		$_SESSION['parameter_values'][$session_key] = $return_value;
	}
	
	return $return_value;
}

function create_encoding_dropdown($name = 'encoding', $selected = '')
{
	$result = '';

	$encodings = array(''=>'Default','UTF-8'=>'Unicode','ISO-8859-1'=>'Latin 1/West European','ISO-8859-2'=>'Latin 2/Central European','ISO-8859-3'=>'Latin 3/South European','ISO-8859-4'=>'Latin 4/North European','ISO-8859-5'=>'Cyrilic','ISO-8859-6'=>'Arabic','ISO-8859-7'=>'Greek','ISO-8859-8'=>'Hebrew','ISO-8859-9'=>'Latin 5/Turkish','ISO-8859-11'=>'TIS-620/Thai','ISO-8859-14'=>'Latin 8','ISO-8859-15'=>'Latin 9','Big5'=>'Taiwanese','GB2312'=>'Chinese','EUC-JP'=>'Japanese','EUC-KR'=>'Korean','KOI8-R'=>'Russian','Windows-1250'=>'Central Europe','Windows-1251'=>'Cyrilic','Windows-1252'=>'Latin 1','Windows-1253'=>'Greek','Windows-1254'=>'Turkish','Windows-1255'=>'Hebrew','Windows-1256'=>'Arabic','Windows-1257'=>'Baltic','Windows-1258'=>'Vietnam');

	$result .= '<select name="'.$name.'">';
	foreach ($encodings as $key=>$value)
	{
		$result .= '<option value="'.$key.'"';
		if ($selected == $key)
		{
			$result .= ' selected="selected"';
		}
		$result .= '>'.$key.($key!=''?' - ':'').$value.'</option>';
	}
	$result .= '</select>';

	return $result;
}

function cms_mapi_create_permission($cms, $permission_name, $permission_text)
{
	global $gCms;
	$db = &$gCms->GetDb();

	$query = "SELECT permission_id FROM ".cms_db_prefix()."permissions WHERE permission_name =" . $db->qstr($permission_name); 
	$result = $db->Execute($query);

	if ($result && $result->RecordCount() < 1) {

		$new_id = $db->GenID(cms_db_prefix()."permissions_seq");
		$query = "INSERT INTO ".cms_db_prefix()."permissions (permission_id, permission_name, permission_text, create_date, modified_date) VALUES ($new_id, ".$db->qstr($permission_name).",".$db->qstr($permission_text).",'".$db->DBTimeStamp(time())."','".$db->DBTimeStamp(time())."')";
		$db->Execute($query);
	}
}


function filespec_is_excluded( $file, $excludes )
{
  // strip the path from the file
  foreach( $excludes as $excl )
    {
      if( @preg_match( "/".$excl."/i", basename($file) ) )
	{
	  return true;
	}
    }
  return false;
}


/**
 * Return an array containing a list of files in a directory
 * performs a recursive serach
 * @param  path      start path
 * @param  maxdepth  how deep to browse (-1=unlimited)
 * @param  mode      "FULL"|"DIRS"|"FILES"
 * @param  d         for internal use only
**/
function get_recursive_file_list ( $path , $excludes, $maxdepth = -1 , $mode = "FULL" , $d = 0 )
{
   if ( substr ( $path , strlen ( $path ) - 1 ) != '/' ) { $path .= '/' ; }     
   $dirlist = array () ;
   if ( $mode != "FILES" ) { $dirlist[] = $path ; }
   if ( $handle = opendir ( $path ) )
   {
       while ( false !== ( $file = readdir ( $handle ) ) )
       {
	   $excluded = filespec_is_excluded( $file, $excludes );
           if ( $file != '.' && $file != '..' && $excluded == false )
           {
               $file = $path . $file ;
               if ( ! @is_dir ( $file ) ) { if ( $mode != "DIRS" ) { $dirlist[] = $file ; } }
               elseif ( $d >=0 && ($d < $maxdepth || $maxdepth < 0) )
               {
		   $result = get_recursive_file_list ( $file . '/' , $excludes, $maxdepth , $mode , $d + 1 ) ;
                   $dirlist = array_merge ( $dirlist , $result ) ;
               }
       }
       }
       closedir ( $handle ) ;
   }
   if ( $d == 0 ) { natcasesort ( $dirlist ) ; }
   return ( $dirlist ) ;
}

function SerializeObject(&$object)
{
	return base64_encode(serialize($object));
}

function UnserializeObject(&$serialized)
{
	return  unserialize(base64_decode($serialized));
}

function startswith( $str, $sub )
{
	return ( substr( $str, 0, strlen( $sub ) ) == $sub );
}

function endswith( $str, $sub )
{
	return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
}

function showmem($string = '')
{
	var_dump($string . ' -- ' . memory_get_usage());
}

if(!function_exists("file_get_contents"))
{
   function file_get_contents($filename)
   {
	   if(($contents = file($filename)))
	   {
		   $contents = implode('', $contents);
		   return $contents;
	   }
	   else
		   return false;
   }
}

# vim:ts=4 sw=4 noet
?>
