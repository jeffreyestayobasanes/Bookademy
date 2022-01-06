var theme = document.getElementById('mode').value  ;
var i = 0  ;
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
 
function lazyLoadImages() {
    const targets = document.querySelectorAll("box");
    const lazyLoad = (target)=>{
        const io = new IntersectionObserver((entries,observer)=>{
            entries.forEach(entry=>{
                createShadow()  ;
                showArrowDown()  ;
                if(entry.isIntersecting){
                    entry.target.classList.add('animate')  ;
                }else{
                    entry.target.classList.remove('animate')  ;
                }
            })
        },{threshold:[0.7]});
        io.observe(target);
    }
    targets.forEach(lazyLoad);
    
}
      
function createShadow() {
    const targets = document.querySelectorAll(".jason");
    const shadow = (target)=>{
        const io = new IntersectionObserver((entries,observer)=>{
            entries.forEach(entry=>{
                if(entry.isIntersecting){
                    document.getElementById('nav').classList.remove('fadeInShadow')  ;
                    document.getElementById('nav').classList.add('fadeOutShadow')  ;
                }else{
                    document.getElementById('nav').classList.remove('fadeOutShadow')  ;
                    document.getElementById('nav').classList.add('fadeInShadow')  ;
                }
            })
        },{threshold:[.8]});
        io.observe(target);
    }
    targets.forEach(shadow);
    
}

function showArrowDown() {
    const targets = document.querySelectorAll(".jason");
    const shadow = (target)=>{
        const io = new IntersectionObserver((entries,observer)=>{
            entries.forEach(entry=>{
                document.getElementById('moreHint').src="../Images/Icons/down.png"  ;
                if(entry.isIntersecting){
                    document.getElementById('moreHint').classList.add('show')  ;
                }else{
                    document.getElementById('moreHint').classList.remove('show')  ;
                    showArrowUp()  ;
                }
            })
        },{threshold:[.8]});
        io.observe(target);
    }
    targets.forEach(shadow);
    
}

function showArrowUp() {
    const targets = document.querySelectorAll(".jeffrey");
    const shadow = (target)=>{
        const io = new IntersectionObserver((entries,observer)=>{
            entries.forEach(entry=>{
                document.getElementById('moreHint').src="../Images/Icons/up.png"  ;
                if(entry.isIntersecting){
                    document.getElementById('moreHint').classList.add('show')  ;
                }else{
                    document.getElementById('moreHint').classList.remove('show')  ;
                }
            })
        },{threshold:[.8]});
        io.observe(target);
    }
    targets.forEach(shadow);
    
}

var setting = 0  ;
function settings() {
    if (setting == 0) {
        document.getElementById('settingsBox').style.display = 'block'  ;
        setting = 1  ;
    }
    else {
        document.getElementById('settingsBox').style.display = 'none'  ;
        setting = 0  ;
    }
}

document.getElementById("slideArrow").src = "../Images/Icons/right.png"  ;
function slide() {
    if (i == 0){
        document.getElementById("devList").classList.add("slideToRight")  ;
        document.getElementById("devList").classList.remove("slideToLeft")  ;
        document.getElementById("slideArrow").src = "../Images/Icons/left.png"  ;
        i = 1  ;
    }
    else{
        document.getElementById("devList").classList.remove("slideToRight")  ;
        document.getElementById("devList").classList.add("slideToLeft")  ;
        document.getElementById("slideArrow").src = "../Images/Icons/right.png"  ;
        i = 0  ;
    }
}


window.onload(lazyLoadImages())  ;