<!DOCTYPE html>
<!--
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Drinks page html
-->
<?php
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
	$tableName = "customers";
	$connectionGood = true;

	try{
		$conn2 = new PDO("mysql:host=$serverName;dbname=$dbname",$username,$password);
		$conn2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$tableName = "drinks";
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=1");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink1Cost = $row['cost'];
			$drink1InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=2");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink2Cost = $row['cost'];
			$drink2InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=3");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink3Cost = $row['cost'];
			$drink3InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=4");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink4Cost = $row['cost'];
			$drink4InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=5");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink5Cost = $row['cost'];
			$drink5InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=6");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink6Cost = $row['cost'];
			$drink6InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=7");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink7Cost = $row['cost'];
			$drink7InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=8");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink8Cost = $row['cost'];
			$drink8InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=9");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink9Cost = $row['cost'];
			$drink9InventoryAmount = $row['inventoryAmount'];
		}
		$sql = $conn2->prepare("SELECT name,inventoryAmount,cost FROM $tableName WHERE id=10");
		$sql->execute();
		while ($row = $sql->fetch(PDO::FETCH_ASSOC))
		{
			$drink10Cost = $row['cost'];
			$drink10InventoryAmount = $row['inventoryAmount'];
		}
		
		
		
	}catch(PDOException $e){
		/* Ignore if it says it already exists since we are always calling the code */
		if (strpos($e, 'database exists')===false){
			echo "Connection failed: ".$e->getMessage();
		}
	}
	$conn2 = null;
?>

<html>
<head>
	<title>Bizzy Beverages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-control" content="no-cache">
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

<div class="row">

<div class="col-2 menu">
  <ul>
    <li><button class="menuButton" onClick="homePage()">Home</button></li>
    <li><button class="menuButton menuButtonSelected" onClick="drinksPage()">Drinks</button></li>
    <li><button class="menuButton" onClick="locationPage()">Locations</button></li>
<!--Add more buttons later for inventory-->
  </ul>
</div>

