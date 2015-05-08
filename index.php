<!DOCTYPE html>
<!--
I'll want to make sure that on EVERY PAGE it checks for a valid session.
If there isn't a valid session (cookie or otherwise) then redirect back here.
HOWEVER - If this is the page that they enter on, I want to make sure that it doesn't infinitely loop.
Joomla has a nifty way to do that. Take a look at how they do it.
-->
<?php
require "inc/conf.php";
include "inc/frontpage.php";

if(isset($_COOKIE['ID_your_site'])) {
    $user_login_status = 1;
}
else $user_login_status = 0;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $site_name ?> - Home</title>
    </head>
    <body>
        <?php
        echo '<img src="'.$site_logo.'"><br />';
        If ($user_login_status == 0) {
            echo "Please log in to continue.<p />";
            // Can this be done with DIV code?
        echo $siteform_login;
        }

if ($user_login_status == 1) {
    echo "Hello, ".$user_fullname."!";
}
        ?>
    </body>
</html>
