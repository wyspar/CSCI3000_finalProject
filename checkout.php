<?php
/*
Name: Douglas Richardson
Date: 12/3/18
Desc: CSCI 3000 DA C0. Final PHP checkout file.
*/

//TODO:Session code here
session_start();
$loggedin = true;

/* Shopping cart session code */
$drink1Amount = 0;
if($_SESSION["drink1"]){
	$drink1Amount = $_SESSION["drink1"];
/* 	echo $drink1Amount; */
}
$serverName = "localhost";
$username = "root";
$password ="";
$dbname = "BuffaloBistroDB";
$tableName = "cart";
$connectionGood = true;
if($loggedin){

	/*Put the file path here of where the html, css and js files are*/
	/* Don't forget to add an extra \ to every \ */
	// $pathFile = 'E:\\Homework\\Fall 2018\\3000\\homework8\\';
	$pathFile = '';
	if($connectionGood){

		include ($pathFile.'Richardson_finalProject_shoppingCart.html');
//		$css_File = file_get_contents($pathFile.'Richardson_finalProject.css');
//		echo '<style type="text/css">' . $css_File . '</style>';
	}
}
?>