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

function smarty_cms_function_cms_module($params, &$smarty)
{
	global $gCms;
	$cmsmodules = &$gCms->modules;

	$id = 'm' . ++$gCms->variables["modulenum"];
	$params = array_merge($params, GetModuleParameters($id));

	$modulename = '';
	$action = 'default';
	$inline = false;

	$checkid = '';

	if (isset($params['module'])) $modulename = $params['module'];
	if (isset($_REQUEST['id'])) //Not really needed now...
	{
		$checkid = $_REQUEST['id'];
	}
	else if (isset($_REQUEST['mact']))
	{
		$ary = explode(',', $_REQUEST['mact'], 4);
		$mactmodulename = (isset($ary[0])?$ary[0]:'');
		if (strtolower($mactmodulename) == strtolower($params['module']))
		{
			$checkid = (isset($ary[1])?$ary[1]:'');
			$mactaction = (isset($ary[2])?$ary[2]:'');
		}
		$mactinline = (isset($ary[3]) && $ary[3] == 1?true:false);
		if ($checkid == $id)
		{
			$action = $mactaction;
			$inline = $mactinline;
		}
	}

	#$actioninparams = false;

	#if (isset($_REQUEST[$id.'action']))
	#{
	#	$action = $_REQUEST[$id.'action'];
	#}
	#else if (isset($_REQUEST['action']))
	#{
	#	$action = $_REQUEST['action'];
	#}
	if (isset($params['action']) && $params['action'] != '')
	{
		$action = $params['action'];
		#$actioninparams = true;
	}

	if (isset($cmsmodules))
	{
		$modulename = $params['module'];

		foreach ($cmsmodules as $key=>$value)
		{
			if (strtolower($modulename) == strtolower($key))
			{
				$modulename = $key;
			}
		}

		if (isset($modulename))
		{
			if (isset($cmsmodules[$modulename]))
			{
				if (isset($cmsmodules[$modulename]['object'])
					&& $cmsmodules[$modulename]['installed'] == true
					&& $cmsmodules[$modulename]['active'] == true
					&& $cmsmodules[$modulename]['object']->IsPluginModule())
				{
					@ob_start();

					#if (($inline == false && $actioninparams == false) || $action == '')
					#	$action = 'default';

					$returnid = '';
					if (isset($gCms->variables['pageinfo']) && isset($gCms->variables['pageinfo']->content_id))
					{
						$returnid = $gCms->variables['pageinfo']->content_id;
					}

					$result = $cmsmodules[$modulename]['object']->DoActionBase($action, $id, $params, $returnid);
					if ($result !== FALSE)
					{
						echo $result;
					}
					$modresult = @ob_get_contents();
					@ob_end_clean();
					return $modresult;
				}
				else
				{
					return "<!-- Not a tag module -->\n";
				}
			}
		}
	}
}

function smarty_cms_help_function_cms_module() {
	?>
	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it's help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It's just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module="somemodulename"}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>
	<?php
}

function smarty_cms_about_function_cms_module() {
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
