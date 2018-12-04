/*
Name: Douglas Richardson
Date: 11/1/18
Desc: CSCI 3000 DA C0. Final Project. Home page js
*/
function locationPage(){
	window.location.href = 'Richardson_finalProject_locations.php';
}
function homePage(){
document.body.innerHTML = "";
	window.location.href = './Richardson_finalProject.php';
}
function drinksPage(){
	window.location.href = 'Richardson_finalProject_drinks.php';
}
function decDrink1(){
	var drinkText = document.getElementById("drink1Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink1Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink1(){
var drinkText = document.getElementById("drink1Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink1Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink2(){
	var drinkText = document.getElementById("drink2Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink2Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink2(){
var drinkText = document.getElementById("drink2Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink2Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink3(){
	var drinkText = document.getElementById("drink3Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink3Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink3(){
var drinkText = document.getElementById("drink3Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink3Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink4(){
	var drinkText = document.getElementById("drink4Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink4Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink4(){
var drinkText = document.getElementById("drink4Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink4Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink5(){
	var drinkText = document.getElementById("drink5Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink5Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink5(){
var drinkText = document.getElementById("drink5Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink5Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink6(){
	var drinkText = document.getElementById("drink6Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink6Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink6(){
var drinkText = document.getElementById("drink6Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink6Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink7(){
	var drinkText = document.getElementById("drink7Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink7Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink7(){
var drinkText = document.getElementById("drink7Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink7Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink8(){
	var drinkText = document.getElementById("drink8Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink8Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink8(){
var drinkText = document.getElementById("drink8Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink8Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink9(){
	var drinkText = document.getElementById("drink9Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink9Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink9(){
var drinkText = document.getElementById("drink9Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink9Amount")
	phpdrinkAmount.value = String(drinkAmount);
}
function decDrink10(){
	var drinkText = document.getElementById("drink10Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	if (drinkAmount > 0){
		drinkAmount = drinkAmount - 1;
	}
	drinkText.innerHTML = drinkAmount
	var phpdrinkAmount = document.getElementById("phpDrink10Amount")
	phpdrinkAmount.value = String(drinkAmount)
}
function incDrink10(){
var drinkText = document.getElementById("drink10Amount");
	var drinkAmount = Number(drinkText.innerHTML);
	drinkAmount = drinkAmount + 1;
	drinkText.innerHTML = drinkAmount;
	var phpdrinkAmount = document.getElementById("phpDrink10Amount")
	phpdrinkAmount.value = String(drinkAmount);
}