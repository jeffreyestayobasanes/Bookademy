
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
 

function male() {
    document.getElementById("male").style.opacity = "0.7"  ;
    document.getElementById("check1").style.display = "block"  ;
    document.getElementById("check2").style.display = "none"  ;
    document.getElementById("female").style.opacity = "1.0"  ;
    document.getElementById("sex").value = "Male"  ;
}
function female() {
    document.getElementById("female").style.opacity = "0.7"  ;
    document.getElementById("check1").style.display = "none"  ;
    document.getElementById("check2").style.display = "block"  ;
    document.getElementById("male").style.opacity = "1.0"  ;
    document.getElementById("sex").value = "Female"  ;
}
