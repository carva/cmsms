<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2007 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
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

/**
 * Methods for modules to do form related functions
 *
 * @since		1.0
 * @package		CMS
 */

function cms_module_CreateFormStart(&$modinstance, $id, $action='default', $returnid='', $method='post', $enctype='', $inline=false, $idsuffix='', $params = array(), $extra='')
{
	global $gCms;

	$formcount = 1;
	$variables = &$gCms->variables;

	if (isset($variables['formcount']))
		$formcount = $variables['formcount'];

	if ($idsuffix == '')
		$idsuffix = $formcount;

	$goto = ($returnid==''?'moduleinterface.php':'index.php');
	#$goto = 'moduleinterface.php';
	if ($inline && $returnid != '')
	{
		#$goto = 'index.php?module='.$this->GetName().'&amp;id='.$id.'&amp;'.$id.'action='.$action;
		#$goto = 'index.php?mact='.$this->GetName().','.$id.','.$action;
		#$goto .= '&amp;'.$id.'returnid='.$returnid;
		#$goto .= '&amp;'.$this->cms->config['query_var'].'='.$returnid;
	}
	$text = '<form id="'.$id.'moduleform_'.$idsuffix.'" name="'.$id.'moduleform_'.$idsuffix.'" method="'.$method.'" action="'.$goto.'"';//moduleinterface.php
	if ($enctype != '')
	{
		$text .= ' enctype="'.$enctype.'"';
	}
	/*
	$text .= '><div class="hidden"><input type="hidden" name="module" value="'.$this->GetName().'" /><input type="hidden" name="id" value="'.$id.'" />';
	if ($action != '')
	{
		$text .= '<input type="hidden" name="'.$id.'action" value="'.$action.'" />';
	}
	*/
	if ($extra != '')
	{
		$text .= ' '.$extra;
	}
	$text .= '><div class="hidden"><input type="hidden" name="mact" value="'.$modinstance->GetName().','.$id.','.$action.','.($inline == true?1:0).'" />';
	if ($returnid != '')
	{
		$text .= '<input type="hidden" name="'.$id.'returnid" value="'.$returnid.'" />';
		if ($inline)
		{
			$text .= '<input type="hidden" name="'.$modinstance->cms->config['query_var'].'" value="'.$returnid.'" />';
		}
	}
	foreach ($params as $key=>$value)
	{
		if ($key != 'module' && $key != 'action' && $key != 'id')
			$text .= '<input type="hidden" name="'.$id.$key.'" value="'.$value.'" />';
	}
	$text .= "</div>\n";

	$formcount = $formcount + 1;
	$variables['formcount'] = $formcount;

	return $text;
}

function cms_module_CreateLabelForInput(&$modinstance, $id, $name, $labeltext='', $addttext='')
{
  $labeltext = cms_htmlentities($labeltext);
  $text = '<label for="'.$id.$name.'" id="'.$id.$name.'"';
  if ($addttext != '')
    {
      $text .= ' ' . $addttext;
    }
  $text .= '>'.$labeltext.'</label>'."\n";
  return $text;

}

function cms_module_CreateInputText(&$modinstance, $id, $name, $value='', $size='10', $maxlength='255', $addttext='')
{
	$value = str_replace('"', '&quot;', $value);
	$text = '<input type="text" name="'.$id.$name.'" id="'.$id.$name.'" value="'.$value.'" size="'.$size.'" maxlength="'.$maxlength.'"';
	if ($addttext != '')
	{
		$text .= ' ' . $addttext;
	}
	$text .= " />\n";
	return $text;
}

function cms_module_CreateInputTextWithLabel(&$modinstance, $id, $name, $value='', $size='10', $maxlength='255', $addttext='', $label='', $labeladdtext='')
{
        if ($label == '') {
	  $label = $name;
	}
	$text = '<label for="'.$id.$name.'" '.$labeladdtext.'>'.$label.'</label>'."\n";
	$text .= $modinstance->CreateInputText($id, $name, $value, $size, $maxlength, $addttext);
	$text .= "\n";
	return $text;
}

function cms_module_CreateInputFile(&$modinstance, $id, $name, $accept='', $size='10',$addttext='')
{
	$text='<input type="file" name="'.$id.$name.'" size="'.$size.'"';
	if ($accept != '')
	{
		$text .= ' accept="' . $accept.'"';
	}
	if ($addttext != '')
	{
		$text .= ' ' . $addttext;
	}
	$text .= " />\n";
	return $text;
}

function cms_module_CreateInputPassword(&$modinstance, $id, $name, $value='', $size='10', $maxlength='255', $addttext='')
{
	$value = str_replace('"', '&quot;', $value);
	$text = '<input type="password" name="'.$id.$name.'" value="'.$value.'" size="'.$size.'" maxlength="'.$maxlength.'"';
	if ($addttext != '')
	{
		$text .= ' ' . $addttext;
	}
	$text .= " />\n";
	return $text;
}

