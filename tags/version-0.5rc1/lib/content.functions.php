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

/**
 * Handles content related functions
 *
 * @package CMS
 */
require_once(dirname(dirname(__FILE__)).'/smarty/Smarty.class.php');
$sorted_sections = array();
$sorted_content = array();

/**
 * Extends the Smarty class for content.
 *
 * Extends the Smarty class for checking timestamps and rendering
 * content to the browser.
 *
 * @since 0.1
 */
class Smarty_CMS extends Smarty {

	function Smarty_CMS(&$config)
	{
		$this->Smarty();

		$this->template_dir = $config["root_path"].'/smarty/cms/templates/';
		$this->compile_dir = $config["root_path"].'/smarty/cms/templates_c/';
		$this->config_dir = $config["root_path"].'/smarty/cms/configs/';
		$this->cache_dir = $config["root_path"].'/smarty/cms/cache/';
		$this->plugins_dir = $config["root_path"].'/plugins/';

		$this->compile_check = true;
		if ($config["debug"] == true)
		{
			$this->caching = false;
		}
		else
		{
			$this->caching = true;
		}
		$this->assign('app_name','CMS');
		$this->debugging = false;
		if ($config["debug"] == true)
		{
			$this->force_compile = true;
		}
		else
		{
			$this->force_compile = false;
		}
		$this->cache_plugins = false;

		load_plugins(&$this);

		$this->register_resource("db", array(&$this, "db_get_template",
						       "db_get_timestamp",
						       "db_get_secure",
						       "db_get_trusted"));
	}

	function db_get_template ($tpl_name, &$tpl_source, &$smarty_obj)
	{

		global $gCms;

		$cmsmodules = $gCms->modules;
		$db = $gCms->db;
		$config = $gCms->config;

		$query = "SELECT p.page_id, p.page_content, p.page_title, p.page_type, t.template_id, t.stylesheet, t.template_content FROM ".cms_db_prefix()."pages p INNER JOIN ".cms_db_prefix()."templates t ON p.template_id = t.template_id WHERE (p.page_id = ".$db->qstr($tpl_name)." OR p.page_alias=".$db->qstr($tpl_name).") AND p.active = 1";
		$result = $db->Execute($query);

		if ($result && $result->RowCount())
		{
			$line = $result->FetchRow();

			#This way the id is right, even if an alias is given
			$gCms->variables['page'] = $line['page_id'];

			$stylesheet = "";
			if (isset($line[stylesheet]))
			{
				$stylesheet .= "<style type=\"text/css\">\n";
				$stylesheet .= "{literal}".$line["stylesheet"]."{/literal}";
				$stylesheet .= "</style>\n";
			}
			$tpl_source = $line[template_content];
			$content = $line[page_content];
			$title = $line[page_title];
			$tpl_source = ereg_replace("\{stylesheet\}", $stylesheet, $tpl_source);
			$tpl_source = ereg_replace("\{title\}", $title, $tpl_source);

			#So no one can do anything nasty
			if (!(isset($config["use_smarty_php_tags"]) && $config["use_smarty_php_tags"] == true))
			{
				$tpl_source = ereg_replace("\{\/?php\}", "", $tpl_source);
			}
			
			if ($line["page_type"] == "content")
			{
				#If it's regular content, do this...
				$tpl_source = ereg_replace("\{content\}", $content, $tpl_source);
				if ($config["use_bb_code"] == true && isset($gCms->bbcodeparser))
				{
					$tpl_source = $gCms->bbcodeparser->qparse($tpl_source);
				}
			}
			else
			{
				#If it's a module, do this instead...
				if (isset($cmsmodules[$line["page_type"]]['plugin_module'])
					&& $cmsmodules[$line["page_type"]]['Installed'] == true
					&& $cmsmodules[$line["page_type"]]['Active'] == true)
				{
					@ob_start();
					call_user_func_array($cmsmodules[$line["page_type"]]['execute_function'], array($gCms,"cmsmodule_".++$gCms->variables["modulenum"]."_",$params));
					$modoutput = @ob_get_contents();
					@ob_end_clean();
					$tpl_source = ereg_replace("\{content\}", $modoutput, $tpl_source);
				}
			}

			return true;
		}
		else
		{
			return false;
		}
	}

