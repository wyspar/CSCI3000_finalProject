<?php
/*
Name: Douglas Richardson
Date: 11/17/18
Desc: CSCI 3000 DA C0. Final PHP index file. Creates database and table
*/

//TODO: Session Code

$loggedin = true;

$serverName = "localhost";
$username = "root";
$password ="";
$dbname = "BuffaloBistroDB";
$connectionGood = false;
try{
	/* Creates the database only*/
	$conn = new PDO("mysql:host=$serverName",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE DATABASE $dbname";
	$conn->exec($sql);
}catch(PDOException $e){
	/* Ignore if it says it already exists since we are always calling the code */
	if (strpos($e, 'database exists')===false){
		echo "Connection failed: ".$e->getMessage();
	}
	
}
$conn = null;
try{
/* Create a second connection because this is adding into the database */
	$conn2 = new PDO("mysql:host=$serverName;dbname=$dbname",$username,$password);
	$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//First table, for customers
	$tableName = "customers";
	$sqlTable = "CREATE TABLE $tableName(
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		password VARCHAR(300) NOT NULL,
		admin BIT NOT NULL,
		email VARCHAR(60),
		reg_date TIMESTAMP
	)";
	$conn2->exec($sqlTable);
	//Second table, for drinks
	$tableName = "drinks";
	$sqlTable = "CREATE TABLE $tableName(
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		cost INT(15) NOT NULL,
		inventoryAmount INT(15) NOT NULL,
		reg_date TIMESTAMP
	)";
	$conn2->exec($sqlTable);

//	$sqlAddAnswerKey = "INSERT INTO $tableName(studentid,firstname,lastname,email,answer1,answer2,answer3,correctAmount)
//	VALUES('000000000','Instructor','Instructor','drrich7754@ung.edu','c','a','c','3')";
//	$conn2->exec($sqlAddAnswerKey);
	$connectionGood = true;
}catch(PDOException $e){
	/* Ignore if it says it already exists since we are always calling the code */
	if ((strpos($e, "Table 'customers' already exists")===false)){
		echo "Connection failed: ".$e->getMessage();
	}else{
		$connectionGood = true;
	}
}

//Close connection
$conn2 = null;

/*Put the file path here of where the html, css and js files are*/
/* Don't forget to add an extra \ to every \ */
// $pathFile = 'E:\\Homework\\Fall 2018\\3000\\homework8\\';
$pathFile = '';
if($connectionGood){
	include ($pathFile.'Richardson_finalProject.php');
	$css_File = file_get_contents($pathFile.'Richardson_finalProject.css');
	echo '<style type="text/css">' . $css_File . '</style>';
}
?>