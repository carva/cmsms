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

require_once(dirname(__FILE__)."/classes/class.user.inc.php");

/**
 * Page related functions.  Generally these are functions not necessarily
 * related to content, but more to the underlying mechanisms of the system.
 *
 * @package CMS
 */
/**
 * Checks to see if the user is logged in.   If not, redirects the browser
 * to the admin login.
 *
 * @since 0.1
 */
function check_login() {

	#For testing xhtml compliance
	#generate_user_object(1);
	#return;

	global $gCms;
	$config = $gCms->config;

	if (!isset($_COOKIE["cms_admin_user_id"]))
	{
		redirect($config["root_url"]."/admin/login.php");
	}
	else if (!isset($_SESSION["cms_admin_user_id"]))
	{
		if (!generate_user_object($_COOKIE["cms_admin_user_id"]))
		{
			redirect($config["root_url"]."/admin/login.php");
		}
	}
}

/**
 * Gets the userid of the currently logged in user.
 *
 * @returns If they're logged in, the user id.  If not logged in, false.
 * @since 0.1
 */
function get_userid() {
	if (isset($_COOKIE["cms_admin_user_id"])) {
		return $_COOKIE["cms_admin_user_id"];
	}
	else
	{
		return false;
	}
}

/**
 * Regenerates the user session information from a userid.  This is basically used
 * so that if the session expires, but the cookie still remains (site is left along
 * for 20+ minutes with no interaction), the user won't have to relogin to regenerate
 * the details.
 *
 * @returns mixed If successful, true.  If it fails, false.
 * @since 0.5
 */
function generate_user_object($userid)
{
	$check = false;

	global $gCms;
	$db = $gCms->db;

	$oneuser = UserOperations::LoadUserByID($userid);

	if ($oneuser)
	{
		#$row = $result->FetchRow();

		$_SESSION["cms_admin_user_id"] = $userid;
		$_SESSION["cms_admin_username"] = $oneuser->username;
		//$_SESSION["cms_passhash"] = $row["password"]; //So we have something to check

		$check = true;
	}

	return $check;
}

/**
 * Checks to see that the given userid has access to
 * the given permission.
 *
 * @returns mixed If they have perimission, true.  If they do not, false.
 * @since 0.1
 */
function check_permission($userid, $permname) {

	$check = false;

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT * FROM ".cms_db_prefix()."user_groups ug INNER JOIN ".cms_db_prefix()."group_perms gp ON gp.group_id = ug.group_id INNER JOIN ".cms_db_prefix()."permissions p ON p.permission_id = gp.permission_id WHERE ug.user_id = ".$userid." AND permission_name = ".$db->qstr($permname);
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {
		$check = true;
	}

	return $check;
}

/**
 * Checks that the given userid is the owner of the given pageid.
 *
 * @returns mixed If they have ownership, true.  If they do not, false.
 * @since 0.1
 */
function check_ownership($userid, $pagename, $pageid = "") {

	$check = false;

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT * FROM ".cms_db_prefix()."pages WHERE owner = ".$userid." AND page_id = ".$pageid;
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {
		$check = true;
	}

	return $check;
}

/**
 * Checks that the given userid has access to modify the given
 * pageid.  This would mean that they were set as additional
 * authors/editors by the owner.
 *
 * @returns mixed If they have authorship, true.  If they do not, false.
 * @since 0.2
 */
function check_authorship($userid, $pageid) {

	$check = false;

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT * FROM ".cms_db_prefix()."additional_users WHERE page_id = $pageid AND user_id = $userid";
	$result = $db->Execute($query);
	if ($result && $result->RowCount() > 0) {
		$check = true;
	}

	return $check;
}

/**
 * Put an event into the audit (admin) log.  This should be
 * done on most admin events for consistency.
 *
 * @since 0.3
 */
function audit($itemid, $itemname, $action) {

	global $gCms;
	$db = $gCms->db;

	$userid = 0;
	$username = '';

	if ($_SESSION["cms_admin_user_id"])
	{
		$userid = $_SESSION["cms_admin_user_id"];
	}

	if ($_SESSION["cms_admin_username"])
	{
		$username = $_SESSION["cms_admin_username"];
	}

	if (!isset($userid) || $userid == "") {
		$userid = 0;
	}

	$query = "INSERT INTO ".cms_db_prefix()."adminlog (timestamp, user_id, username, item_id, item_name, action) VALUES (?,?,?,?,?,?)";
	$db->Execute($query,array(time(),$userid,$username,$itemid,$itemname,$action));
}

/**
 * Loads a cache of site preferences so we only have to do it once.
 *
 * @since 0.6
 */
function load_site_preferences()
{
	$value = "";

	global $gCms;
	$db = $gCms->db;
	$siteprefs = &$gCms->siteprefs;

	if ($db)
	{
		$query = "SELECT sitepref_name, sitepref_value from ".cms_db_prefix()."siteprefs";
		$result = $db->Execute($query);
		
		if ($result && $result->RowCount() > 0) {
			while ($row = $result->FetchRow())
			{
				$siteprefs[$row['sitepref_name']] = $row['sitepref_value'];
			}
		}
	}

	return $value;
}

/**
 * Gets the given site prefernce
 *
 * @since 0.6
 */
function get_site_preference($prefname) {

	$value = "";

	global $gCms;
	$siteprefs = $gCms->siteprefs;

	if (isset($siteprefs[$prefname]))
	{
		$value = $siteprefs[$prefname];
	}

	return $value;
}