function cms_module_CreateInputHidden(&$modinstance, $id, $name, $value='', $addttext='')
{
	$value = str_replace('"', '&quot;', $value);
	$text = '<input type="hidden" name="'.$id.$name.'" value="'.$value.'"';
	if ($addttext != '')
	{
		$text .= ' '.$addttext;
	}
	$text .= " />\n";
	return $text;
}

function cms_module_CreateInputCheckbox(&$modinstance, $id, $name, $value='', $selectedvalue='', $addttext='')
{
	$text = '<input type="checkbox" name="'.$id.$name.'" value="'.$value.'"';
	if ($selectedvalue == $value)
	{
		$text .= ' ' . 'checked="checked"';
	}
	if ($addttext != '')
	{
		$text .= ' '.$addttext;
	}
	$text .= " />\n";
	return $text;
}

function cms_module_CreateInputSubmit(&$modinstance, $id, $name, $value='', $addttext='', $image='', $confirmtext='')
{
	global $gCms;
	$config =& $gCms->GetConfig();

	$text = '<input name="'.$id.$name.'" value="'.$value.'" type=';

	if ($image != '')
	{
		$text .= '"image"';
		$img = $config['root_url'] . '/' . $image;
		$text .= ' src="'.$img.'"';
	}
	else
	{
		$text .= '"submit"';
	}
	if ($confirmtext != '' )
	  {
		$text .= 'onclick="return confirm(\''.$confirmtext.'\');"';
	  }
	if ($addttext != '')
	{
		$text .= ' '.$addttext;
	}

	$text .= ' />';

	return $text . "\n";
}

function cms_module_CreateInputReset(&$modinstance, $id, $name, $value='Reset', $addttext='')
{
	$text = '<input type="reset" name="'.$id.$name.'" value="'.$value.'"';
	if ($addttext != '')
	{
		$text .= ' '.$addttext;
	}
	$text .= ' />';
	return $text . "\n";
}

function cms_module_CreateFileUploadInput(&$modinstance, $id, $name, $addttext='')
{
	$text = '<input type="file" name="'.$id.$name.'"';
	if ($addttext != '')
	{
		$text .= ' '.$addttext;
	}
	$text .= ' />';
	return $text . "\n";
}

function cms_module_CreateInputDropdown(&$modinstance, $id, $name, $items, $selectedindex, $selectedvalue, $addttext)
{
	$text = '<select name="'.$id.$name.'"';
	if ($addttext != '')
	{
		$text .= ' ' . $addttext;
	}
	$text .= '>';
	$count = 0;
	if (is_array($items) && count($items) > 0)
	{
		foreach ($items as $key=>$value)
		{
			$text .= '<option value="'.$value.'"';
			if ($selectedindex == $count || $selectedvalue == $value)
			{
				$text .= ' ' . 'selected="selected"';
			}
			$text .= '>';
			$text .= $key;
			$text .= '</option>';
			$count++;
		}
	}
	$text .= '</select>'."\n";

	return $text;
}

function cms_module_CreateInputSelectList(&$modinstance, $id, $name, $items, $selecteditems=array(), $size=3, $addttext='', $multiple = true)
{
	$text = '<select name="'.$id.$name.'"';
	if ($addttext != '')
	{
		$text .= ' ' . $addttext;
	}
	if( $multiple )
	  {
		$text .= ' multiple="multiple" ';
	  }
	$text .= 'size="'.$size.'">';
	$count = 0;
	foreach ($items as $key=>$value)
	{
		$text .= '<option value="'.$value.'"';
		if (in_array($value, $selecteditems))
		{
			$text .= ' ' . 'selected="selected"';
		}
		$text .= '>';
		$text .= $key;
		$text .= '</option>';
		$count++;
	}
	$text .= '</select>'."\n";

	return $text;
}

function cms_module_CreateInputRadioGroup(&$modinstance, $id, $name, $items, $selectedvalue='', $addttext='', $delimiter='')
{
	$text = '';
	$counter = 0;
	foreach ($items as $key=>$value)
	{
		$counter = $counter + 1;
		$text .= '<input type="radio" name="'.$id.$name.'" id="'.$id.$name.$counter.'" value="'.$value.'"';
		if ($addttext != '')
		{
			$text .= ' ' . $addttext;
		}
		if ($selectedvalue == $value)
		{
			$text .= ' ' . 'checked="checked"';
		}
		$text .= ' />';
		$text .= '<label for="'.$id.$name.$counter.'">'.$key .'</label>' . $delimiter;
	}

	return $text;
}

