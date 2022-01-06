
var theme = document.getElementById('mode').value  ;
var position = 0  ;
if (theme=="Light"){
    document.getElementById('background').style.backgroundColor = "white";
    document.getElementById('background').style.color = "#373737";
    document.getElementById('nav').style.backgroundColor = "white";
}
if (theme=="Dark"){
    document.getElementById('background').style.backgroundColor = "black";
    document.getElementById('background').style.color = "white";
    document.getElementById('nav').style.backgroundColor = "black";
}
if (theme=="Time"){
    var today = new Date();
    var time = today.getHours();
    if(time>=6 || time<=17){
        document.getElementById('background').style.backgroundColor = "white";
        document.getElementById('background').style.color = "#373737";
        document.getElementById('nav').style.backgroundColor = "white";
    }
    if(time<=5 || time>=18){
        document.getElementById('background').style.backgroundColor = "black";
        document.getElementById('background').style.color = "white";
        document.getElementById('nav').style.backgroundColor = "black";
    }
}

var horror = 0  ;
var romance = 0  ;
var comedy = 0  ;
var law = 0  ;
var fantasy = 0  ;
var legend = 0  ;
function horrorFunc() {
    if (horror==0){
        document.getElementById("check1").style.display = "block"  ;
        document.getElementById("horrorValue").value = "1"  ;
        horror = 1  ;
    }else {
        document.getElementById("check1").style.display = "none"  ;
        document.getElementById("horrorValue").value = "0"  ;
        horror = 0  ;
    }
}
function romanceFunc() {
    if (romance==0){
        document.getElementById("check2").style.display = "block"  ;
        document.getElementById("romanceValue").value = "1"  ;
        romance = 1  ;
    }else {
        document.getElementById("check2").style.display = "none"  ;
        document.getElementById("romanceValue").value = "0"  ;
        romance = 0  ;
    }
}
function comedyFunc() {
    if (comedy==0){
        document.getElementById("check3").style.display = "block"  ;
        document.getElementById("comedyValue").value = "1"  ;
        comedy = 1  ;
    }else {
        document.getElementById("check3").style.display = "none"  ;
        document.getElementById("comedyValue").value = "0"  ;
        comedy = 0  ;
    }
}
function lawFunc() {
    if (law==0){
        document.getElementById("check4").style.display = "block"  ;
        document.getElementById("lawValue").value = "1"  ;
        law = 1  ;
    }else {
        document.getElementById("check4").style.display = "none"  ;
        document.getElementById("lawValue").value = "0"  ;
        law = 0  ;
    }
}
function fantasyFunc() {
    if (fantasy==0){
        document.getElementById("check5").style.display = "block"  ;
        document.getElementById("fantasyValue").value = "1"  ;
        fantasy = 1  ;
    }else {
        document.getElementById("check5").style.display = "none"  ;
        document.getElementById("fantasyValue").value = "0"  ;
        fantasy = 0  ;
    }
}
function legendFunc() {
    if (legend==0){
        document.getElementById("check6").style.display = "block"  ;
        document.getElementById("legendValue").value = "1"  ;
        legend = 1  ;
    }else {
        document.getElementById("check6").style.display = "none"  ;
        document.getElementById("legendValue").value = "0"  ;
        legend = 0  ;
    }
}
function slide() {
    if (position==0) {
        document.getElementById("content").classList.remove("slideToLeft")  ;
        document.getElementById("content").classList.add("slideToRight")  ;
        document.getElementById("slideArrow").style.backgroundImage = "url('../Images/Icons/left.png')"  ;
        position = 1  ;
    }else {
        document.getElementById("content").classList.remove("slideToRight")  ;
        document.getElementById("content").classList.add("slideToLeft")  ;
        document.getElementById("slideArrow").style.backgroundImage = "url('../Images/Icons/right.png')"  ;
        position = 0  ;
    }
}
