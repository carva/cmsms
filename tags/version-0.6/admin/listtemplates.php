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

$CMS_ADMIN_PAGE=1;

require_once("../include.php");

check_login();

include_once("header.php");

if (isset($_GET["message"])) {
	echo "<p class=\"error\">".$_GET["message"]."</p>";
}

?>
<h3><?php echo lang('currenttemplates')?></h3>
<?php

	$userid		= get_userid();
	$add		= check_permission($userid, 'Add Template');
	$edit		= check_permission($userid, 'Modify Template');
	$all		= check_permission($userid, 'Modify Any Content');
	$remove		= check_permission($userid, 'Remove Template');

	if ($all && isset($_GET["action"]) && $_GET["action"] == "setallcontent") {
		if (isset($_GET["template_id"])) {
			$query = "UPDATE ".cms_db_prefix()."pages SET template_id = ".$_GET["template_id"];
			$result = $db->Execute($query);
			if ($result) {
				$query = "UPDATE ".cms_db_prefix()."pages SET modified_date = ".$db->DBTimeStamp(time());
				$db->Execute($query);
				echo "<p>All Pages Modified!</p>";
			} else {
				echo "<p class=\"error\">Error updating pages</p>";
			}
		}
	}

	$query = "SELECT template_id, template_name, active FROM ".cms_db_prefix()."templates ORDER BY template_id";
	$result = $db->Execute($query);

	if ($result) {

		echo "<table cellspacing=\"0\" class=\"admintable\">"."\n";
		echo "<tr>\n";
		echo "<td>".lang('template')."</td>\n";
		echo "<td width=\"7%\" align=\"center\">".lang('active')."</td>\n";
		if ($edit)
			echo "<td>&nbsp;</td>\n";
		if (get_site_preference('useadvancedcss') == "1")
			echo "<td width=\"16\">&nbsp;</td>\n";
		if ($add)
			echo "<td width=\"16\">&nbsp;</td>\n";
		if ($remove)
			echo "<td width=\"16\">&nbsp;</td>\n";
		if ($all)
			echo "<td width=\"16\">&nbsp;</td>\n";

		echo "</tr>\n";

		$currow = "row1";

		while($row = $result->FetchRow()) {

			echo "<tr class=\"$currow\">\n";
			echo "<td><a href=\"edittemplate.php?template_id=".$row["template_id"]."\">".$row["template_name"]."</a></td>\n";
			echo "<td align=\"center\">".($row["active"] == 1?lang('true'):lang('false'))."</td>\n";

			# set template to all content
			if ($all)
				echo "<td align=\"center\"><a href=\"listtemplates.php?action=setallcontent&amp;template_id=".$row["template_id"]."\" onclick=\"return confirm('".lang('setallcontentconfirm')."');\">".lang('setallcontent')."</a></td>\n";

			# view css association
			if (get_site_preference('useadvancedcss') == "1") {
				echo "<td width=\"16\"><a href=\"listcssassoc.php?type=template&id=".$row["template_id"]."\"><img src=\"../images/cms/css.png\" width=\"16\" height=\"16\" border=\"0\" alt=\"".lang("CSS")."\" title=\"".lang("CSS")."\"></a></td>\n";
			}

			# add new template
			if ($add)
				echo "<td width=\"16\"><a href=\"copytemplate.php?template_id=".$row["template_id"]."\"><img src=\"../images/cms/copy.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"".lang('copy')."\" title=\"".lang('copy')."\"></a></td>\n";

			# edit template
			if ($edit)
				echo "<td width=\"16\"><a href=\"edittemplate.php?template_id=".$row["template_id"]."\"><img src=\"../images/cms/edit.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"".lang('edit')."\" title=\"".lang('edit')."\"></a></td>\n";

			# remove template
			if ($remove)
				echo "<td width=\"16\"><a href=\"deletetemplate.php?template_id=".$row["template_id"]."\" onclick=\"return confirm('".lang('deleteconfirm')."');\"><img src=\"../images/cms/delete.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"".lang('delete')."\" title=\"".lang('delete')."\"></a></td>\n";
			echo "</tr>\n";

			($currow=="row1"?$currow="row2":$currow="row1");

		}

		echo "</table>\n";

	}

if ($add) {
?>

<div class="button"><a href="addtemplate.php"><?php echo lang('addtemplate')?></a></div><br>

<div class="collapseTitle"><a href="#help" onClick="expandcontent('helparea')" style="cursor:hand; cursor:pointer"><?php echo lang('help') ?>?</a></div>
<div id="helparea" class="expand">
<?php echo lang('helplisttemplate')?>
<a name="help">&nbsp;</a>
</div>

<?php
}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
