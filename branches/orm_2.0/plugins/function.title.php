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

function smarty_cms_function_title($params, &$smarty)
{
	global $gCms;
	$pageinfo = &$gCms->variables['pageinfo'];
	$config = &$gCms->GetConfig();
	
	$result = '404 Error';
	
	if (!(isset($pageinfo) && $pageinfo->content_id == -1))
	{
		$result = cms_htmlentities($pageinfo->content_title);
		if (!(isset($config['use_smarty_php_tags']) && $config['use_smarty_php_tags'] == true))
		{
			$result = ereg_replace("\{\/?php\}", '', $result);
		}
	}
	
	if (array_key_exists('assign', $params))
	{
		$smarty->assign($params['assign'], $result);
	}
	else
	{
		return $result;
	}
}

function smarty_cms_help_function_title() {
	?>
	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>assign - Assign the output to a smarty variable named in assign instead of outputting it directly.</li>
	</ul>
	<?php
}

function smarty_cms_about_function_title() {
	?>
	<p>Author: Ted Kulp&lt;tedkulp@users.sf.net&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}
?>
