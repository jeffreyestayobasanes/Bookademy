var position = 0  ;
function expand() {
    if (position==0){
        document.getElementById("menuBtn").style.opacity = "0.3"  ;
        document.getElementById("main").classList.remove("unexpand")  ;
        document.getElementById("main").classList.add("expand")  ;
        document.getElementById("nav").classList.remove("unshow")  ;
        document.getElementById("nav").classList.add("show")  ;
        position = 1  ;
    }else {
        document.getElementById("menuBtn").style.opacity = "1.0"  ;
        document.getElementById("main").classList.remove("expand")  ;
        document.getElementById("main").classList.add("unexpand")  ;
        document.getElementById("nav").classList.remove("show")  ;
        document.getElementById("nav").classList.add("unshow")  ;
        position = 0  ;
    }
}

var anonymous = 0  ;
var user = document.getElementById("username").value  ;
var email = document.getElementById("email").value  ;
function lock() {
    if (anonymous==0) {
        document.getElementById("username").value = "Anonymous"  ;
        document.getElementById("email").value = "anonymous@bookademy.email"  ;
        document.getElementById("lock").style.backgroundImage = "url('../Images/Icons/lock.png')"  ;
        anonymous = 1  ;
    }else {
        document.getElementById("username").value = user  ;
        document.getElementById("email").value = email  ;
        document.getElementById("lock").style.backgroundImage = "url('../Images/Icons/unlock.png')"  ;
        anonymous = 0  ;
    }
}