	function db_get_timestamp($tpl_name, &$tpl_timestamp, &$smarty_obj)
	{

		global $gCms;
		$db = $gCms->db;
		$config = $gCms->config;

		$query = "SELECT p.page_id, t.modified_date as template_date, p.modified_date as page_date, p.page_type FROM ".cms_db_prefix()."pages p INNER JOIN ".cms_db_prefix()."templates t ON t.template_id = p.template_id WHERE (p.page_id = ".$db->qstr($tpl_name)." OR p.page_alias=".$db->qstr($tpl_name).") AND p.active = 1";
		$result = $db->Execute($query);

		if ($result && $result->RowCount()) {
			$line = $result->FetchRow();

			#This way the id is right, even if an alias is given
			$gCms->variables['page'] = $line['page_id'];

			$page_date = $db->UnixTimeStamp($line["page_date"]);
			$template_date = $db->UnixTimeStamp($line["template_date"]);

			$smarty_obj->assign('modified_date',($page_date<$template_date?$template_date:$page_date));

			#We only want to cache "static" content
			if ($line["page_type"] == "content") {

				$tpl_timestamp = ($page_date<$template_date?$template_date:$page_date);
				return true;

			} else {

				$tpl_timestamp = time();
				return true;

			}
		}
		else {

			$smarty_obj->assign('modified_date',time());
			$tpl_timestamp = time();
			return false;
		}
	}

	function db_get_secure($tpl_name, &$smarty_obj)
	{
		// assume all templates are secure
		return true;
	}

	function db_get_trusted($tpl_name, &$smarty_obj)
	{
		// not used for templates
	}
}

/**
 * Loads all plugins into the system
 *
 * @since 0.5
 */
function load_plugins($smarty)
{
	global $gCms;
	$plugins = &$gCms->cmsplugins;

	$dir = dirname(dirname(__FILE__))."/plugins";
	$ls = dir($dir);
	while (($file = $ls->read()) != "") {
		if (is_file("$dir/$file") && (strpos($file, ".") === false || strpos($file, ".") != 0)) {
			if (preg_match("/^(.*?)\.(.*?)\.php/", $file, $matches)) {
				#$filename = dirname(dirname(__FILE__)) . "/" . $this->_get_plugin_filepath($matches[1], $matches[2]);
				$filename = $smarty->_get_plugin_filepath($matches[1], $matches[2]);
				#echo $filename . "<br />";
				include_once $filename;
				$smarty->register_function($matches[2], "smarty_cms_function_" . $matches[2], $smarty->cache_plugins);
				array_push($plugins, $matches[2]);
			}
		}
	}
	sort($plugins);
}

/**
 * Returns the id of the current selected default page
 *
 * @since 0.1
 */
function db_get_default_page () {

	global $gCms;
	
	$db = $gCms->db;
	$config = $gCms->config;

	$result = "";

	$query = "SELECT page_id FROM ".cms_db_prefix()."pages WHERE default_page = 1";
	$dbresult = $db->Execute($query);

	if ($dbresult) {
		$line = $dbresult->FetchRow();
		$result = $line["page_id"];
	}

	#We have no default.  Just get something!!!
	if ($result == "") {
		$query = "SELECT page_id FROM ".cms_db_prefix()."pages";
		$dbresult = $db->SelectLimit($query, 1);

		if ($dbresult) {
			$line = $dbresult->FetchRow();
			$result = $line["page_id"];
		}
	}

	return $result;
}

class Section {
	var $section_id;
	var $section_name;
	var $display_name;
	var $parent_id;
	var $items;
	var $level;

	function get_child_sections($section_id, $sections, $level) {

		global $sorted_sections;
		reset($sections);
		$child_sections = array();
		foreach ($sections as $one) {
			if ($section_id == $one->parent_id) {
				$prefix = "";
				for ($i=0; $i<=$level; $i++) { $prefix .= " -- "; }

				$one->display_name = $prefix.$one->section_name;
				$one->level = $level;
				array_push($sorted_sections, $one);
				$children = $one->get_child_sections($one->section_id, $sections, $level +1);
			} ## if
		} ## foreach

	} ## function
} ## class

class MenuItem {
	var $name;
	var $url;
}

class Page {
	var $page_id;
	var $page_title;
	var $page_alias;
	var $display_title;
	var $page_url;
	var $menu_text;
	var $show_in_menu;
	var $page_type;
	var $item_order;
	var $active;
	var $section_id;
	var $parent_id;
	var $level;
	var $hier;
	var $num_same_level;
	var $childs;
		
} ## class

