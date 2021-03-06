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

$group_id="";
if (isset($_POST["group_id"])) $group_id = $_POST["group_id"];
else if (isset($_GET["group_id"])) $group_id = $_GET["group_id"];

$group_name = "";

if (isset($_POST["cancel"])) {
	redirect("listgroups.php");
	return;
}

$userid = get_userid();
$access = check_permission($userid, $gettext->gettext("Modify Permissions"));

if ($access) {

	$query = "SELECT group_name FROM ".cms_db_prefix()."groups WHERE group_id = ".$group_id;
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {
		$row = $result->FetchRow();
		$group_name = $row['group_name'];
	}

	if (isset($_POST["changeperm"])) {

		$query = "DELETE FROM ".cms_db_prefix()."group_perms WHERE group_id = " . $group_id;
		$result = $db->Execute($query);

		foreach ($_POST as $key=>$value) {
			if (strpos($key,"perm-") == 0 && strpos($key,"perm-") !== false) {
				$new_id = $db->GenID(cms_db_prefix()."group_perms_seq");
				$query = "INSERT INTO ".cms_db_prefix()."group_perms (group_perm_id, group_id, permission_id, create_date, modified_date) VALUES ($new_id, ".$db->qstr($group_id).", ".$db->qstr(substr($key,5)).", ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).")";
				$db->Execute($query);
			}
		}

		audit((isset($_SESSION["cms_admin_user_id"])?$_SESSION["cms_admin_user_id"]:""), (isset($_SESSION["cms_admin_username"])?$_SESSION["cms_admin_username"]:""), $group_id, $group_name, "Changed Group Permissions");
		redirect("listgroups.php");
		return;

	}
}

include_once("header.php");

if (!$access) {
	print "<h3>".$gettext->gettext("No Access to Modify Group Permissions")."</h3>";
}
else {

	$gettext->setVar('group_name', $group_name);

?>

<form method="post" action="changegroupperm.php">

<div class="adminform">

<h3><?=$gettext->gettext('Permissions for group: ${group_name}')?></h3>

<?php

	$gettext->reset();

	$query = "SELECT permission_id, permission_name, permission_text FROM ".cms_db_prefix()."permissions ORDER BY permission_name";
	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {

		while($row = $result->FetchRow()) {

			$perms[$row['permission_name']] = false;
			$ids[$row['permission_name']] = $row['permission_id'];
		}

	}

	$query = "SELECT p.permission_name FROM ".cms_db_prefix()."group_perms g INNER JOIN ".cms_db_prefix()."permissions p ON p.permission_id = g.permission_id WHERE g.group_id = " . $group_id;

	$result = $db->Execute($query);

	if ($result && $result->RowCount() > 0) {

		while($row = $result->FetchRow()) {

			$tmp = $row['permission_name'];
			$perms[$tmp] = true;
		}

	}

	foreach ($perms as $key => $value) {

		echo "<p>";
		echo "<input type=\"checkbox\"";
		echo ($value == true?" checked":"");
		echo " name=\"perm-".$ids[$key]."\" value=\"1\">$key</p>\n";

	}

?>

<p><input type="hidden" name="group_id" value="<?=$group_id?>" /><input type="submit" name="changeperm" value="<?=$gettext->gettext("Submit")?>" /><input type="submit" name="cancel" value="<?=$gettext->gettext("Cancel")?>" /></p>

</div>

</form>

<?php

}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
