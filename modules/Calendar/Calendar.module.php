<?php
# Calendar. A plugin for CMS - CMS Made Simple
# Copyright (c) 2004 by Rob Allen <rob@akrabat.com>
#
# CMS- CMS Made Simple is Copyright (c) Ted Kulp (wishy@users.sf.net)
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


class Calendar extends CMSModule
{
	var $categories_table_name;
	var $events_to_categories_table_name;
	var $events_table_name;
	
	function Calendar()
	{
		$this->CMSModule();
		
		$this->categories_table_name = cms_db_prefix() . 'module_calendar_categories';
		$this->events_to_categories_table_name = cms_db_prefix().'module_calendar_events_to_categories';
		$this->events_table_name = cms_db_prefix().'module_calendar_events';	
	}
	
	function GetName()
	{
		return 'Calendar';
	}
	
	function GetAuthor()
	{
		return 'Rob Allen';
	}
	
	function GetAuthorEmail()
	{
		return 'rob@akrabat.com';
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetVersion()
	{
		return '0.1';
	}

	function GetDescription($lang = 'en_US')
	{
		return '<p>Calendar is a module for displaying events on your page. When the
		module is installed, a Calendar admin page is added to the plugins menu
		that will allow you to manage your events.</p>';
	}

	function GetHelp($lang = 'en_US')
	{
		return <<<EOT

		<h3>What does this do?</h3>
		<p>Calendar is a module for displaying events on your page. When the
		module is installed, a Calendar admin page is added to the plugins menu
		that will allow you to manage your events.</p>
		<h3>Security</h3>
		<p>The user must belong to a group with the 'Modify Calendar' permission
		in order to add, edit, or delete calendar event entries.</p>
		<h3>How do I use it?</h3>
		<p>The module is used in conjunction with the cms_module tag.
		This will insert the module into your template or page anywhere you wish,
		and display the calendar.  The code would look something like:
		<code>{cms_module module="Calendar"}</code></p>
		<h3>What Parameters Exist?</h3>
		<table border=0 cellpadding=3 cellspacing=0>
		<tr>
			<td>action</td>
			<td>Either "calendar" or "list".
			Defaults to "calendar" <em>(optional)</em></td>
		</tr>
		<tr>
			<td>category</td>
			<td>Only display items for that category. Leaving unset, will show all categories. Note that
			you can limit to muliple categories by separating each one with a comma.<em>(optional)</em></td>
		</tr>
		<tr>
			<td>month</td>
			<td>Only display entries for a particular month. If year is not set, then the current year is 
				assumed. This option only works if action is set to "list". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>year</td>
			<td>Only display entries for a particular year. 
				This option only works if action is set to "list". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>limit</td>
			<td>Set to the maximum number of events to display. This option only works if action is set to "list". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>summaries</td>
			<td>Set to "true" to display the summary information on the main calendar page. Default is false<em>(optional)</em></td>
		</tr>
		</table>

EOT;
	}

	function GetChangeLog()
	{
		return <<<EOT
			<p>Author: Rob Allen &lt;rob@akrabat.com&gt;</p>
			<dl>
				<dt>Version: 0.1</dt>
					<dd>Initial release.</dd>

			</dl>
EOT;
	}

	function Install()
	{
		$db = $this->cms->db;				/* @var $db ADOConnection */
		$dict = NewDataDictionary($db); 	/* @var $dict ADODB_DataDict */
	
		$table_options = array('mysql' => 'TYPE=MyISAM');

		// create categories table
		$fields = "
			category_id I KEY,
			category_name C(255),
			category_order I
		";
		$sql_array = $dict->CreateTableSQL($this->categories_table_name, $fields, $table_options);
		$dict->ExecuteSQLArray($sql_array);
	
		$db->CreateSequence($this->categories_table_name . '_seq');
	
		// create events table
		$fields = "
			event_id I KEY,
			event_title C(255),
			event_summary X,
			event_details X,
			event_date T,
			event_created_by I,
			event_create_date T,
			event_modified_date T
		";
		$sql_array = $dict->CreateTableSQL($this->events_table_name, $fields, $table_options);
		$dict->ExecuteSQLArray($sql_array);
	
		$db->CreateSequence($this->events_table_name.'_seq');
	
		// create events_to_categories table
		$fields = "
			category_id I KEY,
			event_id I KEY
		";
		$sql_array = $dict->CreateTableSQL($this->events_to_categories_table_name, $fields, $table_options );
		$dict->ExecuteSQLArray( $sql_array );
	
		$this->CreatePermission('Modify Calendar', 'Modify Calendar');
		
		// set up a General category
		$new_id = $db->GenID($this->categories_table_name.'_seq');
	
		$sql = 'INSERT INTO ' . $this->categories_table_name . " (category_id, category_name, category_order)
						VALUES ($new_id, 'General', 50)";
		$db->Execute($sql);
	}

	function InstallPostMessage()
	{
		return 'Make sure to set the "Modify Calendar" permission on users who will be administering calendar events.';
	}

	function Upgrade($oldversion, $newversion)
	{
		// No database changes yet!
	}

	function Uninstall()
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$dict = NewDataDictionary($db);
	
		$sqlarray = $dict->DropTableSQL($this->events_table_name);
		$dict->ExecuteSQLArray($sqlarray);
	
		$sqlarray = $dict->DropTableSQL($this->events_to_categories_table_name);
		$dict->ExecuteSQLArray($sqlarray);
	
		$sqlarray = $dict->DropTableSQL($this->categories_table_name);
		$dict->ExecuteSQLArray($sqlarray);
	
		$db->DropSequence($this->events_table_name.'_seq');
		$db->DropSequence($this->categories_table_name.'_seq');
		$this->RemovePermission('Modify Calendar');
	}
		

