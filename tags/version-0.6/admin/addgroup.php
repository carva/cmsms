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

$error = "";

$group= "";
if (isset($_POST["group"])) $group = $_POST["group"];

$active = 1;
if (!isset($_POST["active"]) && isset($_POST["addgroup"])) $active = 0;

if (isset($_POST["cancel"])) {
	redirect("listgroups.php");
	return;
}

$userid = get_userid();
$access = check_permission($userid, 'Add Group');

if ($access) {
	if (isset($_POST["addgroup"])) {

		$validinfo = true;
		if ($group == "") {
			$error .= "<li>".lang('nofieldgiven', array('addgroup'))."</li>";
			$validinfo = false;
		}

		if ($validinfo) {
			$new_group_id = $db->GenID(cms_db_prefix()."groups_seq");
			$query = "INSERT INTO ".cms_db_prefix()."groups (group_id, group_name, active, create_date, modified_date) VALUES ($new_group_id, ".$db->qstr($group).", $active, ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).")";
			$result = $db->Execute($query);
			if ($result) {
				audit($_SESSION["cms_admin_user_id"], $_SESSION["cms_admin_username"], $new_group_id, $group, 'Added Group');
				redirect("listgroups.php");
				return;
			}
			else {
				$error .= "<li>".lang('errorinsertinggroup')."</li>";
			}
		}
	}
}

include_once("header.php");

if (!$access) {
	print "<h3>".lang('noaccessto', array(lang('addgroup')))."</h3>";
}
else {
	if ($error != "") {
		echo "<ul class=\"error\">".$error."</ul>";
	}
?>

<form method="post" action="addgroup.php">

<div class="adminformSmall">

<h3><?php echo lang('addgroup')?></h3>

<table border="0">

	<tr>
		<td>*<?php echo lang('name')?>:</td>
		<td><input type="text" name="group" maxlength="255" value="<?php echo $group?>" class="standard"></td>
	</tr>
	<tr>
		<td><?php echo lang('active')?>:</td>
		<td><input type="checkbox" name="active" <?php echo ($active == 1?"checked":"")?>></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="hidden" name="addgroup" value="true">
		<input type="submit" value="<?php echo lang('submit')?>" class="button" onmouseover="this.className='buttonHover'" onmouseout="this.className='button'">
		<input type="submit" name="cancel" value="<?php echo lang('cancel')?>" class="button" onmouseover="this.className='buttonHover'" onmouseout="this.className='button'"></td>
	</tr>

</table>

</div>

</form>

<?php
}
include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