function db_get_menu_items($style) {

	global $sorted_content;

	global $gCms;
	$db = $gCms->db;
	$config = $gCms->config;

	$sorted_content = array();
	$content_array = array();
	
	if ($style == "content_hierarchy") {

		$query = "select p.page_id, p.page_alias, p.page_title, p.page_url, p.page_type, p.menu_text, p.item_order, p.active, p.default_page, p.parent_id, u.username, t.template_name from ".cms_db_prefix()."pages p LEFT OUTER JOIN ".cms_db_prefix()."users u on u.user_id=p.owner LEFT OUTER JOIN ".cms_db_prefix()."templates t on t.template_id=p.template_id order by p.parent_id, p.item_order";
		$result = $db->Execute($query);

		if ($result && $result->RowCount() > 0) {
			$content_array = array();
			while ($line = $result->FetchRow()) {
				$current_content = new Page;
				$current_content->page_id = $line["page_id"];
				$current_content->page_title = $line["page_title"];
				$current_content->page_alias = $line["page_alias"];
				$current_content->page_url = $line["page_url"];
				$current_content->menu_text = $line["menu_text"];
				$current_content->page_type = $line["page_type"];
				$current_content->item_order = $line["item_order"];
				$current_content->active = $line["active"];
				$current_content->default_page = $line["default_page"];
				$current_content->username = $line["username"];
				$current_content->template_name = $line["template_name"];
				$current_content->parent_id = $line["parent_id"];
				if (isset($line["url"])) {
					$current_content->url = $line["url"];
				}
				$current_content->hier = "1";
				$current_content->level = "1";
				
				# Fix URL where appropriate
				if ($current_content->page_type != "link") {
					if (isset($current_content->page_alias) && $current_content->page_alias != "")
					{
						$current_content->url = $config["root_url"]."/index.php?".$config["query_var"]."=".$current_content->page_alias;
					}
					else
					{
						$current_content->url = $config["root_url"]."/index.php?".$config["query_var"]."=".$current_content->page_id;
					}
					$current_content->page_url = "";	
				} else {
					$current_content->url = $current_content->page_url;
				}
				# Special display for separator
				if ($current_content->page_type == "separator") {
					$current_content->page_title = "--------";
				}

				# Now that all treatment have been done to $current_content, we push it in the array
				$content_array[$line["page_id"]] = $current_content;
				$parents[$line["page_id"]] = $line["parent_id"];
			} ## while
			
			construct_tree_from_list($content_array, $parents);
		
			# to change : this should be a parameter of the function
			$start_element = 0;

			$new_array = array();
			$first_level_childs = array_keys($parents,$start_element);
			foreach($first_level_childs as $element) array_push($new_array, $content_array[$element]);
			
			flatten_tree_to_list($new_array, &$sorted_content);

		} ## if

		return $sorted_content;
	} ## if

} ## function

/**
 * Construct a tree array from a flat array. Returns nothing.
 *
 * This function will take an array of elements, an array of equivalence between elements
 * and parents. It then constructs an array which contains :
 * - element1
 * - element1->child = array contening the childs of element1
 * - etc...
 *
 * It is recursive in the sense it recalls itself.
 * It does not matter what kind of elements it is.
 *
 * @param array		content_array		this is the array you want to construct the tree from.
 * @param array		parents				this is the array containing the associations : $parents[identifier] = parent_identifier of element
 * @param int		start_element		the element to start the tree from (used to create only subtrees)
 * @param int		number_of_levels	the number of levels of the tree (ie number of recursion), default is 10
 * @param int		hierarchy_level		the current level of recursion
 * @param string	total_hierarchy		a string of the form 1.2.3 indicating the path from the root to the current element
 *
 * @since 0.5
 */
function construct_tree_from_list(&$content_array, &$parents, $start_element = 0, $number_of_levels = 10, $hierarchy_level = 0, $total_hierarchy = "") {

	if ($number_of_levels >= 0)
	{
		# the current element
		$current = &$content_array[$start_element];

		# this array contains the child of our current element
		$childs = array_keys($parents, $start_element);
		$num_of_childs = count($childs);

		if ($num_of_childs > 0)
		{
			$current->childs = array();
			$count = 1;

			foreach($childs as $key)
			{
				$newchild = $content_array[$key];
				$newchild->num_same_level = $num_of_childs;
				$newchild->level = $hierarchy_level + 1;
				$newchild->hier = $total_hierarchy."$count.";
				
				array_push($current->childs,$newchild);
				construct_tree_from_list($content_array, $parents, $key, $number_of_levels - 1, $hierarchy_level + 1, $newchild->hier);

				$count++;
			} #foreach
		} #if numchilds
	} # if number_of_levels
} # function


/**
 * Constructs a flat array from a tree array. Returns nothing
 *
 * @since 0.5
 */
function flatten_tree_to_list($content_array, &$flatarray) {

	if (is_array($content_array) && count($content_array) > 0)
	{
		foreach($content_array as $element)
		{
			array_push($flatarray, $element);
			flatten_tree_to_list($element->childs, &$flatarray);
		}
	}
}

/**
 * Returns a list of all currently registered content types
 *
 * @since 0.3
 */
function get_page_types() {

	global $gCms;

	$db = $gCms->db;
	$modules = $gCms->modules;
	$config = $gCms->config;

	$result['content'] = 'Content';
	$result['link'] = 'Link';
	$result['separator'] = 'Separator';

	$installedmodules = array();

	$query = "SELECT * FROM ".cms_db_prefix()."modules";
	$dbresult = $db->Execute($query);

	if ($dbresult && $dbresult->RowCount() > 0) {

		while ($row = $dbresult->FetchRow()) {
			$installedmodules[$row['module_name']] = 1;
		}

		foreach ($modules as $key=>$value) {
			if (isset($modules[$key]['content_module']) && isset($installedmodules[$key])) {
				$result[$key] = $key;
			}
		}

	}

	return $result;

}

# vim:ts=4 sw=4 noet
?>
