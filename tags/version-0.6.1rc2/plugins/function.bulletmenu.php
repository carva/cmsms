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

function smarty_cms_function_bulletmenu($params, &$smarty) {

	global $db;

	# getting menu parameters
	$showadmin = isset($params["showadmin"]) ? $params["showadmin"] : 1 ;
	
	# getting content hierarchy parameters
	$newparams = array();
	foreach($params as $key => $val) $newparams[$key] = $val;
	$newparams["show"] = "menu";

	if (isset($newparams["start_element"]))
	{
		$tmp	= $newparams["start_element"];
		$tmptab	= explode(".",$tmp);
		$parent	= 0;

		foreach($tmptab as $key)
		{
			if ("" != $key)
			{
				$query	= "SELECT page_id FROM ".cms_db_prefix()."pages WHERE item_order = '$key' AND parent_id = '$parent'";
				$result = $db->Execute($query);
				if ($result && $result->RowCount() > 0)
				{
					$line	= $result->FetchRow();
					$parent	= $line["page_id"];
				}
			}
		}
		$newparams["start_element"] = $parent;
	}
	
	# getting content
	$content = db_get_menu_items($newparams);

	# defining variables
	$menu = "";
	$last_level = 0;
	$count = 0;
	$in_hr = 0;

	foreach ($content as $one) {

		if ($one->page_type == "sectionheader")
		{
			if ($in_hr == 1)
			{
				$menu .= "</ul>\n";
				$in_hr = 0;
			}
			$menu .= "<div class=\"sectionheader\">".$one->menu_text."</div>\n";
			if ($count > 0 && $in_hr == 0)
			{
				$menu .= "<ul>\n";
				$in_hr = 1;
			}
		}
		else
		{
			if ($one->level < $last_level) {
				for ($i = $one->level; $i < $last_level; $i++)	$menu .= "</ul>\n";
			}
			if ($one->level > $last_level) {
				for ($i = $one->level; $i > $last_level; $i--) $menu .= "<ul>\n";
			}
			if ($one->page_type == "separator")
			{
				$menu .= "<hr class=\"separator\"/>\n";
			}
			else
			{
				$menu .= "<li><a href=\"".$one->url."\">".$one->menu_text."</a></li>\n";
			}
			$in_hr = 1;
			$last_level = $one->level;
		}
		$count++;
	}

	for ($i = 0; $i < $last_level; $i++) $menu .= "</ul>";

	if ($showadmin == 1) {
		$menu .= "<ul><li><a href='admin'>Admin</a></li></ul>\n";
	}

	return $menu;

}

function smarty_cms_help_function_bulletmenu() {
	?>
	<h3>What does this do?</h3>
	<p>Prints a bullet menu.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{bulletmenu}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
		<li><em>(optional)</em> <tt>showadmin</tt> - 1/0, whether you want to show or not the admin link.</li>
		<li><em>(optional)</em> <tt>start_element</tt> - the hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu.</li>
		<li><em>(optional)</em> <tt>number_of_levels</tt> - an integer, the number of levels you want to show in your menu.</li>
	</ul>
	</p>

	<?php
}

function smarty_cms_about_function_bulletmenu() {
	?>
	<p>Author: Julien Lancien&lt;calexico@ifrance.com&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}

# vim:ts=4 sw=4 noet
?>
