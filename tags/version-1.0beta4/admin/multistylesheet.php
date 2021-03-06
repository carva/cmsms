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

require_once("../include.php");

if (isset($_POST['cancel']))
	redirect('listcss.php');

check_login();

$action = '';
if (isset($_POST['multiaction'])) $action = $_POST['multiaction'];

global $gCms;

$nodelist = array();

if (isset($_POST['idlist']))
{
	foreach (explode(':', $_POST['idlist']) as $id)
	{
		$stylesheet =& StylesheetOperations::LoadStylesheetByID($id);
		$nodelist[] =& $stylesheet;
	}
}
else
{
	foreach ($_POST as $k=>$v)
	{
		if (startswith($k, 'multistylesheet-'))
		{
			$id = substr($k, strlen('multistylesheet-'));
			$stylesheet =& StylesheetOperations::LoadStylesheetByID($id);
			$nodelist[] =& $stylesheet; 
		}
	}
}

include_once("header.php");

if (count($nodelist) == 0)
{
	redirect("listcss.php");
}
else
{
	if ($action == 'delete')
	{
		?>
		<div class="pagecontainer">
			<p class="pageheader"><?php echo lang('deletetemplate') ?></p><br />
		<?php
		$userid = get_userid();
		$access = check_permission($userid, 'Remove Stylesheets');
		if ($access)
		{
			echo '<form method="post" action="multistylesheet.php">' . "\n";
			$idlist = array();
			if (count($nodelist) > 0)
			{
				echo '<p>'.lang('stylesheetstodelete').'</p><p>' . "\n";
				foreach ($nodelist as $node)
				{
					echo $node->name . '<br />' . "\n";
					$idlist[] = $node->id;
				}
				echo '</p>';
			}

			echo '<div class="pageoverflow">
				<p class="pagetext">&nbsp;</p>
				<p class="pageinput">';

			echo '<input type="hidden" name="multiaction" value="dodelete" /><input type="hidden" name="idlist" value="'.implode(':', $idlist).'" />' . "\n";
			?>
								<?php if (count($nodelist) > 0) { ?><input type="submit" name="confirm" value="<?php echo lang('submit') ?>"  class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" /><?php } ?>
								<input type="submit" name="cancel" value="<?php echo lang('cancel') ?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
							</p>
						</div>
					</form>
				</div>
			</div>
			<?php
		}
		else
		{
			redirect('listcss.php');
		}
	}
	else if ($action == 'dodelete')
	{
		$userid = get_userid();
		$access = check_permission($userid, 'Remove Stylesheets');
		if ($access)
		{
			foreach ($nodelist as $node)
			{
				$id = $node->id;
				$title = $node->name;
				$node->Delete();
				audit($id, $title, 'Deleted Stylesheet');
			}
		}
		redirect("listcss.php");
	}
	else
	{
		redirect("listcss.php");
	}
}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
