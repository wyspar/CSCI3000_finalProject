<?php
/*
Name: Douglas Richardson
Date: 11/29/18
Desc: CSCI 3000 DA C0. Final PHP shoppingCart file.
*/

//TODO:Session code here
session_start();
$loggedin = true;

/* Shopping cart session code */
$drink1Amount = 0;
$drink2Amount = 0;
$drink3Amount = 0;
$drink4Amount = 0;
$drink5Amount = 0;
$drink6Amount = 0;
$drink7Amount = 0;
$drink8Amount = 0;
$drink9Amount = 0;
$drink10Amount = 0;
if(!empty($_SESSION["drink1"])){
	$drink1Amount = $_SESSION["drink1"];
/* 	echo $drink1Amount; */
}
if(!empty($_SESSION["drink2"])){
	$drink2Amount = $_SESSION["drink2"];
}
if(!empty($_SESSION["drink3"])){
	$drink3Amount = $_SESSION["drink3"];
}
if(!empty($_SESSION["drink4"])){
	$drink4Amount = $_SESSION["drink4"];
}
if(!empty($_SESSION["drink5"])){
	$drink5Amount = $_SESSION["drink5"];
}
if(!empty($_SESSION["drink6"])){
	$drink6Amount = $_SESSION["drink6"];
}
if(!empty($_SESSION["drink7"])){
	$drink7Amount = $_SESSION["drink7"];
}
if(!empty($_SESSION["drink8"])){
	$drink8Amount = $_SESSION["drink8"];
}
if(!empty($_SESSION["drink9"])){
	$drink9Amount = $_SESSION["drink9"];
}
if(!empty($_SESSION["drink10"])){
	$drink10Amount = $_SESSION["drink10"];
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