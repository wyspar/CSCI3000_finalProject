<?php
/*
Name: Douglas Richardson
Date: 11/29/18
Desc: CSCI 3000 DA C0. Final PHP shoppingCart file.
*/

//TODO:Session code here
session_start();

if (!isset($_SESSION['username'])) {
$_SESSION['msg'] = "You must log in first";
/* header('location: index.php'); */
}else{
$loggedin = true;
}
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
/* header("location: index.php"); */

}

$serverName = "localhost";
$username = "root";
$password ="";
$dbname = "BuffaloBistroDB";
$connectionGood = true;



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
try{
  	$conn2 = new PDO("mysql:host=$serverName;dbname=$dbname",$username,$password);
	$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$tableName = "drinks";
	
	$drinkName="drink1";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=1");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink1Cost = $row['cost'];
	}
	if($drink1Amount > 0){
		$drink1Cost = (double)($drink1Cost) * $drink1Amount;
	}else{
		$drink1Cost = 0;
	}
	
	$drinkName="drink2";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=2");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink2Cost = $row['cost'];
	}
	if($drink2Amount > 0){
		$drink2Cost = (double)($drink2Cost) * $drink2Amount;
	}else{
		$drink2Cost = 0;
	}
	
	$drinkName="drink3";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=3");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink3Cost = $row['cost'];
	}
	if($drink3Amount > 0){
		$drink3Cost = (double)($drink3Cost) * $drink3Amount;
	}else{
		$drink3Cost = 0;
	}
	
	$drinkName="drink4";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=4");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink4Cost = $row['cost'];
	}
	if($drink4Amount > 0){
		$drink4Cost = (double)($drink4Cost) * $drink4Amount;
	}else{
		$drink4Cost = 0;
	}
	
	$drinkName="drink5";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=5");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink5Cost = $row['cost'];
	}
	if($drink5Amount > 0){
		$drink5Cost = (double)($drink5Cost) * $drink5Amount;
	}else{
		$drink5Cost = 0;
	}
	
	$drinkName="drink6";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=6");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink6Cost = $row['cost'];
	}
	if($drink6Amount > 0){
		$drink6Cost = (double)($drink6Cost) * $drink6Amount;
	}else{
		$drink6Cost = 0;
	}
	
	$drinkName="drink7";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=7");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink7Cost = $row['cost'];
	}
	if($drink7Amount > 0){
		$drink7Cost = (double)($drink7Cost) * $drink7Amount;
	}else{
		$drink7Cost = 0;
	}
	
	$drinkName="drink8";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=8");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink8Cost = $row['cost'];
	}
	if($drink8Amount > 0){
		$drink8Cost = (double)($drink8Cost) * $drink8Amount;
	}else{
		$drink8Cost = 0;
	}
	
	$drinkName="drink9";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=9");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink9Cost = $row['cost'];
	}
	if($drink9Amount > 0){
		$drink9Cost = (double)($drink9Cost) * $drink9Amount;
	}else{
		$drink9Cost = 0;
	}
	
	$drinkName="drink10";
	$sql = $conn2->prepare("SELECT cost FROM $tableName WHERE id=10");
	$sql->execute();
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink10Cost = $row['cost'];
	}
	if($drink10Amount > 0){
		$drink10Cost = (double)($drink10Cost) * $drink10Amount;
	}else{
		$drink10Cost = 0;
	}
	
	$drinksTotalCost = $drink1Cost+$drink2Cost+$drink3Cost+$drink4Cost+$drink5Cost+$drink6Cost+$drink7Cost+$drink8Cost+$drink9Cost+$drink10Cost;
	
	
	
	}catch(PDOException $e){
	/* Ignore if it says it already exists since we are always calling the code */
	if (strpos($e, 'database exists')===false){
		echo "Connection failed: ".$e->getMessage();
	}	
}
$conn2 = null;
	/*Put the file path here of where the html, css and js files are*/
	/* Don't forget to add an extra \ to every \ */
	// $pathFile = 'E:\\Homework\\Fall 2018\\3000\\homework8\\';
	$pathFile = '';
	if($connectionGood){

		include ($pathFile.'Richardson_finalProject_shoppingCart.php');
//		$css_File = file_get_contents($pathFile.'Richardson_finalProject.css');
//		echo '<style type="text/css">' . $css_File . '</style>';
	}
?>