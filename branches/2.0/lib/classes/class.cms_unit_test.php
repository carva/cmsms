<?php 
class CmsUnitTest {
  var $run = 0;
  var $failed = 0;
  /**
   * Class name to be tested
   * @returns Class name to be tested
   */
  public function getClassName() {
    return "";
  }
  /**
   * Number of tests to run
   * @returns int number of tests
   */
  public function getNumberOfTests() {
    return 0;
  }
  public function getTestDirectory() {
    return "";
  }
  /**
   * Should we die on fail?
   * @returns bool true to die on first failure
   */
  public function DieOnFail() {
    return false;
  }

  /**
   * specify your tests here
   */ 
  public function run_tests() {

  }

  final protected function results() {
    if($this->getNumberOfTests() == $this->run) {
      echo "Ran all tests ";
      if($this->failed == 0) {
	echo "and everything seems ok\n";
      }
    } else {
      echo "I was supposed to run ".$this->getNumberOfTests()." tests, but ran $this->run \n";
      echo "ran $this->run tests from which $this->failed failed\n";
    }
  }
  
  final protected function test_eq($value, $expected, $explanation = "") {
    $this->run++;
    if($value == $expected) {
      $this->doresult(true, $explanation);
    } else {
      $this->doresult(false, $explanation);
    }
  }
  
  final protected function test_isset($value, $explanation ="") {
    $this->run++;
    if(isset($value)) {
      $this->doresult(true, $explanation);
    } else {
      $this->doresult(false, $explanation);
    }
  }

  public function doresult($result, $explanation) {
    $flag = 0;
    if($result == true) {
      echo "test $this->run ok";
    } else {
      $this->failed++;
      echo "test $this->run failed";
      if($this->DieOnFail() == true) {
	$flag = 1;
      }
    }
    if($explanation!="")
      echo " - $explanation";
    echo "\n";
    if($flag==1)
      die("### dying as requested on failure ### \n");
  }

  final protected function listFiles($dir) {
    $files = array();
    $dir = opendir($dir);
    while (($file = readdir($dir)) !== false) {
      if ($file != "." && $file != ".." && !preg_match('/~/',$file)) {
	$files[] = $file;
      }
    }
    sort($files);
    closedir($dir);
    return $files;
  }

  final protected function rundir($dir) {
    $files = listFiles($dir);
    foreach ($files as $file) {
      if ( is_dir( "$dir/$file" ) )
	{
	  rundir("$dir/$file");
	}
      else
	{
	  include("$dir/$file");
	}
    }
  }


}
?>