<?php

<<<<<<< HEAD
define( "DB_DSN", "mysql:host=localhost;dbname=fabula" );
define( "DB_USERNAME", "jodrre" );
define( "DB_PASSWORD", "" );

define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );

date_default_timezone_set( "America/Los_Angeles" );  // http://www.php.net/manual/en/timezones.php

// These are for testing and should be commented out before putting in a prod environment
$user_login_status = 0;
=======
// Enables error reporting for DEV
error_reporting(-1);

$db_host = 'localhost';
$db_db = 'fabula_dev';
$db_user = 'fabula';
$db_pass = '';

$site_name = "Fabula";
$site_logo = "images/main/Fabula_logo.png";
>>>>>>> e7b74e771c76ba480367ec6384f0fbc3a180668b

/* 
 * Please do not make changes below this line
 * ==========================================
 */
<<<<<<< HEAD
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_db);

ini_set( "display_errors", true );
// Change to the correct path if not installed in root of web
define( "APP_PATH", $_SERVER['DOCUMENT_ROOT']);
define( "CLASS_PATH", "../classes" );
define( "TEMPLATE_PATH", "../templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
// require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
=======
   $dbconn = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
   $dbconn_sel = mysqli_select_db($dbconn, $db_db);



// ==========================================
// ==========================================


// These are for testing and should be commented out before putting in a prod environment 
// (or, you know, removed. don't be lazy, Carl.)

// Check to see if the user is logged in. In prod this should be handled by a session-checking script.
//$user_login_status = 0;

// Once I've got a database I'll pull the below info from there
$user_fullname = "John Smith";
$user_authlevel = 4;
/* Similar to how vCallboard does it, the following view access levels will be supported for now:
 *  0 = No access (public, should only show login form when this occurs)
 * 1 = View (cast/crew, can only edit their own information)
 * 2 = Contribute (directors and department heads. Can add calls and notes. Also can get reports)
 * 3 = Manage (can manage all aspects of a show, usually just stage management)
 * 4 = Admin (can manage all shows. usually the producer level)
 * This is a very rough implementation. More thought is required. Let's think this over on Evernote.
 */
>>>>>>> e7b74e771c76ba480367ec6384f0fbc3a180668b
