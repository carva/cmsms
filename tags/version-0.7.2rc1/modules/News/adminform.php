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

$error = "";
$hiddenfields = "";

$db = $cms->db;

$title = "";
if (isset($_POST[$id."newstitle"])) $title = $_POST[$id."newstitle"];
$data = "";
if (isset($_POST[$id."newscontent"])) $data = $_POST[$id."newscontent"];
$post_date = "";
if (isset($_POST[$id."post_date"])) $post_date = $_POST[$id."post_date"];
$start_date = "";
if (isset($_POST[$id."start_date"])) $start_date = $_POST[$id."start_date"];
$end_date = "";
if (isset($_POST[$id."end_date"])) $end_date = $_POST[$id."end_date"];

if (isset($_POST[$id."cancelsubmit"])) {
	redirect("moduleinterface.php?module=News");
	return;
}

if ($moduleaction == "edit")
{
	$newsid = (isset($_GET[$id."news_id"])?$_GET[$id."news_id"]:"").(isset($_POST[$id."news_id"])?$_POST[$id."news_id"]:"");
	$hiddenfields .= "<input type=\"hidden\" name=\"".$id."action\" value=\"completeedit\" /><input type=\"hidden\" name=\"".$id."news_id\" value=\"".$newsid."\" />";
	$query = "SELECT * FROM ".cms_db_prefix()."module_news WHERE news_id = ?";
	$dbresult = $db->Execute($query, array($newsid));
	if ($dbresult && $dbresult->RowCount() > 0) {
		$row = $dbresult->FetchRow();
		$title = $row["news_title"];
		$data = $row["news_data"];
		if (isset($row["news_date"]))
		{
			$post_date = $row["news_date"];
		}
		if (isset($row["start_time"]))
		{
			$start_date = $row["start_time"];
		}
		if (isset($row["end_time"]))
		{
			$end_date = $row["end_time"];
		}
	}
}
else if ($moduleaction == "delete")
{
	$query = "DELETE FROM ".cms_db_prefix()."module_news WHERE news_id = ?";
	$dbresult = $db->Execute($query, array((isset($_GET[$id."news_id"])?$_GET[$id."news_id"]:"").(isset($_POST[$id."news_id"])?$_POST[$id."news_id"]:"")));
	cms_mapi_audit($cms, (isset($_GET[$id."news_id"])?$_GET[$id."news_id"]:"").(isset($_POST[$id."news_id"])?$_POST[$id."news_id"]:""), "News", "Deleted News Item");
	redirect("moduleinterface.php?module=News");

} else if ($moduleaction == "completeadd") {

	$hiddenfields .= '<input type="hidden" name="'.$id.'action" value="completeadd" />';
	$validinfo = true;

	if ($title === "") {
		$error .= "<li>No title given</li>";
		$validinfo = false;
	}
	if ($data === "") {
		$error .= "<li>No content given</li>";
		$validinfo = false;
	}
	if ($post_date === "") {
		$error .= "<li>No post date given</li>";
		$validinfo = false;
	}
	else if ($db->DBTimeStamp($post_date) === FALSE)
	{
		$error .= "<li>Post date not in a valid yyyy-mm-dd hh:mm:ss format</li>";
		$validinfo = false;
	}
	if ($start_date !== "" && $end_date === "")
	{
		$error .= "<li>Entering a start date requires an end date also.</li>";
		$validinfo = false;
	}
	if ($end_date !== "" && $start_date === "")
	{
		$error .= "<li>Entering an end date requires a start date also.</li>";
		$validinfo = false;
	}
	if ($start_date !== "" && $end_date !== "" && $validinfo)
	{
		if ($db->DBTimeStamp($start_date) === FALSE)
		{
			$error .= "<li>Start date not in a valid yyyy-mm-dd hh:mm:ss format</li>";
			$validinfo = false;
		}
		if ($db->DBTimeStamp($end_date) === FALSE)
		{
			$error .= "<li>End date not in a valid yyyy-mm-dd hh:mm:ss format</li>";
			$validinfo = false;
		}
	}

	if ($validinfo) {
		$new_id = $db->GenID(cms_db_prefix()."module_news_seq");
		$querystart = "INSERT INTO ".cms_db_prefix()."module_news (news_id, news_title, news_data, news_date, create_date";
		$queryend = ") VALUES (?,?,?,?,?";
		$params = array($new_id, $title, $data, $post_date, $db->DBTimeStamp(time()));
		if ($start_date != "")
		{
			$querystart .= ", start_time";
			$queryend .= ",?";
			array_push($params, $db->DBTimeStamp($start_date));
		}
		if ($end_date != "")
		{
			$querystart .= ", end_time";
			$queryend .= ",?";
			array_push($params, $db->DBTimeStamp($end_date));
		}
		$query = $querystart . $queryend . ")";
		$dbresult = $db->Execute($query, $params);
		cms_mapi_audit($cms, $new_id, "News", "Added News Item");
		redirect("moduleinterface.php?module=News");
	}
}
else if ($moduleaction == "completeedit")
{
	$newsid = (isset($_GET[$id."news_id"])?$_GET[$id."news_id"]:"").(isset($_POST[$id."news_id"])?$_POST[$id."news_id"]:"");
	$hiddenfields .= "<input type=\"hidden\" name=\"".$id."action\" value=\"completeedit\" /><input type=\"hidden\" name=\"".$id."news_id\" value=\"".$newsid."\" />";

	$validinfo = true;

	if ($title === "") {
		$error .= "<li>No title given</li>";
		$validinfo = false;
	}
	if ($data === "") {
		$error .= "<li>No content given</li>";
		$validinfo = false;
	}
	if ($post_date === "") {
		$error .= "<li>No post date given</li>";
		$validinfo = false;
	}
	else if ($db->DBTimeStamp($post_date) === FALSE)
	{
		$error .= "<li>Post date not in a valid yyyy-mm-dd hh:mm:ss format</li>";
		$validinfo = false;
	}
	if ($start_date !== "" && $end_date === "")
	{
		$error .= "<li>Entering a start date requires an end date also.</li>";
		$validinfo = false;
	}
	if ($end_date !== "" && $start_date === "")
	{
		$error .= "<li>Entering an end date requires a start date also.</li>";
		$validinfo = false;
	}
	if ($start_date !== "" && $end_date !== "" && $validinfo)
	{
		if ($db->DBTimeStamp($start_date) === FALSE)
		{
			$error .= "<li>Start date not in a valid yyyy-mm-dd hh:mm:ss format</li>";
			$validinfo = false;
		}
		if ($db->DBTimeStamp($end_date) === FALSE)
		{
			$error .= "<li>End date not in a valid yyyy-mm-dd hh:mm:ss format</li>";
			$validinfo = false;
		}
	}
	if ($validinfo)
	{
		$query = "UPDATE ".cms_db_prefix()."module_news SET news_title = ?, news_data = ?, modified_date = ?";
		$params = array($title, $data, $db->DBTimeStamp(time()));
		if ($start_date != "")
		{
			$query .= ", start_time = ?";
			array_push($params, $db->DBTimeStamp($start_date));
		}
		else
		{
			$query .= ", start_time = ?";
			array_push($params, NULL);
		}
		if ($end_date != "")
		{
			$query .= ", end_time = ?";
			array_push($params, $db->DBTimeStamp($end_date));
		}
		else
		{
			$query .= ", end_time = ?";
			array_push($params, NULL);
		}
		if ($post_date != "")
		{
			$query .= ", news_date = ?";
			array_push($params, $db->DBTimeStamp($post_date));
		}
		$query .= " WHERE news_id = ?";
		array_push($params, $newsid);
		$dbresult = $db->Execute($query, $params);

		cms_mapi_audit($cms, $newsid, "News", "Edited News Item");
		redirect("moduleinterface.php?module=News");
		return;
	}
} else {
	$hiddenfields .= '<input type="hidden" name="'.$id.'action" value="completeadd" />';
	$post_date = rtrim(ltrim($db->DBTimeStamp(time()), "'"), "'");
}

