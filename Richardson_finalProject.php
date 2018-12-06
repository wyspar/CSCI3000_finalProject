<!DOCTYPE html>
<!--
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Home page html
-->

<?php
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
	$loggedin = false;
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