/**
 * Sets the given site perference with the given value.
 *
 * @since 0.6
 */
function set_site_preference($prefname, $value) {

	$doinsert = true;

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT sitepref_value from ".cms_db_prefix()."siteprefs WHERE sitepref_name = ".$db->qstr($prefname);
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {
		$doinsert = false;
	}

	if ($doinsert) {
		$query = "INSERT INTO ".cms_db_prefix()."siteprefs (sitepref_name, sitepref_value) VALUES (".$db->qstr($prefname).", ".$db->qstr($value).")";
		$db->Execute($query);
	} else {
		$query = "UPDATE ".cms_db_prefix()."siteprefs SET sitepref_value = ".$db->qstr($value)." WHERE sitepref_name = ".$db->qstr($prefname);
		$db->Execute($query);
	}
}

/**
 * Gets the given preference for the given userid.
 *
 * @since 0.3
 */
function get_preference($userid, $prefname) {

	$value = "";

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT value from ".cms_db_prefix()."userprefs WHERE user_id = $userid AND preference = ".$db->qstr($prefname);
	$result = $db->query($query);
	
	if ($result && $result->RowCount() > 0) {
		$row = $result->FetchRow();
		$value = $row["value"];
	}

	return $value;
}

/**
 * Sets the given perference for the given userid with the given value.
 *
 * @since 0.3
 */
function set_preference($userid, $prefname, $value) {

	$doinsert = true;

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT value from ".cms_db_prefix()."userprefs WHERE user_id = $userid AND preference = ".$db->qstr($prefname);
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {
		$doinsert = false;
	}

	if ($doinsert) {
		$query = "INSERT INTO ".cms_db_prefix()."userprefs (user_id, preference, value) VALUES ($userid, ".$db->qstr($prefname).", ".$db->qstr($value).")";
		$db->Execute($query);
	} else {
		$query = "UPDATE ".cms_db_prefix()."userprefs SET value = ".$db->qstr($value)." WHERE user_id = $userid AND preference = ".$db->qstr($prefname);
		$db->Execute($query);
	}
}

/**
 * Returns the stylesheet for the given templateid.
 *
 * @since 0.1
 */
function get_stylesheet($templateid) {

	$css = "";

	global $gCms;
	$db = $gCms->db;

	$query = "SELECT stylesheet FROM ".cms_db_prefix()."templates WHERE template_id = ".$templateid;
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {
		$line = $result->FetchRow();
		$css = $line['stylesheet'];
	}

	# add linked CSS if any
	$cssquery = "SELECT css_text FROM ".cms_db_prefix()."css, ".cms_db_prefix()."css_assoc
		WHERE	css_id		= assoc_css_id
		AND		assoc_type	= 'template'
		AND		assoc_to_id = '$templateid'";
	$cssresult = $db->Execute($cssquery);
	if ($cssresult && $cssresult->RowCount() > 0)
	{
		while ($cssline = $cssresult->FetchRow())
		{
			$css .= "\n".$cssline[css_text]."\n";
		}
	}

	$css = preg_replace("/[\r\n]/", "", $css);

	return $css;
}

/**
 * Strips slashes from an array of values.
 *
 * @since 0.1
 */
function & strip_slashes(&$str) {

	if(is_array($str)) {
		while(list($key, $val) = each($str)) {
			$str[$key] = strip_slashes($val);
		}
	}
	else {
		$str = stripslashes($str);
	}

	return $str;
}

/*
 * creates a textarea that does syntax highlighting on the source code.
 * This function could be made better if javascript was used to create
 * the syntax highlighting instead of php's highlight_string()
 */
function textarea_highlight($content, $textarea_name, $class_name="syntaxHighlight"){
	/*
	ini_set("highlight.bg","#FFFFFF"); 
	ini_set("highlight.comment", "#FF8000"); 
	ini_set("highlight.default", "#0000BB");
	ini_set("highlight.html", "#000000");
	ini_set("highlight.keyword", "#007700");
	ini_set("highlight.string", "#DD0000");

	$text_highlight = highlight_string("<?$content?>", true);
	$text_highlight = str_replace("&lt;?", "", $text_highlight);
	$text_highlight = str_replace("?&gt;","", $text_highlight);
	$text_highlight = str_replace('\'', '\\\'', $text_highlight);
	$text_highlight = ereg_replace("\r", '', $text_highlight);
	$text_highlight = ereg_replace("\n", '', $text_highlight);
	$content = ereg_replace("\r", ' ', $content);

	echo '<script type="text/javascript" language="Javascript1.2">';
	echo 'document.write(\'<div id="syntax_highlight" style="border: 1px solid #A5ACB2; overflow: auto;" contenteditable="true" contentEditable="true" onSelect="saveCaret(this)" onClick="syntax_highlight_remove(\\\'onClick\\\', this, \\\''.$textarea_name.'\\\')" onKeyDown="syntax_highlight_remove(\\\'onKeyDown\\\', this, \\\''.$textarea_name.'\\\')" class="'.$class_name.'">'.$text_highlight.'</div>\');';
	echo '</script>';
	echo '<textarea name="'.$textarea_name.'" id="plain" rows="24" cols="80" style="border: 1px solid #A5ACB2" class="'.$class_name.'">'.$content.'</textarea>';
	*/
	echo '<textarea name="'.$textarea_name.'" rows="24" cols="80">'.$content.'</textarea>';
}

# vim:ts=4 sw=4 noet
?>
