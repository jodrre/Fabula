<?php

/* 
 * Copyright (C) 2015 jodrre
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
error_reporting(E_ALL);
include 'inc/conf.php';
//Connects to your Database 
$dbconn or die(mysqli_errno());
$dbconn_sel or die(mysqli_errno());
//Checks if there is a login cookie
if(isset($_COOKIE['ID_your_site']))
    {
    //if there is, it logs you in and directes you to the members page
 	$username = $_COOKIE['ID_your_site']; 
 	$pass = $_COOKIE['Key_your_site'];
 	$check = mysql_query("SELECT * FROM users WHERE user_login_name = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )){
 		if ($pass != $info['user_login_pass']){}
 		else{
 			header("Location: login.php");
		}
 	}
 }

 //if the login form is submitted 
 if (isset($_POST['submit'])) {

	// makes sure they filled it in
 	if(!$_POST['txtUser']){
 		die('You did not fill in a username.');
 	}
 	if(!$_POST['txtPass']){
 		die('You did not fill in a password.');
 	}

 	// checks it against the database
// 	if (!get_magic_quotes_gpc()){
// 		$_POST['email'] = addslashes($_POST['email']);
// 	}

 	$check = mysqli_query($dbconn,"SELECT * FROM users WHERE user_login_name = '".$_POST['txtUser']."'")or die(mysql_error());

 //Gives error if user dosen't exist
 $check2 = mysqli_num_rows($check);
 if ($check2 == 0){
	die('That user does not exist in our database.<br /><br />If you think this is wrong <a href="login.php">try again</a>.');
}

while($info = mysqli_fetch_array( $check )){
	$_POST['txtPass'] = stripslashes($_POST['txtPass']);
 	$info['user_login_pass'] = stripslashes($info['user_login_pass']);
 	$_POST['txtPass'] = md5($_POST['txtPass']);

	//gives error if the password is wrong
 	if ($_POST['txtPass'] != $info['user_login_pass']){
 		die('Incorrect password, please <a href="login.php">try again</a>.');
 	}
	
	else{ // if login is ok then we add a cookie 
		$_POST['txtUser'] = stripslashes($_POST['txtUser']); 
		$hour = time() + 3600; 
		setcookie(ID_your_site, $_POST['txtUser'], $hour); 
		setcookie(Key_your_site, $_POST['txtPass'], $hour);	 
 
		//then redirect them to the members area 
		//header("Location: members.php"); 
                echo "POOP!!!!";
	}
}
}
else{
// if they are not logged in 
?>
<html>
    <head>
    </head>
    <title></title>
    <body>

 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

 <table border="0"> 

 <tr><td colspan=2><h1>Login</h1></td></tr> 

 <tr><td>Username:</td><td> 

 <input type="text" name="txtUser" maxlength="40"> 

 </td></tr> 

 <tr><td>Password:</td><td> 

 <input type="password" name="txtPass" maxlength="50"> 

 </td></tr> 

 <tr><td colspan="2" align="right"> 

 <input type="submit" name="submit" value="Login"> 

 </td></tr> 

 </table> 

 </form> 
    </body>

 <?php 
 }
 ?> 