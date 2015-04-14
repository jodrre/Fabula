<?php

$db_host = '';
$db_db = '';
$db_user = '';
$db_pass = '';


/* 
 * Please do not make changes below this line
 * ==========================================
 */
$dbconn = mysqli_connect($db_host, $db_user, $db_pass, $db_db);

// These are for testing and should be commented out before putting in a prod environment
$user_login_status = 0;