function cms_module_CreateLink(&$modinstance, $id, $action, $returnid='', $contents='', $params=array(), $warn_message='', $onlyhref=false, $inline=false, $addttext='', $targetcontentonly=false, $prettyurl='')
{
	global $gCms;
	$config =& $gCms->GetConfig();

	$class = (isset($params['class'])?$params['class']:'');

	if ($prettyurl != '' && $config['assume_mod_rewrite'] == true && $config['use_hierarchy'] == true)
	{
		$text = $config['root_url'] . '/' . $prettyurl . $config['page_extension'];
	}
	else if ($prettyurl != '' && $config['internal_pretty_urls'] == true && $config['use_hierarchy'] == true)
	{
		$text = $config['root_url'] . '/index.php/' . $prettyurl . $config['page_extension'];
	}
	else
	{
		$text = '';
		if ($targetcontentonly || ($returnid != '' && !$inline))
		{
			$id = 'cntnt01';
		}
		$goto = 'index.php';
		if ($returnid == '')
		{
			$goto = 'moduleinterface.php';
		}
		if (!$onlyhref)
		{
		}
		$text .= $config['root_url'];
		if (!($returnid != '' && $returnid > -1))
		{
			$text .= '/'.$config['admin_dir'];
		}

		#$text .= '/'.$goto.'?module='.$modinstance->GetName().'&amp;id='.$id.'&amp;'.$id.'action='.$action;
		$text .= '/'.$goto.'?mact='.$modinstance->GetName().','.$id.','.$action.','.($inline == true?1:0);

		foreach ($params as $key=>$value)
		{
			if ($key != 'module' && $key != 'action' && $key != 'id')
				$text .= '&amp;'.$id.$key.'='.rawurlencode($value);
		}
		if ($returnid != '')
		{
			$text .= '&amp;'.$id.'returnid='.$returnid;
			if ($inline)
			{
				$text .= '&amp;'.$config['query_var'].'='.$returnid;
			}
		}
	}

	if (!$onlyhref)
	{
		$beginning = '<a';
		if ($class != '')
		{
			$beginning .= ' class="'.$class.'"';
		}
		$beginning .= ' href="';
		$text = $beginning . $text . "\"";
		if ($warn_message != '')
		{
			$text .= ' onclick="return confirm(\''.$warn_message.'\');"';
		}

		if ($addttext != '')
		{
			$text .= ' ' . $addttext;
		}

		$text .= '>'.$contents.'</a>';
	}
	return $text;
}

function cms_module_CreateContentLink(&$modinstance, $pageid, $contents='')
{
	global $gCms;
	$config = &$gCms->GetConfig();
	$text = '<a href="';
	if ($config["assume_mod_rewrite"])
	{
		# mod_rewrite
		$contentops =& $gCms->GetContentOperations();
		$alias = $contentops->GetPageAliasFromID( $pageid );
		if( $alias == false )
		{
			return '<!-- ERROR: could not get an alias for pageid='.$pageid.'-->';
		}
		else
		{
			$text .= $config["root_url"]."/".$alias.
			(isset($config['page_extension'])?$config['page_extension']:'.shtml');
		}
	}
	else
	{
		# mod rewrite
		$text .= $config["root_url"]."/index.php?".$config["query_var"]."=".$pageid;
	}
	$text .= '">'.$contents.'</a>';
	return $text;
}

function cms_module_CreateReturnLink(&$modinstance, $id, $returnid, $contents='', $params=array(), $onlyhref=false)
{
	$text = '';
	global $gCms;
	$config = &$gCms->GetConfig();
	$manager =& $gCms->GetHierarchyManager();
	$node =& $manager->sureGetNodeById($returnid);
	if (isset($node))
	{
		$content =& $node->GetContent();

		if (isset($content))
		{
			if ($content->GetURL() != '')
			{
				if (!$onlyhref)
				{
					$text .= '<a href="';
				}
				$text .= $content->GetURL();

				$count = 0;
				foreach ($params as $key=>$value)
				{
					if ($count > 0)
					{
						if ($config["assume_mod_rewrite"] && $rewrite == true)
							$text .= '?';
						else
							$text .= '&amp;';
					}
					else
					{
						$text .= '&amp;';
					}
					$text .= $id.$key.'='.$value;
					$count++;
				}
				if (!$onlyhref)
				{
					$text .= "\"";
					$text .= '>'.$contents.'</a>';
				}
			}
		}
	}

	return $text;
}

function cms_module_CreateFieldsetStart(&$modinstance, $id, $name, $legend_text='', $addtext='', $addtext_legend='')
{
	$text = '<fieldset '. $addtext. '>'."\n";
	$text .= '<legend '. $addtext_legend .'>'."\n";
	$text .= $legend_text;
	$text .= '</legend>';
	return $text;
}

?>