<div class="col-10 center" style="overflow-y:auto;">
	<div class="main_innerDiv">
		
		<h1>Drinks</h1>
		<span><p <?php if(@!$drink1Amount or @!$drink2Amount or @!$drink3Amount or @!$drink4Amount or @!$drink5Amount or @!$drink6Amount or @!$drink7Amount or @!$drink8Amount or @!$drink9Amount or @!$drink10Amount){echo"style='display:none;'";}?>class="addedDrinks">Added Drinks</p></span>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">The Fizz Bizz:</h3>
			<span class="Drink">Our original Best Seller, The Fizz that will give you the Bizz</span>
			<button onClick="decDrink1()">-</button>
			<span id="drink1Amount" class="drinkAmount">0</span>
			<button onClick="incDrink1()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink1Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink1InventoryAmount." Left"; ?></span>
			<?php if(@$drink1Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink1Amount." with a total of ".@$localTotalDrink1." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Is Pepsi Okay?:</h3>
			<span class="Drink">Because who needs coke when we have this</span>
			<button onClick="decDrink2()">-</button>
			<span id="drink2Amount" class="drinkAmount">0</span>
			<button onClick="incDrink2()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink2Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink2InventoryAmount." Left"; ?></span>
			<?php if(@$drink2Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink2Amount." with a total of ".@$localTotalDrink2." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Slurp:</h3>
			<span class="Drink">The drink that you cant help but slurp</span>
			<button onClick="decDrink3()">-</button>
			<span id="drink3Amount" class="drinkAmount">0</span>
			<button onClick="incDrink3()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink3Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink3InventoryAmount." Left"; ?></span>
			<?php if(@$drink3Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink3Amount." with a total of ".@$localTotalDrink3." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Glurp:</h3>
			<span class="Drink">The drink you cant help but Glurp</span>
			<button onClick="decDrink4()">-</button>
			<span id="drink4Amount" class="drinkAmount">0</span>
			<button onClick="incDrink4()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink4Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink4InventoryAmount." Left"; ?></span>
			<?php if(@$drink4Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink4Amount." with a total of ".@$localTotalDrink4." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Butter:</h3>
			<span class="Drink">Our hit featured on Paula Dean's show! taste the glory of carbonated butter
			</span>
			<button onClick="decDrink5()">-</button>
			<span id="drink5Amount" class="drinkAmount">0</span>
			<button onClick="incDrink5()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink5Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink5InventoryAmount." Left"; ?></span>
			<?php if(@$drink5Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink5Amount." with a total of ".@$localTotalDrink5." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">I can't believe it's not Butter!:</h3>
			<span class="Drink">Our low fat version of a fan favorite! tastes almost like the real thing!
			</span>
			<button onClick="decDrink6()">-</button>
			<span id="drink6Amount" class="drinkAmount">0</span>
			<button onClick="incDrink6()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".$drink6Cost.""; ?></span>
			
			<span style="color:red;"><?php echo @$drink6InventoryAmount." Left"; ?></span>
			<?php if(@$drink6Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink6Amount." with a total of ".@$localTotalDrink6." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Bees:</h3>
			<span class="Drink">Shake well before opening!</span>
			<button onClick="decDrink7()">-</button>
			<span id="drink7Amount" class="drinkAmount">0</span>
			<button onClick="incDrink7()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink7Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink7InventoryAmount." Left"; ?></span>
			<?php if(@$drink7Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink7Amount." with a total of ".@$localTotalDrink7." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Blue Milk:</h3>
			<span class="Drink">Straight from the Banthas of Tatooine, Everyone's favorite blue drink
			</span>
			<button onClick="decDrink8()">-</button>
			<span id="drink8Amount" class="drinkAmount">0</span>
			<button onClick="incDrink8()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink8Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink8InventoryAmount." Left"; ?></span>
			<?php if(@$drink8Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink8Amount." with a total of ".@$localTotalDrink8." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Lava:</h3>
			<span class="Drink">Literally just molten lava, you people will buy anything
			</span>
			<button onClick="decDrink9()">-</button>
			<span id="drink9Amount" class="drinkAmount">0</span>
			<button onClick="incDrink9()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink9Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink9InventoryAmount." Left"; ?></span>
			<?php if(@$drink9Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink9Amount." with a total of ".@$localTotalDrink9." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Diablo:</h3>
			<span class="Drink">Satan in a can</span>
			<button onClick="decDrink10()">-</button>
			<span id="drink10Amount" class="drinkAmount">0</span>
			<button onClick="incDrink10()">+</button>
			<span style="color:blue;"><?php echo "Cost: $".@$drink10Cost.""; ?></span>
			<span style="color:red;"><?php echo @$drink10InventoryAmount." Left"; ?></span>
			<?php if(@$drink10Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink10Amount." with a total of ".@$localTotalDrink10." drinks</p>";}?>
		</div>
		<br><br><br>
		<form action="./drinks.php" method="post">
			<input type="text" id="phpDrink1Amount" name="drink1Amount" value="0"hidden></input>
			<input type="text" id="phpDrink2Amount" name="drink2Amount" value="0"hidden></input>
			<input type="text" id="phpDrink3Amount" name="drink3Amount" value="0"hidden></input>
			<input type="text" id="phpDrink4Amount" name="drink4Amount" value="0"hidden></input>
			<input type="text" id="phpDrink5Amount" name="drink5Amount" value="0"hidden></input>
			<input type="text" id="phpDrink6Amount" name="drink6Amount" value="0"hidden></input>
			<input type="text" id="phpDrink7Amount" name="drink7Amount" value="0"hidden></input>
			<input type="text" id="phpDrink8Amount" name="drink8Amount" value="0"hidden></input>
			<input type="text" id="phpDrink9Amount" name="drink9Amount" value="0"hidden></input>
			<input type="text" id="phpDrink10Amount" name="drink10Amount" value="0"hidden></input>
			<span class="Drink"><input class="drinkButton" type="submit" value="Add to Cart"></span>
		</form>
		<!--TODO: Add drink table from database-->
	</div>
</div>


<div class="col-12 footer">
</div>

</div> <!-- End of row -->
<script src="Richardson_finalProject.js"></script>
</body>
</html>