	function GetEvent($event_id)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		
		$sql = 'SELECT * FROM ' . $this->events_table_name .' WHERE event_id = ' . $event_id;
		$rs = $db->Execute($sql);
		if($rs->RowCount() > 0)
		{
			$result = $rs->FetchRow();
			$result['categories'] = array();
			// now pick up categories
			$sql = 'SELECT category_id FROM ' . $this->events_to_categories_table_name . ' WHERE event_id = ' . $event_id;
			$rs = $db->Execute($sql);
			if($rs)
			{
				while($row = $rs->FetchRow())
				{
					$result['categories'][] = $row['category_id'];
				}
			}
		}
		else
		{
			// create an empty record
			$result = array();
			$result['event_id'] = -1;
			$result['event_title'] = '';
			$result['event_summary'] = '';
			$result['event_details'] = '';
			$result['event_date'] = NULL;
			$result['event_created_by'] = -1;
			$result['event_create_date'] = NULL;
			$result['event_modified_date'] = NULL;
			$result['categories'] = array();
		}
	
		return $result;
	}

		
	function GetCategories($order_by='category_order, category_name')
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories_table_name = $this->categories_table_name;
		$sql = "SELECT * FROM $categories_table_name";
		if($order_by != '')
	    {
	        $sql .= " ORDER BY $order_by";
	    }
	
	    $result = array();
	    $rs = $db->Execute($sql);
	    if($rs && $rs->RowCount() > 0)
	        $result = $rs->GetArray();
	    return $result;
	}	
	
	function AllowAccess($permission='Modify Calendar')
	{
		$access = $this->CheckPermission($permission);
		if (!$access)  {
			echo "<p class=\"error\">You need the '$permission' permission to perform that function.</p>";
			return false;
		}
		else return true;
	
	}
	
	function DoAction($name, $id, $parameters, $returnid='')
	{
		switch($name)
		{
			case 'default':  // default user front end page
				$this->UserDisplay($id, $parameters, $returnid);
				break;
				
			case 'defaultadmin': // default admin page
				if($this->AllowAccess())
				{
					$this->AdminDisplayDefaultAdminPage($id, $parameters, $returnid);
				}
				break;
				
			case 'admin_categories_update':
				if($this->AllowAccess())
				{
					$this->AdminUpdateCategories($id, $parameters, $returnid);
				}
				break;
				
			case 'admin_add_event':
			case 'admin_edit_event':
				if($this->AllowAccess())
				{
					$this->AdminDisplayAddEvent($id, $parameters, $returnid);
				}
				break;
				
			case 'admin_manage_categories':
				if($this->AllowAccess())
				{
					$this->AdminDisplayCategories($id, $parameters, $returnid);
				}
				break;
				
			case 'admin_event_update':
				if($this->AllowAccess())
				{
					$this->AdminUpdateEvent($id, $parameters, $returnid);
					$url = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='', $params=array('result'=>'1'), '', true);
					$url = str_replace('&amp;', '&', $url);
					
					redirect($url);
				}
				break;
				
			case 'admin_delete_event':
				if($this->AllowAccess())
				{
					$this->AdminDeleteEvent($id, $parameters, $returnid);
					$url = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='', $params=array('result'=>'1'), '', true);
					$url = str_replace('&amp;', '&', $url);
					
					redirect($url);
				}
				break;
				
				
			default:
				break;
		}
	}
	
	function AdminDisplayDefaultAdminPage($id, $parameters, $returnid)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories = $this->GetCategories();
		if(count($categories) == 0)
		{
			// Display category admin
			$this->AdminDisplayCategories($id, $parameters, $returnid);
		}
		else
		{
			$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
			//$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
			$manage_categories_link = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='Manage Categories', $params=array());
			
			echo <<<EOT
			<p>Manage Events | $add_event_link | $manage_categories_link</p>	
			<h4 class="admintitle">Manage Events</h4>
	
