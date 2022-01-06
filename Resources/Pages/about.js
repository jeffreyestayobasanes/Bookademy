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

function showArrowDown() {
    const targets = document.querySelectorAll("#first");
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
        },{threshold:[0.7]});
        io.observe(target);
    }
    targets.forEach(shadow);
    
}

function showArrowUp() {
    const targets = document.querySelectorAll("#rights");
    const shadow = (target)=>{
        const io = new IntersectionObserver((entries,observer)=>{
            entries.forEach(entry=>{
                document.getElementById('moreHint').src="../Images/Icons/up.png"  ;
                if(entry.isIntersecting){
                    document.getElementById('moreHint').classList.add('show')  ;
                }else{
                    document.getElementById('moreHint').classList.remove('show')  ;
                    showArrowDown()  ;
                }
            })
        },{threshold:[.8]});
        io.observe(target);
    }
    targets.forEach(shadow);
    
}

showArrowDown()  ;