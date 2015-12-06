<?php

// This file will hold functions and contructors for handling departments
require_once '../inc/conf.php';
function listDepartments(){
	$SQL = "SELECT * FROM departments;";
	$query = mysqli_query($mysqli,$SQL);
	$outp = mysqli_fetch_array($query);
	return $outp;
}