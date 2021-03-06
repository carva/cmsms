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

$CMS_ADMIN_PAGE=1;
$CMS_TOP_MENU='usersgroups';
$CMS_ADMIN_TITLE='grouppermissions';

require_once("../include.php");

check_login();

$group_id="";
if (isset($_POST["group_id"])) $group_id = $_POST["group_id"];
else if (isset($_GET["group_id"])) $group_id = $_GET["group_id"];

$group_name = "";

if (isset($_POST["cancel"]))
{
	redirect("topusers.php");
	return;
}

$userid = get_userid();
$access = check_permission($userid, "Modify Permissions");

$message = '';

if ($access)
{
	if ($group_id != '' && $group_id != '-1')
	{
		$query = "SELECT group_name FROM ".cms_db_prefix()."groups WHERE group_id = ".$group_id;
		$result = $db->Execute($query);

		if ($result && $result->RowCount() > 0)
		{
			$row = $result->FetchRow();
			$group_name = $row['group_name'];
		}

		if (isset($_POST["changeperm"]))
		{
			$query = "DELETE FROM ".cms_db_prefix()."group_perms WHERE group_id = " . $group_id;
			$result = $db->Execute($query);

			foreach ($_POST as $key=>$value)
			{
				if (strpos($key,"perm-") == 0 && strpos($key,"perm-") !== false)
				{
					$new_id = $db->GenID(cms_db_prefix()."group_perms_seq");
					$query = "INSERT INTO ".cms_db_prefix()."group_perms (group_perm_id, group_id, permission_id, create_date, modified_date) VALUES ($new_id, ".$db->qstr($group_id).", ".$db->qstr(substr($key,5)).", '".$db->DBTimeStamp(time())."', '".$db->DBTimeStamp(time())."')";
					$db->Execute($query);
				}
			}

			audit($group_id, $group_name, "Changed Group Permissions");
			$message = lang('permissionschanged');
			#redirect("listgroups.php");
			#return;

		}
	}
}

include_once("header.php");

if (!$access) {
	print "<h3>".lang('noaccessto',array(lang('modifygrouppermissions')))."</h3>";
}
else {

if ($message != '')
{
	echo '<p class="Message">'.$message.'</p>';
	$message = '';
}

?>
<h3><?php echo lang('grouppermissions')?></h3>

<p><a href="topusers.php"><?php echo lang('back')?></a></p>

<div class="AdminForm">

<?php

	$groups = GroupOperations::LoadGroups();
	if (count($groups) > 0)
	{
		echo '<form method="post" action="changegroupperm.php">';
		echo 'Group Name: <select name="group_id">';
		echo '<option value="-1">Select a Group</option>';
		foreach ($groups as $onegroup)
		{
			echo '<option value="'.$onegroup->id.'"';
			if ($onegroup->id == $group_id)
			{
				echo ' selected="selected"';
			}
			echo '>'.$onegroup->name.'</option>';
		}
		echo '</select> <input type="submit" value="'.lang('selectgroup').'" /></form>';
		echo '<form method="post" action="changegroupperm.php">';
	}

	if ($group_id != '' && $group_id != '-1')
	{
		$query = "SELECT permission_id, permission_name, permission_text FROM ".cms_db_prefix()."permissions ORDER BY permission_name";
		$result = $db->Execute($query);

		if ($result && $result->RowCount() > 0)
		{
			while($row = $result->FetchRow())
			{
				$perms[$row['permission_name']] = false;
				$perm_text[$row['permission_name']] = $row['permission_text'];
				$ids[$row['permission_name']] = $row['permission_id'];
			}

		}

		$query = "SELECT p.permission_name FROM ".cms_db_prefix()."group_perms g INNER JOIN ".cms_db_prefix()."permissions p ON p.permission_id = g.permission_id WHERE g.group_id = " . $group_id;

		$result = $db->Execute($query);

		if ($result && $result->RowCount() > 0)
		{
			while($row = $result->FetchRow())
			{
				$tmp = $row['permission_name'];
				$perms[$tmp] = true;
			}
		}
		
		echo '<table border="0" cellpadding="0" cellspacing="0">';
		foreach ($perms as $key => $value)
		{
			echo '<tr>';
			echo '<th>'.$perm_text[$key].':</th>';
			echo '<td><input type="checkbox" name="perm-'.$ids[$key].'" value="1" '.($value == true?" checked=\"checked\"":"").'/></td>';
			echo '</tr>';
		}

?>

<tr><td><br /><input type="hidden" name="group_id" value="<?php echo $group_id?>" />
<input type="submit" name="changeperm" value="<?php echo lang('updateperm')?>" class="button" onmouseover="this.className='buttonHover'" onmouseout="this.className='button'" />
<input type="submit" name="cancel" value="<?php echo lang('cancel')?>" class="button" onmouseover="this.className='buttonHover'" onmouseout="this.className='button'" /></td></tr>
</table>

<?php
	}
?>

</form>

</div>

<?php

}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
