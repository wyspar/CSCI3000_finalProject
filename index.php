<?php
/*
Name: Douglas Richardson
Date: 11/17/18
Desc: CSCI 3000 DA C0. Final PHP index file. Creates database and table
*/

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
	$tableName = "users";
	$sqlTable = "CREATE TABLE $tableName(
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		username VARCHAR(30) NOT NULL,
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
		cost DECIMAL(5,2) NOT NULL,
		inventoryAmount INT(15) NOT NULL,
		reg_date TIMESTAMP
	)";
	$conn2->exec($sqlTable);

	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('The Fizz Bizz','5','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Is Pepsi Okay?','.99','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Slurp','3.99','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Glurp','2.99','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Butter','1.69','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('I cant believe its not butter!','1.69','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Bees','1.50','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Blue Milk','1.95','100')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Lava','7','50')";
	$conn2->exec($sqlAddAnswerKey);
	
	$sqlAddAnswerKey = "INSERT INTO $tableName(name,cost,inventoryAmount)
	VALUES('Diablo','15','25')";
	$conn2->exec($sqlAddAnswerKey);
	
		
	$connectionGood = true;
}catch(PDOException $e){
	/* Ignore if it says it already exists since we are always calling the code */
	if ((strpos($e, "Table 'users' already exists")===false)and(strpos($e, "Table 'drinks' already exists")===false)){
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