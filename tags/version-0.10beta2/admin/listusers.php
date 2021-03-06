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
$CMS_ADMIN_TITLE='currentusers';

require_once("../include.php");
require_once("../lib/classes/class.user.inc.php");

check_login();

include_once("header.php");

if (isset($_GET["message"])) {
    echo "<p class=\"error\">".$_GET["message"]."</p>";
}

?>
<h3><?php echo lang('currentusers')?></h3>

<p><a href="topusers.php"><?php echo lang('back')?></a></p>

<?php

	$userid = get_userid();
	$edit = check_permission($userid, 'Modify Users');
	$remove = check_permission($userid, 'Remove Users');

	$query = "SELECT user_id, username, active FROM ".cms_db_prefix()."users ORDER BY user_id";
	$result = $db->Execute($query);

	$userlist = UserOperations::LoadUsers();

	$page = 1;
	if (isset($_GET['page']))$page = $_GET['page'];
	$limit = 20;
	if (count($userlist) > $limit)
	{
		echo "<div align=\"right\" class=\"clearbox\">".pagination($page, count($userlist), $limit)."</div>";
	}

	if ($userlist && count($userlist) > 0){
		echo '<table cellspacing="0" class="AdminTable" style="width: 500px;">'."\n";
		echo '<thead>';
		echo "<tr>\n";
		echo "<th width=\"70%\">".lang('username')."</th>\n";
		echo "<th align=\"center\">".lang('active')."</th>\n";
		echo "<th width=\"16\">&nbsp;</th>\n";
		if ($remove)
			echo "<th width=\"16\">&nbsp;</th>\n";
		echo "</tr>\n";
		echo '</thead>';
		echo '<tbody>';

		$currow = "row1";
		// construct true/false button images
		$image_true ="<img src=\"../images/cms/true.gif\" alt=\"".lang('true')."\" title=\"".lang('true')."\" border=\"0\" />";
		$image_false ="<img src=\"../images/cms/false.gif\" alt=\"".lang('false')."\" title=\"".lang('false')."\" border=\"0\" />";

		$counter=0;
		foreach ($userlist as $oneuser){
			if ($counter < $page*$limit && $counter >= ($page*$limit)-$limit) {
				echo "<tr class=\"$currow\">\n";
				echo "<td><a href=\"edituser.php?user_id=".$oneuser->id."\">".$oneuser->username."</a></td>\n";
				echo "<td align=\"center\">".($oneuser->active == 1?$image_true:$image_false)."</td>\n";
				if ($edit || $userid == $oneuser->id)
					echo "<td width=\"16\"><a href=\"edituser.php?user_id=".$oneuser->id."\"><img src=\"../images/cms/edit.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"".lang('edit')."\" /></a></td>\n";
				else
					echo "<td>&nbsp;</td>\n";
				if ($remove)
					echo "<td width=\"16\"><a href=\"deleteuser.php?user_id=".$oneuser->id."\" onclick=\"return confirm('".lang('deleteconfirm')."');\"><img src=\"../images/cms/delete.gif\" width=\"16\" height=\"16\" border=\"0\" alt=\"".lang('delete')."\" /></a></td>\n";
				echo "</tr>\n";

				($currow=="row1"?$currow="row2":$currow="row1");
			}
			$counter++;
		}

		echo '</tbody>';
		echo "</table>\n";

	}

if (check_permission($userid, 'Add Users')) {
?>

<div class="button"><a href="adduser.php"><?php echo lang('adduser')?></a></div><br />

<?php
}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
