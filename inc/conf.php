<?php

define( "DB_DSN", "mysql:host=localhost;dbname=fabula" );
define( "DB_USERNAME", "jodrre" );
define( "DB_PASSWORD", "" );

define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );

date_default_timezone_set( "America/Los_Angeles" );  // http://www.php.net/manual/en/timezones.php

// These are for testing and should be commented out before putting in a prod environment
$user_login_status = 0;

/* 
 * Please do not make changes below this line
 * ==========================================
 */
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
