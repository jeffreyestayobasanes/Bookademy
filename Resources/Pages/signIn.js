

var error = document.getElementById("hide").innerHTML  ;
var warning = document.getElementById("warning")  ;
function checkError() {
    if (error == 0) {
        warning.style.display = "none"
        warning.innerHTML = "NULL"  ;
    }
    if (error == 1) {
        warning.style.display = "block"  ;
        warning.innerHTML = "All input fields must be filled in."  ;
    }
    if (error == 2) {
        warning.style.display = "block"  ;
        warning.innerHTML = "No accounts are found in the database."  ;
    }
    if (error == 3) {
        warning.style.display = "block"  ;
        warning.innerHTML = "The account you are accessing does not exist."  ;
    }
    if (error == 4) {
        warning.style.display = "block"  ;
        warning.innerHTML = "The password you entered is not correct."  ;
    }
}

checkError()  ;

function passwordToggle() {
    if (document.getElementById("passwordField").getAttribute("type")==="password"){
        document.getElementById("passwordField").setAttribute("type", "text")  ;
        document.getElementById("passwordToggle").style.backgroundImage = "url('../Images/Icons/eyeLightVisible.png')"  ;
    }else{
        document.getElementById("passwordField").setAttribute("type", "password")  ;
        document.getElementById("passwordToggle").style.backgroundImage = "url('../Images/Icons/eyeLightInVisible.png')"  ;
    }
}

var theme = document.getElementById('mode').value  ;
var def = document.getElementById('background').style.backgroundColor  ;
if (theme=="Light"){
    document.getElementById('background').style.backgroundImage = def  ;
    document.getElementById('background').style.backgroundColor = "white";
    document.getElementById('background').style.color = "#373737";
    document.getElementById('nav').style.backgroundColor = "white";
}
if (theme=="Dark"){
    document.getElementById('background').style.backgroundImage = "none"  ;
    document.getElementById('background').style.backgroundColor = "black";
    document.getElementById('background').style.color = "white";
    document.getElementById('nav').style.backgroundColor = "black";
}
if (theme=="Time"){
    var today = new Date();
    var time = today.getHours();
    if(time>=6 || time<=17){
        document.getElementById('background').style.backgroundImage = def  ;
        document.getElementById('background').style.backgroundColor = "white";
        document.getElementById('background').style.color = "#373737";
        document.getElementById('nav').style.backgroundColor = "white";
    }
    if(time<=5 || time>=18){
        document.getElementById('background').style.backgroundImage = "none"  ;
        document.getElementById('background').style.backgroundColor = "black";
        document.getElementById('background').style.color = "white";
        document.getElementById('nav').style.backgroundColor = "black";
    }
}
