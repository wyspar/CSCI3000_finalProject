<!DOCTYPE html>
<!--
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Drinks page html
-->

<?php

$loggedin = true;
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
		<form action="shoppingCart.php" method="post">
			<input <?php if(@!$loggedin){echo"style='display:none;'";}?>class="headButtons shoppingCart" type="submit" value=""></input>
		</form>
		<form action="signup.php" method="post">
			<input class="headButtons" type="submit" value="Sign Up">
		</form>
		<form action="login.php" method="post">
			<input class="headButtons" type="submit" value="Login">
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
			<h3 class="Drink">Drink 1:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink1()">-</button>
			<span id="drink1Amount" class="drinkAmount">0</span>
			<button onClick="incDrink1()">+</button>
			<?php if(@$drink1Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink1Amount." with a total of ".@$localTotalDrink1." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 2:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink2()">-</button>
			<span id="drink2Amount" class="drinkAmount">0</span>
			<button onClick="incDrink2()">+</button>
			<?php if(@$drink2Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink2Amount." with a total of ".@$localTotalDrink2." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 3:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink3()">-</button>
			<span id="drink3Amount" class="drinkAmount">0</span>
			<button onClick="incDrink3()">+</button>
			<?php if(@$drink3Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink3Amount." with a total of ".@$localTotalDrink3." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 4:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink4()">-</button>
			<span id="drink4Amount" class="drinkAmount">0</span>
			<button onClick="incDrink4()">+</button>
			<?php if(@$drink4Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink4Amount." with a total of ".@$localTotalDrink4." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 5:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink5()">-</button>
			<span id="drink5Amount" class="drinkAmount">0</span>
			<button onClick="incDrink5()">+</button>
			<?php if(@$drink5Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink5Amount." with a total of ".@$localTotalDrink5." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 6:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink6()">-</button>
			<span id="drink6Amount" class="drinkAmount">0</span>
			<button onClick="incDrink6()">+</button>
			<?php if(@$drink6Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink6Amount." with a total of ".@$localTotalDrink6." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 7:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink7()">-</button>
			<span id="drink7Amount" class="drinkAmount">0</span>
			<button onClick="incDrink7()">+</button>
			<?php if(@$drink7Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink7Amount." with a total of ".@$localTotalDrink7." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 8:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink8()">-</button>
			<span id="drink8Amount" class="drinkAmount">0</span>
			<button onClick="incDrink8()">+</button>
			<?php if(@$drink8Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink8Amount." with a total of ".@$localTotalDrink8." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 9:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink9()">-</button>
			<span id="drink9Amount" class="drinkAmount">0</span>
			<button onClick="incDrink9()">+</button>
			<?php if(@$drink9Amount > 0){echo "<p class='addedDrinkssmall'> Added ".@$drink9Amount." with a total of ".@$localTotalDrink9." drinks</p>";}?>
		</div>
		<br><br><br>
		<div class="Drink">
			<h3 class="Drink">Drink 10:</h3>
			<span class="Drink">Its a drink</span>
			<button onClick="decDrink10()">-</button>
			<span id="drink10Amount" class="drinkAmount">0</span>
			<button onClick="incDrink10()">+</button>
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

