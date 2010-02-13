<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2008 by Ted Kulp (ted@cmsmadesimple.org)
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
#$Id: class.cms_module_base.php 5348 2008-12-14 18:32:56Z wishy $

/**
 * Base class for modules.  This base class was renamed in 2.0
 * to allow for module compatibility with modules written for 
 * 1.x.
 *
 * @package cmsms
 * @author Ted Kulp
 **/
class CmsModuleBase extends CmsObject
{
	public $id = '';
	public $return_id = '';
	public $includes = array();
	public $params = array();
	public $restrict_unknown_params = false;
	public $filter_id_list = array();
	
	function __construct()
	{
		CmsProfiler::get_instance()->mark('loading: ' . get_class($this) . " module");
		parent::__construct();
	}
	
	public function __get($key)
	{
		//If there is a key, then they want an explicit module
		if (isset($this->includes[$key]))
		{
			$class = $this->includes[$key];
			$module = CmsModuleLoader::get_module_class($class);
			if ($module)
			{
				$this->$key = $module;
				return $module;
			}
		}
		else if (in_array($key, $this->includes))
		{
			$class = 'CmsModule'.$key.'Extension';
			$obj = new $class($this);
			if ($obj)
			{
				$this->$key = $obj;
				return $obj;
			}
		}
	}
	
	/**
	 * Returns a list of filter ids so passed filter constants can 
	 * be checked and are valid. Results are cached in the class.
	 *
	 * @return array A hash of array constant ids and their string names
	 * @author Ted Kulp
	 */
	function filter_id_list()
	{
		if (count($this->filter_id_list) > 0)
			return $this->filter_id_list;
		
		$ret = array();
		
		foreach (filter_list() as $key => $value)
		{
			$ret[filter_id($value)] = $value;
		}
		
		$this->filter_id_list = $ret;
		
		return $ret;
	}
	
	/**
	 * Setup method for modules to create parameters, set
	 * variables, etc.  Most modules will override this.
	 *
	 * @return void
	 * @author Ted Kulp
	 */
	public function setup()
	{
	}
	
	/**
	 * Sets the id and optionally the return id.  Generally
	 * called before do action to internally set the variables
	 * so they can be passed off to module API sub modules.
	 *
	 * @param string $id 
	 * @param string $return_id 
	 * @return void
	 * @author Ted Kulp
	 */
	public function set_id($id, $return_id = '')
	{
		$this->id = $id;
		$this->return_id = $return_id;
	}
	
	/**
	 * This is the main method for running actions in your module.
	 * While this can be overridden for specific functionality, it's
	 * default implementation will run action.action_name.php files
	 * that are included in the module class's scope (giving access
	 * to $this, etc). Some modules need more control than this and
	 * therefore override do_action to dispatch all actions.
	 *
	 * @param string $action_name The name of the action to run
	 * @param string $params A hash of the parameters being passed
	 * @return string The contents of the action's output
	 * @author Ted Kulp
	 */
	public function do_action($action_name, $params)
	{
		$this->smarty->assign_by_ref('mod', $this);
		
		if ($action_name != '')
		{
			$filename = cms_join_path(ROOT_DIR, 'modules', get_class($this), 'action' . $action_name . '.php');
			if (@is_file($filename))
			{
				return $this->include_file_in_scope($filename);
			}
		}
		
		return '';
	}
	
	/**
	 * Method to dispatch do_action. This allows for various setup
	 * before do_action is called.  This is generally not overridden.
	 *
	 * @param string $action_name The name of the action to run
	 * @param string $params A has of the parameters being passed
	 * @return string The contents of the action's output
	 * @author Ted Kulp
	 */
	public function run_action($action_name, $params)
	{
		return $this->do_action($action_name, $params);
	}
	
	/**
	 * Default callback function for registered module plugins.
	 * This can't be overridden.  If different functionality is needed,
	 * pass a different callback to register_module_plugin.
	 *
	 * @param string $params The parameters passed from the smarty function plugin
	 * @param string $smarty A reference to the smarty singleton
	 * @return string The contents of the plugins's output
	 */
	final public function function_plugin($params, &$smarty)
	{
		$params['module'] = get_class($this);
		return CmsModuleOperations::cms_module_plugin($params, $smarty);
	}
	
	/**
	 * Register a plugin to smarty with the
	 * name of the module. This method should be called
	 * from the setup method or constructor.
	 *
	 * @param string $name The name of the smarty function to 
	 *                     register. If and empty string is passed, 
	 *                     the name of the module is used.
	 * @param string $callback The callback that should be called.
	 *                         It must be in the same class.
	 * @return void
	 */
	public function register_module_plugin($name = '', $callback = 'function_plugin')
	{
		global $gCms;
		
		if ($name == '')
			$name = get_class($this);

		$smarty = cms_smarty();
		$smarty->register_function($name, array($this, $callback));
	}
	
	/**
	 * Includes another php file in the scope of the module.  It allows $this,
	 * $db, $config and $smarty variables to be used from the file.  Output from
	 * the file inclusion is buffered and returned as a string.
	 *
	 * @param string $filename The name of the file to include
	 * @return string The buffered output of the file inclusion
	 * @author Ted Kulp
	 */
	public function include_file_in_scope($filename)
	{
		@ob_start();
		{
			global $gCms;
			$db = cms_db();
			$config = cms_config();
			$smarty = cms_smarty();

			include($filename);
		}
		$_contents = @ob_get_contents();
		@ob_end_clean();
		return $_contents;
	}
	
	/**
	 * Register a route to use for pretty url parsing
	 *
	 * @param string Route to register
	 * @param array Defaults for parameters that might not be included in the url
	 */
	public function register_route($route_regex, $defaults = array())
	{
		$gCms = cmsms();
		$route = new CmsRoute();
		$route->module = get_name($this);
		$route->defaults = $defaults;
		$route->regex = $route_regex;
		$routes =& $gCms->variables['routes'];
		$routes[] = $route;
	}
	
	/**
	 * If this is called in the contructor or setup methods of the module, then
	 * only parameters that are defined with create_parameter will be allowed to
	 * be passed to the system.
	 *
	 * @param boolean $flag Restrict or not
	 * @return void
	 */
	public function restrict_unknown_params($flag = true)
	{
		$this->restrict_unknown_params = $flag;
	}
	
	/**
	 * Create a parameter for this module. This can be used in conjunction with restrict_unknown_params()
	 * in order to control all parameters coming into the module's actions. Also, a PHP filter type can be
	 * passed to automatically validate and/or sanitize the incoming value. Filter requires a constant, see
	 * here: http://www.php.net/manual/en/filter.constants.php.  These parameters will also be sent to 
	 * different admin interfaces and automated help in order to automatically determine parameter 
	 * definitions.
	 *
	 * @param string $param The name of the parameter to create.
	 * @param string $default_value The value to fill in if the parameter isn't provided.
	 * @param string $help_string The string to show if this parameter is displayed in a help screen or context.
	 * @param integer $filter The filter to validate or sanitize against.
	 * @param string $optional Is that parameter optional or required?
	 * @return void
	 */
	public function create_parameter($param, $default_value = '', $help_string = '', $filter = null, $optional = true)
	{
		$ary = array(
			'name' => $param,
			'default' => $default_value,
			'help' => $help_string,
			'optional' => $optional
		);
		
		if ($filter != null && in_array($filter, array_keys($this->filter_id_list())))
		{
			$ary['filter'] = $filter;
		}
		
		array_push($this->params, $ary);
	}

}

# vim:ts=4 sw=4 noet
?>