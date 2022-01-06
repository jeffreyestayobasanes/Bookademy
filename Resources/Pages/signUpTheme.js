
var theme = document.getElementById('mode').value  ;
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

function light() {
    document.getElementById("light").style.opacity = "0.7"  ;
    document.getElementById("check1").style.display = "block"  ;
    document.getElementById("check2").style.display = "none"  ;
    document.getElementById("check3").style.display = "none"  ;
    document.getElementById("dark").style.opacity = "1.0"  ;
    document.getElementById("timed").style.opacity = "1.0"  ;
    document.getElementById("theme").value = "Light"  ;
    document.getElementById("body").style.backgroundColor = "white"  ;
    document.getElementById("text1").style.color = "#373737"  ;
    document.getElementById("text2").style.color = "#373737"  ;
    document.getElementById("text3").style.color = "#373737"  ;
    document.getElementById("text4").style.color = "#373737"  ;
    document.getElementById("light").style.backgroundColor = "lightgray"  ;
    document.getElementById("dark").style.backgroundColor = "lightgray"  ;
    document.getElementById("timed").style.backgroundColor = "lightgray"  ;

}
function dark() {
    document.getElementById("dark").style.opacity = "0.7"  ;
    document.getElementById("check1").style.display = "none"  ;
    document.getElementById("check2").style.display = "block"  ;
    document.getElementById("check3").style.display = "none"  ;
    document.getElementById("light").style.opacity = "1.0"  ;
    document.getElementById("timed").style.opacity = "1.0"  ;
    document.getElementById("theme").value = "Dark"  ;
    document.getElementById("body").style.backgroundColor = "black"  ;
    document.getElementById("text1").style.color = "white"  ;
    document.getElementById("text2").style.color = "white"  ;
    document.getElementById("text3").style.color = "white"  ;
    document.getElementById("text4").style.color = "white"  ;
    document.getElementById("light").style.backgroundColor = "gray"  ;
    document.getElementById("dark").style.backgroundColor = "gray"  ;
    document.getElementById("timed").style.backgroundColor = "gray"  ;

}
function timed() {
    document.getElementById("timed").style.opacity = "0.7"  ;
    document.getElementById("check1").style.display = "none"  ;
    document.getElementById("check2").style.display = "none"  ;
    document.getElementById("check3").style.display = "block"  ;
    document.getElementById("light").style.opacity = "1.0"  ;
    document.getElementById("dark").style.opacity = "1.0"  ;
    document.getElementById("theme").value = "Time"  ;
    document.getElementById("body").style.backgroundColor = "white"  ;
    document.getElementById("text1").style.color = "#373737"  ;
    document.getElementById("text2").style.color = "#373737"  ;
    document.getElementById("text3").style.color = "#373737"  ;
    document.getElementById("text4").style.color = "#373737"  ;
    document.getElementById("light").style.backgroundColor = "lightgray"  ;
    document.getElementById("dark").style.backgroundColor = "lightgray"  ;
    document.getElementById("timed").style.backgroundColor = "lightgray"  ;

}
