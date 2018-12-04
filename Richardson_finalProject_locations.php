<!DOCTYPE html>
<!--
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Locations page html
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
			<input <?php if(@!$loggedin){echo"style='display:none;'";}?> class="headButtons shoppingCart" type="submit" value=""></input>
		</form>
		<form action="signup.php" method="post">
			<input <?php if(@$loggedin){echo"style='display:none;'";}?> class="headButtons" type="submit" value="Sign Up">
		</form>
		<form action="login.php" method="post">
			<input <?php if(@$loggedin){echo"style='display:none;'";}?> class="headButtons" type="submit" value="Login">
		</form>
	</div>
</div>

<div class="row">

<div class="col-2 menu">
  <ul>
    <li><button class="menuButton" onClick="homePage()">Home</button></li>
    <li><button class="menuButton" onClick="drinksPage()">Drinks</button></li>
    <li><button class="menuButton menuButtonSelected" onClick="locationPage()">Locations</button></li>
<!--Add more buttons later for inventory-->
  </ul>
</div>

<div class="col-10 center">
	<div class="main_innerDiv">
		<h1>Locations</h1>
		<p>We are located in Dahlonega, GA</p>
	</div>
</div>


<div class="col-12 footer">
</div>

</div> <!-- End of row -->
<script src="Richardson_finalProject.js"></script>
</body>
</html>