if ($error != "") {
	echo "<ul class=\"error\">".$error."</ul>";
}

?>

<div class="adminform">

<?php echo cms_mapi_create_admin_form_start("News", $id)?>

<table width="100%" border="0">
	<tr>
		<td width="60">Title:</td>
		<td><input name="<?php echo $id?>newstitle" maxlength="255" value="<?php echo $title?>" class="standard"/></td>
	</tr>
	<tr>
		<td>Content:</td>
		<td><textarea id="<?php echo $id?>newscontent" name="<?php echo $id?>newscontent" cols="80" rows="12"><?php echo $data?></textarea></td>
	</tr>
	<?php //if ($moduleaction == "edit" || $moduleaction == "completeedit") { ?>
	<tr>
		<td>Post Date:</td>
		<td><input type="text"  name="<?php echo $id?>post_date" maxlength="20" length="12" value="<?php echo $post_date?>" /></td>
	</tr>
	<?php //} ?>
	<tr>
		<td>Start Date:</td>
		<td><input type="text"  name="<?php echo $id?>start_date" maxlength="20" length="12" value="<?php echo $start_date?>" /></td>
	</tr>
	<tr>
		<td>End Date:</td>
		<td><input type="text"  name="<?php echo $id?>end_date" maxlength="20" length="12" value="<?php echo $end_date?>" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><em>Note:</em> Dates must be in a 'yyyy-mm-dd hh:mm:ss' format.</td>
	</tr>
	<tr>
		<td><?php echo $hiddenfields?>&nbsp;</td>
		<td>
			<input type="submit" name="<?php echo $id?>submit" value="Submit" />
			<input type="submit" name="<?php echo $id?>cancelsubmit" value="Cancel" />
		</td>
	</tr>
</table>

<?php echo cms_mapi_create_admin_form_end()?>

</div>

<?php

# vim:ts=4 sw=4 noet
?>
