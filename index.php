<?php 
$GLOBALS['execution_time'] = microtime(true); 

//////////////////////////////////////
// Declaring needed constants
// $DS: DIRICTORY SEPARATOT, generates the appropriate DS for each OS
// $ROOT will be used for our inclusion
// $SITE_PATH is the path related to the root of our website
/////////////////////////////////////

error_reporting(E_ALL); ini_set('display_errors', '1');
// phpinfo();

define("DS", DIRECTORY_SEPARATOR);
define('ROOT', __DIR__.'/');

/////////////////////////////////////////////////////////////////////////////////////////////////
// Autoload composer optianal autoloader, if it exists
// file_exists(ROOT.'vendor/autoloader.php') ? require_once 'vendor'.DS.'autoloader.php' : null;
/////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////
// Load Applicatin Classes
/////////////////////////////////////

// template 
//require_once ROOT.DS."templates".DS."temp_slider.php";

// Controllers 
require_once ROOT.DS."controllers".DS."head_index.php";

// Navigation 
require_once ROOT.DS."includes".DS."nav.php";


/////////////////////////////////////
// views Start Here
/////////////////////////////////////

// Main Parallax Slider 
// require_once ROOT.DS."views".DS."slider_main.php";

// Ticker 
require_once ROOT.DS."includes".DS."ticker.php";

// // News Flash 2
// require_once ROOT.DS."includes".DS."newsflash.php";

// Main Content
require_once ROOT.DS."views".DS."home_content.php";

////////////////////////////
// Includes 
////////////////////////////

// Footer 
require_once ROOT.DS."includes".DS."footer.php";

// Inclusive Files
require_once ROOT.DS."includes".DS."modals.php"; 

// Javascript Files 
require_once ROOT.DS."includes".DS."js.php";
?>

