<?php

// Valid PHP Version?
$minPHPVersion = '7.3';
if (version_compare(PHP_VERSION, $minPHPVersion, '<'))
{
	die("Your PHP version must be {$minPHPVersion} or higher to run CodeIgniter. Current version: " . PHP_VERSION);
}
unset($minPHPVersion);

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
//echo "OK1 FCPATH: ".FCPATH."*".str_repeat('&nbsp;', 10)."Path to first controller. The dir this index.php file is in.<br><br>";
/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);
// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
require realpath(FCPATH . 'app/Config/Paths.php') ?: FCPATH . 'app/Config/Paths.php';
//echo ("OK2a ".realpath(FCPATH . '../app/Config/Paths.php')."*".str_repeat('&nbsp;', 10)."realpath() to Congfig/Paths.php<br><br>");
//echo ("OK2b ".FCPATH . '../app/Config/Paths.php')."*".str_repeat('&nbsp;', 10)."not realpath() to Congfig/Paths.php<br><br>";
//echo ("OK2c ".realpath(FCPATH . '../app/Config/Paths.php') ?: FCPATH . '../app/Config/Paths.php'); echo "*".str_repeat('&nbsp;', 10)."Elvis way to Config/Paths.php<br><br>";
// ^^^ Change this if you move your application folder
$paths = new Config\Paths();
// Location of the framework bootstrap file.
$bootstrap = rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
//echo ("OK3 ".$bootstrap."*".str_repeat('&nbsp;', 10)."\$bootstrap<br><br>");
//echo ("OK4 ".$paths->systemDirectory."*".str_repeat('&nbsp;', 10)."\$paths->systemDirectory<br><br>");
//echo ("OK5 ". realpath($bootstrap)."*".str_repeat('&nbsp;', 10)."realpath() to bootstrap file<br><br>");
$app       = require realpath($bootstrap) ?: $bootstrap;
//echo ("OK6 <br>");
/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */
//$bootstrap->run();
$app->run();
