<?php

// Enables error reporting for DEV
error_reporting(-1);

$db_host = 'localhost';
$db_db = 'fabula_dev';
$db_user = 'fabula';
$db_pass = '';

$site_name = "Fabula";
$site_logo = "images/main/Fabula_logo.png";

/* 
 * Please do not make changes below this line
 * ==========================================
 */
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