EOT;
			// display manage events page
			$this->AdminDisplayManageEvents($id, $parameters, $returnid);
		}		
	}
	
	function AdminDisplayAddEvent($id, $parameters, $returnid)
	{
			
		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories = $this->GetCategories();
		$event_id = get_parameter_value($parameters, 'event_id', -1);
		$event = $this->GetEvent($event_id);

		$button_text = 'Add';
		if($event_id > 0)
		{
			$button_text = 'Update';
		}


		//$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
		$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
		$manage_categories_link = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='Manage Categories', $params=array());
			
		echo <<<EOT
		<p>$manage_event_link | Add Event | $manage_categories_link</p>	
		<h4 class="admintitle">Manage Events</h4>
	
EOT;

		echo $this->CreateFormStart($id, 'admin_event_update', $returnid, $method='post', $enctype='');
		echo $this->CreateInputHidden($id, 'event_id', $event_id);
		echo <<<EOT
	
	<table border=0 cellpadding=5 cellspacing=0>
	    <tr>
	        <td align="right">Date of Event:</td>
	        <td colspan=3>
EOT;

		$current_year = date('Y');
		$start = $current_year - 2;
		$end = $current_year + 10;
		$year_array = array();
		for($i = $start; $i < $end; $i++)
		{
			$year_array[$i] = $i;
		}
		$month_array = array();
		for($i = 0; $i < 12; $i++)
		{
			$month_name = strftime('%b', mktime(12,0,0,$i+1));
			$month_number = sprintf('%02d', $i+1);
			$month_array[$month_name] = $month_number;
		}
		$day_array = array();
		for($i=1; $i < 32; $i++)
		{
			$day = sprintf('%02d', $i);
			$day_array[$i] = $day;
		}
		$hour_array = array();
		for($i=0; $i < 24; $i++)
		{
			$hour = sprintf('%02d', $i);
			$hour_array[$hour] = $hour;
		}
		$minute_array = array();
		for($i=0; $i < 60; $i++)
		{
			$minute = sprintf('%02d', $i);
			$minute_array[$minute] = $minute;
		}
		if(isset($event['event_date']))
		{
			$event_date_minute = date('i', $event['event_date']);
			$event_date_hour = date('H', $event['event_date']);
			$event_date_day = date('d', $event['event_date']);
			$event_date_month = date('m', $event['event_date']);
			$event_date_year = date('Y', $event['event_date']);
		}
		else
		{ 
			$event_date_minute = 0; //date('i');
			$event_date_hour = 0; //date('H');
			$event_date_day = date('d');
			$event_date_month = date('n');
			$event_date_year = $current_year;
		}

		echo $this->CreateInputDropdown($id, 'event_date_day', $day_array, -1, $event_date_day);
		echo $this->CreateInputDropdown($id, 'event_date_month', $month_array, -1, $event_date_month);
		echo $this->CreateInputDropdown($id, 'event_date_year', $year_array, -1, $event_date_year);
		echo '&nbsp;at&nbsp;';
		echo $this->CreateInputDropdown($id, 'event_date_hour', $hour_array, -1, $event_date_hour);
		echo ':';
		echo $this->CreateInputDropdown($id, 'event_date_minute', $minute_array, -1, $event_date_minute);
	    echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	        <td align="right">Title:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'event_title', $event['event_title'], 50, 50);
	    echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	        <td align="right">Summary:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'event_summary', $event['event_summary'], 50, 100);
	    echo <<<EOT
			</td>
	    </tr>
		<tr>
	        <td align="right">Description:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateTextArea(true, $id, $event['event_details'], 'event_details', 'content', $id);
	    echo <<<EOT
			</td>
	    </tr>
	    <tr>
	        <td align="right">Categories:</td>
	        <td>
