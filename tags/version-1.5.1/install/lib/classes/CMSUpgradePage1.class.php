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
#$Id: CMSUpgradePage1.class.php 117 2008-11-01 19:06:56Z alby $

class CMSInstallerPage1 extends CMSInstallerPage
{
	/**
	 * Class constructor
	 * @var object $smarty
	 * @var array  $errors
	 * @var bool   $debug
	 */
	function CMSInstallerPage1(&$smarty, $errors, $debug)
	{
		$this->CMSInstallerPage(1, $smarty, $errors, $debug);
	}

	function assignVariables()
	{
		if(isset($_POST['recheck']))
		{
			$error = '';

			$test = testFileUploads('cksumdat');
			if(isset($test->error))
			{
				$error = $test->error;
			}
			elseif(count($test->files) > 1)
			{
				$error = lang('upload_file_multiple');
			}
			else
			{
				if(isset($test->files[0]['error_string']))
				{
					$error = $test->files[0]['error_string'];
				}
				else
				{
					$checksum_file = $test->files[0]['tmp_name'];
					if($this->debug) $handle = fopen($checksum_file, 'rb');
					else             $handle = @fopen($checksum_file, 'rb');
					if(! $handle)
					{
						$error = lang('upload_file_no_readable');
					}
				}
			}

			if(empty($error))
			{
				$results = array();
				while (!feof($handle))
				{
					$line = @fgets($handle, 4096);
					$line = trim($line); // clean

					if(empty($line)) continue; // skip empty line

					$pos = strpos($line, '#');
					if($pos) $line = substr($line, 0, $pos); // strip out comments

					list($md5sum, $file) = explode(' *./', $line, 2); // split it into fields
					$md5sum = trim($md5sum);
					$file = trim($file);
					$file = str_replace('/', DIRECTORY_SEPARATOR, $file); // avoid windows suck

					$test_file = CMS_BASE . DIRECTORY_SEPARATOR . $file;
					$test = testFileChecksum(0, '', $test_file, $md5sum, '', lang('format_datetime'), $this->debug);
					if($test->res == 'green') continue; // ok, skip

					$results[] = $test;
				}
				@fclose($handle);

				if(count($results) > 0)
				{
					$this->smarty->assign_by_ref('results', $results);
					$this->smarty->assign('error_fragment', 'Checksum_report_errors');
				}
				$this->smarty->assign('try_test', true);
			}
			else
			{
				$this->errors[] = $error;
			}

		}

		$this->smarty->assign_by_ref('errors', $this->errors);
	}
}
# vim:ts=4 sw=4 noet
?>
