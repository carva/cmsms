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

require_once("../include.php");

check_login($config);

$user_id = -1;
if (isset($_GET["user_id"])) {

	$user_id = $_GET["user_id"];
	$userid = get_userid();
	$access = check_permission($config, $userid, 'Remove User');

	if ($access) {
		$db = new DB($config);

		$query = "DELETE FROM ".$config->db_prefix."additional_users where user_id = $user_id";
		$result = $db->query($query);
		$query = "DELETE FROM ".$config->db_prefix."users where user_id = $user_id";
		$result = $db->query($query);
		$db->close();
	}
}

redirect("listusers.php");

# vim:ts=4 sw=4 noet
?>