EOT;
		$num_cats = count($categories);
		$num_cols = 2;
		$rows_per_col = intval($num_cats / $num_cols);
		$count = 0;
		for($i = 0; $i < $num_cats; $i++,$count ++)
		{
			if($count >= $rows_per_col && $rows_per_col != 0)
			{
				$count = 0;
				echo "</td><td valign='top' style='padding-left: 40px;' >\n";
				$padding = 0;
			}
	
			if($i < $num_cats)
			{
				$category = $categories[$i];
				$cat_id = $category['category_id'];
				$cat_name = $category['category_name'];
				$checked = '';
				if(in_array($cat_id, $event['categories']))
				$checked = 'checked';
				echo "<div>";
				echo $this->CreateInputCheckbox($id, 'event_categories[]', $cat_id, $cat_id);
				echo $cat_name; 
				echo "</div>\n";
			}
		}

		echo <<<EOT
	        </td>
	    </tr>
	    <tr>
	    	<td></td>
	        <td align="left">
	            <input type="button" value="Cancel" onclick='javascript:window.history.go(-1)' />
EOT;

		echo $this->CreateInputSubmit($id, '', $button_text);
		echo <<<EOT
	        </td>
	    </tr>
	</table>
	
EOT;

		echo $this->CreateFormEnd();
	}
	
	function AdminDisplayCategories($id, $parameters, $returnid)
	{
		$add_event_link = $this->CreateLink($id, 'admin_add_event', $returnid, $contents='Add Event', $params=array());
		$manage_event_link = $this->CreateLink($id, 'defaultadmin', $returnid, $contents='Manage Events', $params=array());
		
		echo <<<EOT
		<p>$manage_event_link | $add_event_link | Manage Categories</p>
	    <h4>Manage Categories</h4>
	
EOT;

		$db = $this->cms->db; /* @var $db ADOConnection */
		$categories = $this->GetCategories();
		$num_cats = count($categories);
	
		echo $this->CreateFormStart($id, 'admin_categories_update', $returnid, $method='post', $enctype='');
	    echo <<<EOT
	
		<table border=0 cellspacing=0 cellpadding=3>
		<tr>
			<th>Name</th>
			<th>Order</th>
		</tr>

EOT;
		$categories[$num_cats]['category_id'] = -1;
		$categories[$num_cats]['category_name'] = '';
		$categories[$num_cats]['category_order'] = 50;
		$num_cats ++;
	
		$num_cols = 2;
		$rows_per_col = intval($num_cats / $num_cols);
	
		$count = 1;
		for($i = 0; $i < $num_cats; $i++,$count ++)
		{
			if($i < $num_cats)
			{
				$category = $categories[$i];
				$category_id = $category['category_id'];
				$category_name = (empty($category['category_name']) && $id > 0) ? '== NOT SET ==' : $category['category_name'];
				$category_order = $category['category_order'];
				
				echo '<tr><td>';
				echo $this->CreateInputHidden($id, 'category_ids[]', $category_id);
				echo $this->CreateInputText($id, 'category_names[]', $category_name);
				echo '</td><td>';
				echo $this->CreateInputText($id, 'category_orders[]', $category_order);
				echo "</td></tr>\n";

			}
		}
				
		// submit button
		echo "<tr><td valign='top' colspan='2' align='center'>";
		echo $this->CreateInputSubmit($id, '', 'Update Categories');
		echo '</td></tr></table>';
		echo $this->CreateFormEnd();
	}
	
	function AdminUpdateCategories($id, $parameters, $returnid)
	{
	    $db = $this->cms->db; /* @var $db ADOConnection */
	    $db->debug = true; /* @var $rs ADORecordset */

		$ids = $parameters['category_ids'];
		$names = $parameters['category_names'];
		$orders = $parameters['category_orders'];
	
		$num_records = count($ids);
		for($i = 0; $i < $num_records; $i++)
		{
			// don't trust user input, but do $name later as quote() will add '' to it.
			$category_id = intval($ids[$i]);
			$category_order = intval($orders[$i]);
			$category_name = $names[$i];
			if($category_id > -1)
			{
				if($category_name == '')
				{
					// delete this category - remove the links first though.
					$sql = 'DELETE FROM ' . $this->events_to_categories_table_name . ' WHERE category_id = ' . $category_id;
					$db->Execute($sql);
	
					$sql = 'DELETE FROM ' . $this->categories_table_name . ' WHERE category_id = ' . $category_id;
					$db->Execute($sql);
				}
				else
				{
					$category_name = $db->quote($names[$i], get_magic_quotes_runtime());
					$sql = 'UPDATE ' . $this->categories_table_name . " SET
							category_name = $category_name
								,category_order = $category_order
							WHERE category_id = $category_id";
					$db->Execute($sql);
				}
			}
			elseif($category_name != '')
			{
				$category_name = $db->quote($names[$i], get_magic_quotes_runtime());
				$new_id = $db->GenID($this->categories_table_name.'_seq');
	
				$sql = 'INSERT INTO ' . $this->categories_table_name . " (category_id, category_name, category_order)
						VALUES ($new_id, $category_name, $category_order)";
				$db->Execute($sql);
			}
		}		
		
		$url = $this->CreateLink($id, 'admin_manage_categories', $returnid, $contents='', $params=array('result'=>'1'), '', true);
		$url = str_replace('&amp;', '&', $url);
		redirect($url);
	}
	
	function AdminUpdateEvent($id, $parameters, $returnid)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$events_to_categories_table_name = cms_db_prefix().'module_events_to_categories';

	
		/* @var $rs ADORecordset */
		$user_id = $this->cms->variables['user_id'];
		$categories = get_parameter_value($parameters, 'event_categories');
		
		$event_id = get_parameter_value($parameters, 'event_id', -1);
		$event_title = $db->quote(get_parameter_value($parameters, 'event_title'), get_magic_quotes_runtime());
		$event_summary = $db->quote(get_parameter_value($parameters, 'event_summary'), get_magic_quotes_runtime());
		$event_details = $db->quote(get_parameter_value($parameters, 'event_details'), get_magic_quotes_runtime());	
		$event_date_minute = get_parameter_value($parameters, 'event_date_minute', date('i'));
		$event_date_hour = get_parameter_value($parameters, 'event_date_hour', date('H'));
		$event_date_day = get_parameter_value($parameters, 'event_date_day', date('d'));
		$event_date_month = get_parameter_value($parameters, 'event_date_month', date('m'));
		$event_date_year = get_parameter_value($parameters, 'event_date_year', date('Y'));
		
		$event_date = sprintf("'%04d-%02d-%02d %02d:%02d'", $event_date_year, $event_date_month, $event_date_day, 
								$event_date_hour, $event_date_minute);
		if($event_id > -1)
		{
			// update
			$sql = "UPDATE " . $this->events_table_name . " SET
						event_title = $event_title
						,event_summary = $event_summary
						,event_details = $event_details
						,event_date = $event_date
						,event_modified_date = NOW()
					WHERE event_id = $event_id";
			$db->Execute($sql);
		}
		else
		{
			$event_id = $db->GenID(cms_db_prefix()."module_events_seq");
	
			$sql = "INSERT INTO " . $this->events_table_name . " (
						event_id
						,event_title
						,event_summary
						,event_details
						,event_date
						,event_created_by
						,event_create_date
						,event_modified_date
					) VALUES (
					$event_id
					,$event_title
					,$event_summary
					,$event_details
					,$event_date
					,$user_id
					,NOW()
					,NOW()
					)";
			$db->Execute($sql);
		}
	
		// delete current events_to_categories records for this event
		$sql = "DELETE FROM " . $this->events_to_categories_table_name . " WHERE event_id = $event_id";
		$db->Execute($sql);
	
		// update events_to_categories
		if(count($categories) > 0)
		{
			foreach($categories as $category_id)
			{
				$category_id = intval($category_id);
				if($category_id > 0)
				{
					$sql = "INSERT INTO " . $this->events_to_categories_table_name . "
								(category_id, event_id)
							VALUES
								($category_id, $event_id)";
					$db->Execute($sql);
				}
			}
		}		
	
	}
	
	function AdminDeleteEvent($id, $parameters, $returnid)
	{
		$db = $this->cms->db; /* @var $db ADOConnection */
		$events_table_name = $this->events_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
	
		$event_id = get_parameter_value($parameters, 'event_id', -1);
	
		// delete current events_to_categories records for this event
		$sql = "DELETE FROM $events_to_categories_table_name WHERE event_id = $event_id";
		$db->Execute($sql);
	
		// delete this event
		$sql = "DELETE FROM $events_table_name WHERE event_id = $event_id";
		$db->Execute($sql);
	}
	
	function AdminDisplayManageEvents($id, $parameters, $returnid)
	{
		$keyword = get_parameter_value($parameters, 'keyword', '', 'Calendar-keyword');
		$not_approved_only = get_parameter_value($parameters, 'not_approved_only', 0, 'Calendar-not_approved_only');
	
		echo "<p>", $this->CreateFormStart($id, 'defaultadmin', $returnid, $method='get', $enctype='');
		echo <<<EOT
	<table border=0 cellpadding=0 cellspacing=0 style='margin-bottom: 10px'>
	    <tr>
	        <td align="right" style='padding-right: 5px;'>Filter By:</td>
	        <td colspan=3>
EOT;
		echo $this->CreateInputText($id, 'keyword', $keyword, 25);
		echo <<<EOT
			</td>
	    </tr>
	    <tr>
	    	<td style='padding-right: 5px;'></td>
	    	<td><input type="submit" value="Go"></td>
	    </tr>
	</table>
	
	
EOT;
		echo $this->CreateFormEnd();
	
	
		$db = $this->cms->db;
		$db->debug = false;
	
		$sql = "SELECT ". $this->events_to_categories_table_name .".category_id
					,". $this->categories_table_name . ".category_name
					,". $this->events_table_name . ".*
			FROM ". $this->events_table_name ."
			LEFT JOIN ". $this->events_to_categories_table_name . "
			   ON ". $this->events_table_name . ".event_id = ". $this->events_to_categories_table_name . ".event_id
			LEFT JOIN ". $this->categories_table_name . "
			   ON ". $this->events_to_categories_table_name . ".category_id = ". $this->categories_table_name . ".category_id ";
	
		$where = 'WHERE';
		if(!empty($keyword))
		{
			$sql .= "$where ". $this->events_table_name . ".event_title LIKE '%$keyword%'
						OR ". $this->events_table_name . ".event_details LIKE '%$keyword%'
						OR ". $this->events_table_name . ".event_summary LIKE '%$keyword%' ";
		}
		$order_by = get_parameter_value($parameters, 'order_by', '');
		if(empty($order_by))
		{
			$sql .= "ORDER BY ". $this->events_table_name . ".event_date DESC
						,". $this->events_table_name . ".event_title ";
		}
		else
		{
			$sql .= "ORDER BY ". $this->categories_table_name . ".$order_by";
		}
		$rs = $db->Execute($sql);
	
		if ($rs && $rs->RowCount() > 0)
		{
			$number_of_columns = get_parameter_value($parameters, 'columns', 2);
	
			$num_rows = $rs->RecordCount();
			$rows_per_column = intval($num_rows / $number_of_columns) + 0; /* 10 is a fudge factor to make it look better! */
	
			$row_count = 0;

			echo "<table cellspacing=0 class='admintable'>\n";
			echo "<tr><th>Title</th><th>Date</th><th>Summary</th><th></th><th></th></tr>\n";
		
			while( ($row = $rs->FetchRow()) )
			{
				$row_count++;
				$row_class = ($row_count % 2) ? 'row1' : 'row2';
	
				$event_id = $row['event_id'];
				$category_name = $row['category_name'];
				$event_title = $row['event_title'];
				
				$event_date = $row['event_date'];
				$event_date_time = strtotime($row['event_date']);
				if(strftime('%H%M', $event_date_time)== '0000')
					$event_date_string = strftime('%d/%b/%Y', $event_date_time);
				else
					$event_date_string = strftime('%d/%b/%Y %H:%M', $event_date_time);
				$event_summary = $row['event_summary'];
				$event_created_by = $row['event_created_by'];
				$create_date = $row['event_create_date'];
				$modified_date = $row['event_modified_date'];
	
				$edit_url = $this->CreateLink($id, 'admin_edit_event', $returnid, $contents='Manage Events', $params=array('event_id'=>$event_id), '', true);
				$delete_url = $this->CreateLink($id, 'admin_delete_event', $returnid, $contents='Manage Events', $params=array('event_id'=>$event_id), '', true);
				
	
				echo <<<EOT
					<tr class="$row_class">
						<td width='33%'><a href='$edit_url'>$event_title</a></td>
						<td width='33%'>$event_date_string</td>
						<td width='33%'>$event_summary </td>
						
EOT;
				// edit and delete icons - borrwed from content list for consistency
				echo "\t\t\t\t<td align='center'><a href='$edit_url'><img src='../images/cms/edit.gif' width='16' height='16' border='0' alt='" . lang('edit') . "' title='" . lang('edit') . "'></a></td>\n";
				echo "\t\t\t\t<td align='center'><a href='$delete_url' onclick=\"return confirm('" . lang('deleteconfirm') . "');\"><img src='../images/cms/delete.gif' width='16' height='16' border='0' alt='" . lang('delete') . "' title='" . lang('delete') . "'></a></td>\n";
				echo <<<EOT
					</tr>
	
EOT;
			}
	
			// close off final column
			echo "\t\t</ul>\n";
			echo "\t</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
			echo "<!-- End of Events Module -->\n";
			
		}		
	}
	
	function UserDisplay($id, $parameters, $returnid)
	{
		// handling of display of {cms_module module=Calender}
		
		$action = get_parameter_value($parameters, 'action', 'calendar');
		$category = get_parameter_value($parameters, 'category', '');
		$month = get_parameter_value($parameters, 'month', date('G'));
		$year = get_parameter_value($parameters, 'year', date('Y'));
		$limit = get_parameter_value($parameters, 'limit', -1);
		$summaries = get_parameter_value($parameters, 'summaries', true);
				
		// get the events
		$categories_table_name = $this->categories_table_name;
		$events_to_categories_table_name = $this->events_to_categories_table_name;
		$events_table_name = $this->events_table_name;
	
		$db = $this->cms->db;
		if($action == "list")
		{
			$sql = "SELECT $events_to_categories_table_name.category_id
						,$categories_table_name.category_name
						,$events_table_name.*
				FROM $events_table_name
				INNER JOIN $events_to_categories_table_name
				   ON $events_table_name.event_id = $events_to_categories_table_name.event_id
				INNER JOIN $categories_table_name
				   ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
			";
	
			$where = 'WHERE';
			if($month != -1)
			{
				
				$start = sprintf('%04d-%02d-01 00:00:00', $year, $month);
				$month++;
				if($month > 12)
				{
					$month = 1;
					$year++;
				}
				$lastday = mktime(0, 0, 0, $month, 0, $year);

				
				$end = sprintf('%04d-%02d-01 11:59:59', date('Y', $lastday), date('m', $lastday));
				$sql .= "$where ($events_table_name.event_date >= '$start'  AND $events_table_name.event_date <= '$end')";
				$where = 'AND';
			}
			if($category)
			{
				$cats = explode(',', $category);
				$sql .= $where . ' (';
				$count = 0;
				foreach($cats as $cat)
				{
					$cat = trim($cat);
					if($count != 0)
					{
						$sql .= ' OR ';
					}
					$count++;
					$sql .= "$categories_table_name.category_name LIKE '$cat' ";
				}
				$sql .=	') ';
			}
	
			$sql .= "ORDER BY $events_table_name.event_date DESC";
		}
		else
		{
			$base_sql = "SELECT $events_to_categories_table_name.category_id
						,$categories_table_name.category_name
						,$events_table_name.*
				FROM $events_table_name
				INNER JOIN $events_to_categories_table_name
				   ON $events_table_name.event_id = $events_to_categories_table_name.event_id
				INNER JOIN $categories_table_name
				   ON $events_to_categories_table_name.category_id = $categories_table_name.category_id
			";

		}

	}
	
};
?>