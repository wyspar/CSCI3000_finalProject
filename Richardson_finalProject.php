<!DOCTYPE html>
<!--
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Home page html
-->

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
		<form action="shoppingCart.php" method="post">
			<input <?php if(@!$loggedin){echo"style='display:none;'";}?>class="headButtons shoppingCart" type="submit" value=""></input>
		</form>
		<form action="signup.php" method="post">
			<input class="headButtons" type="submit" value="Sign Up">
		</form>
		<form action="login.php" method="post">
			<input class="headButtons" type="submit" value="Login">
		</form>
		<!-- <button class="headButtons">Login</button>
		<button class="headButtons">Sign Up</button> -->
	</div>
</div>



<div class="col-2 menu">
  <ul>
    <li><button class="menuButton menuButtonSelected" onClick="homePage()">Home</button></li>
    <li><button class="menuButton" onClick="drinksPage()">Drinks</button></li>
    <li><button class="menuButton" onClick="locationPage()">Locations</button></li>
<!--Add more buttons later for inventory-->
  </ul>
</div>

<div class="col-10 center">
	<div class="main_innerDiv">
		<h1>Home</h1>
		<p>We are a small start up company with 3 employees. We craft the most exclusive drinks that anyone may purchase from our site. Why do you want to buy a drink online? Well why not find out. You have nothing to lose.</p>
	</div>
</div>


<div class="col-12 footer">
</div>

<script src="Richardson_finalProject.js"></script>
</body>
</html>

