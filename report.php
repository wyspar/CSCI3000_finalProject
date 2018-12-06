<?php
/*
Name: Douglas Richardson
Date: 12/3/18
Desc: CSCI 3000 DA C0. Final PHP checkout file.
*/

@session_start();
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
	$loggedin = false;
  }
  
$serverName = "localhost";
$username = "root";
$password ="";
$dbname = "BuffaloBistroDB";
$connectionGood = false;
$drink1Amount = 0;
try{
  	$conn2 = new PDO("mysql:host=$serverName;dbname=$dbname",$username,$password);
	$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$tableName = "drinks";
	
	$drinkName="drink1";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=1");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink1Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink1Amount = $drink1Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink2";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=2");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink2Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink2Amount = $drink2Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink3";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=3");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink3Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink3Amount = $drink3Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink4";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=4");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink4Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink4Amount = $drink4Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink5";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=5");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink5Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink5Amount = $drink5Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink6";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=6");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink6Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink6Amount = $drink6Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink7";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=7");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink7Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink7Amount = $drink7Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink8";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=8");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink8Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink8Amount = $drink8Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink9";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=9");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink9Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink9Amount = $drink9Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;
	
	$drinkName="drink10";
	$sql = $conn2->prepare("SELECT name,inventoryAmount FROM $tableName WHERE id=10");
	$sql->execute();
	/* This gets the correct answers */
	while ($row = $sql->fetch(PDO::FETCH_ASSOC))
	{
		$drink10Amount = $row['inventoryAmount'];
	}
	if(!empty($_SESSION[$drinkName])){
		$drink10Amount = $drink10Amount - (int)($_SESSION[$drinkName]);
	}
	$_SESSION[$drinkName] = 0;

	
	
	
	}catch(PDOException $e){
	/* Ignore if it says it already exists since we are always calling the code */
	if (strpos($e, 'database exists')===false){
		echo "Connection failed: ".$e->getMessage();
	}	
}
$conn2 = null;
try{
/* Create a second connection because this is adding into the database */
	$conn2 = new PDO("mysql:host=$serverName;dbname=$dbname",$username,$password);
	$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$tableName = "drinks";
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink1Amount' WHERE id = 1";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink2Amount' WHERE id = 2";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink3Amount' WHERE id = 3";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink4Amount' WHERE id = 4";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink5Amount' WHERE id = 5";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink6Amount' WHERE id = 6";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink7Amount' WHERE id = 7";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink8Amount' WHERE id = 8";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink9Amount' WHERE id = 9";
	$conn2->exec($sqlAddAnswerKey);
	$sqlAddAnswerKey = "UPDATE $tableName SET inventoryAmount ='$drink10Amount' WHERE id = 10";
	$conn2->exec($sqlAddAnswerKey);
}catch(PDOException $e){
	/* Ignore if it says it already exists since we are always calling the code */
	if (strpos($e, 'database exists')===false){
		echo "Connection failed: ".$e->getMessage();
	}
}	
?>

<html>
<head>
	<title>Bizzy Beverages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link id="pagestyle" rel="stylesheet" type="text/css" href="Richardson_finalProject.css">
</head>
<body>

<div class="header">
	<h1 id="title">Buffalo Bistro</h1>
	<div class="headerButtons">
		<h3 <?php if(@!$loggedin){echo"style='display:none;'";}?> style="color: #b30000;"><u <?php if(@!$loggedin){echo"style='display:none;'";}?>>Welcome <strong><?php echo @$_SESSION['username']; ?></strong>!</u></h3>
		<form action="shoppingCart.php" method="post">
			<input class="headButtons shoppingCart" type="submit" value=""></input>
		</form>
		<form action="register.php" method="post">
			<input <?php if(@$loggedin){echo"style='display:none;'";}?>class="headButtons" type="submit" value="Sign Up">
		</form>
		<form action="login.php" method="post">
			<input <?php if(@$loggedin){echo"style='display:none;'";}?>class="headButtons" type="submit" value="Login">
		</form>
		<form action="index.php?logout='1'" method="post">
			<input <?php if(@!$loggedin){echo"style='display:none;'";}?>class="headButtons" type="submit" value="Logout">
		</form>
	</div>
</div>


<div class="col-2 menu">
  <ul>
    <li><button class="menuButton" onClick="homePage()">Home</button></li>
    <li><button class="menuButton" onClick="drinksPage()">Drinks</button></li>
    <li><button class="menuButton" onClick="locationPage()">Locations</button></li>
<!--Add more buttons later for inventory-->
  </ul>
</div>

<div class="col-10 center" style="overflow-y:auto;">
	<div class="main_innerDiv">
		<h1>Inventory Report</h1>
		<div class="Drink">
			<h3 class="Drink">The Fizz Bizz:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink1Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Is Pepsi Okay?:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink2Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Slurp:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink3Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Glurp:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink4Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Butter:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink5Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">I can't believe it's not Butter!:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink6Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Bees:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink7Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Blue Milk:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink8Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Lava:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink9Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Diablo:</h3>
			</span>
			<span>There is a total of  </span>
			<?php echo "<span style='color:red;'>".@$drink10Amount."</span>";?>
			<span>left.</span>
		</div>
		<br><br><br>
		
		
		
	</div>
</div>


<div class="col-12 footer">
</div>

<script src="Richardson_finalProject.js"></script>
</body>
</html>