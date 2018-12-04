<?php
/*
Name: Douglas Richardson
Date: 11/29/18
Desc: CSCI 3000 DA C0. Final PHP drinks file.
*/

//This adds stuff into the cart
session_start();
$drinks_array = array();

/* Gets the drink amounts*/
$drink1Amount = $_POST["drink1Amount"];
$drink2Amount = $_POST["drink2Amount"];
$drink3Amount = $_POST["drink3Amount"];
$drink4Amount = $_POST["drink4Amount"];
$drink5Amount = $_POST["drink5Amount"];
$drink6Amount = $_POST["drink6Amount"];
$drink7Amount = $_POST["drink7Amount"];
$drink8Amount = $_POST["drink8Amount"];
$drink9Amount = $_POST["drink9Amount"];
$drink10Amount = $_POST["drink10Amount"];
$total_drink1Amount = 0;
$total_drink2Amount = 0;
$total_drink3Amount = 0;
$total_drink4Amount = 0;
$total_drink5Amount = 0;
$total_drink6Amount = 0;
$total_drink7Amount = 0;
$total_drink8Amount = 0;
$total_drink9Amount = 0;
$total_drink10Amount = 0;
if(!empty($_SESSION["drink1"])){
	$total_drink1Amount =  $total_drink1Amount + (int)($_SESSION["drink1"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink2"])){
	$total_drink2Amount =  $total_drink2Amount + (int)($_SESSION["drink2"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink3"])){
	$total_drink3Amount =  $total_drink3Amount + (int)($_SESSION["drink3"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink4"])){
	$total_drink4Amount =  $total_drink4Amount + (int)($_SESSION["drink4"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink5"])){
	$total_drink5Amount =  $total_drink5Amount + (int)($_SESSION["drink5"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink6"])){
	$total_drink6Amount =  $total_drink6Amount + (int)($_SESSION["drink6"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink7"])){
	$total_drink7Amount =  $total_drink7Amount + (int)($_SESSION["drink7"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink8"])){
	$total_drink8Amount =  $total_drink8Amount + (int)($_SESSION["drink8"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink9"])){
	$total_drink9Amount =  $total_drink9Amount + (int)($_SESSION["drink9"]);
/* 	echo (int)$_SESSION["drink1"]; */
}
if(!empty($_SESSION["drink10"])){
	$total_drink10Amount =  $total_drink10Amount + (int)($_SESSION["drink10"]);
/* 	echo (int)$_SESSION["drink1"]; */
}

/* Adds them into the array */
$drinks_array["drink1"] = $total_drink1Amount + $drink1Amount;
$drinks_array["drink2"] = $total_drink2Amount + $drink2Amount;
$drinks_array["drink3"] = $total_drink3Amount + $drink3Amount;
$drinks_array["drink4"] = $total_drink4Amount + $drink4Amount;
$drinks_array["drink5"] = $total_drink5Amount + $drink5Amount;
$drinks_array["drink6"] = $total_drink6Amount + $drink6Amount;
$drinks_array["drink7"] = $total_drink7Amount + $drink7Amount;
$drinks_array["drink8"] = $total_drink8Amount + $drink8Amount;
$drinks_array["drink9"] = $total_drink9Amount + $drink9Amount;
$drinks_array["drink10"] = $total_drink10Amount + $drink10Amount;
/* Shows the total on the client */
$localTotalDrink1 = $total_drink1Amount + $drink1Amount;
$localTotalDrink2 = $total_drink2Amount + $drink2Amount;
$localTotalDrink3 = $total_drink3Amount + $drink3Amount;
$localTotalDrink4 = $total_drink4Amount + $drink4Amount;
$localTotalDrink5 = $total_drink5Amount + $drink5Amount;
$localTotalDrink6 = $total_drink6Amount + $drink6Amount;
$localTotalDrink7 = $total_drink7Amount + $drink7Amount;
$localTotalDrink8 = $total_drink8Amount + $drink8Amount;
$localTotalDrink9 = $total_drink9Amount + $drink9Amount;
$localTotalDrink10 = $total_drink10Amount + $drink10Amount;
/* echo print_r($drinks_array); */

/* Add everything into session */
$_SESSION["drink1"] = $drinks_array["drink1"];
$_SESSION["drink2"] = $drinks_array["drink2"];
$_SESSION["drink3"] = $drinks_array["drink3"];
$_SESSION["drink4"] = $drinks_array["drink4"];
$_SESSION["drink5"] = $drinks_array["drink5"];
$_SESSION["drink6"] = $drinks_array["drink6"];
$_SESSION["drink7"] = $drinks_array["drink7"];
$_SESSION["drink8"] = $drinks_array["drink8"];
$_SESSION["drink9"] = $drinks_array["drink9"];
$_SESSION["drink10"] = $drinks_array["drink10"];
//$drinks_array["drink1"]
$serverName = "localhost";
$username = "root";
$password ="";
$dbname = "BuffaloBistroDB";
$tableName = "customers";
$connectionGood = true;

$conn2 = null;

/*Put the file path here of where the html, css and js files are*/
/* Don't forget to add an extra \ to every \ */
// $pathFile = 'E:\\Homework\\Fall 2018\\3000\\homework8\\';
$pathFile = '';
if($connectionGood){
	include ($pathFile.'Richardson_finalProject_drinks.php');
	$css_File = file_get_contents($pathFile.'Richardson_finalProject.css');
	echo '<style type="text/css">' . $css_File . '</style>';
	$css_File = file_get_contents($pathFile.'Richardson_finalProject.js');
	echo '<script type="text/javascript">' . $css_File . '</script>';
}
?>