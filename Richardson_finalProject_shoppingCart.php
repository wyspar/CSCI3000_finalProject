<!DOCTYPE html>
<!--
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Shopping Cart page html
-->
<?php


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
			<input class="headButtons shoppingCart menuButtonSelected" type="submit" value=""></input>
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
		<h1>Cart</h1>
		<div class="Drink" <?php if(!$drink1Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">The Fizz Bizz:</h3>
			<span class="Drink">You have: </span>
			<span id="drink1Amount" class="drinkAmount"><?php echo $drink1Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink1Cost; ?></span>
		</div>
		<div <?php if(!$drink1Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink2Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Is Pepsi Okay?:</h3>
			<span class="Drink">You have: </span>
			<span id="drink2Amount" class="drinkAmount"><?php echo $drink2Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink2Cost; ?></span>
		</div>
		<div <?php if(!$drink2Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink3Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Slurp:</h3>
			<span class="Drink">You have: </span>
			<span id="drink3Amount" class="drinkAmount"><?php echo $drink3Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink3Cost; ?></span>
		</div>
		<div <?php if(!$drink3Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink4Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Glurp:</h3>
			<span class="Drink">You have: </span>
			<span id="drink4Amount" class="drinkAmount"><?php echo $drink4Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink4Cost; ?></span>
		</div>
		<div <?php if(!$drink4Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink5Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Butter:</h3>
			<span class="Drink">You have: </span>
			<span id="drink5Amount" class="drinkAmount"><?php echo $drink5Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink5Cost; ?></span>
			
		</div>
		<div <?php if(!$drink5Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink6Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">I can't believe it's not Butter!:</h3>
			<span class="Drink">You have: </span>
			<span id="drink6Amount" class="drinkAmount"><?php echo $drink6Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink6Cost; ?></span>
		</div>
		<div <?php if(!$drink6Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink7Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Bees:</h3>
			<span class="Drink">You have: </span>
			<span id="drink7Amount" class="drinkAmount"><?php echo $drink7Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink7Cost; ?></span>
		</div>
		<div <?php if(!$drink7Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink8Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Blue Milk:</h3>
			<span class="Drink">You have: </span>
			<span id="drink8Amount" class="drinkAmount"><?php echo $drink8Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink8Cost; ?></span>
		</div>
		<div <?php if(!$drink8Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink" <?php if(!$drink9Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Lava:</h3>
			<span class="Drink">You have: </span>
			<span id="drink9Amount" class="drinkAmount"><?php echo $drink9Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink9Cost; ?></span>
		</div>
		<div <?php if(!$drink9Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<div class="Drink"<?php if(!$drink10Amount>0){echo "style='display:none;'";}?>>
			<h3 class="Drink">Diablo:</h3>
			<span class="Drink">You have: </span>
			<span id="drink10Amount" class="drinkAmount"><?php echo $drink10Amount?></span>
			<span style="color:blue;">Cost: $<?php echo $drink10Cost; ?></span>
		</div>
		<div <?php if(!$drink10Amount>0){echo "style='display:none;'";}?>><br><br><br></div>
		<p>Total Cost: <?php echo "<span style='color:red;'>$".$drinksTotalCost."</span>";?></p>
		<form action="checkout.php" method="post">
			<input class="headButtons" type="submit" value="Check Out">
		</form>
	</div>
</div>


<div class="col-12 footer">
</div>

<script src="Richardson_finalProject.js"></script>
</body>
</html>

