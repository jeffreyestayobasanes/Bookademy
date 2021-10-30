
/*
const observer = new IntersectionObserver( entries => {
    entries.forEach( entry => {
        if (entry.isIntersecting){
            entry.target.classList.add('animate')  ;
        }
    })  ;
})  ;
observer.observe(document.querySelector('.load'))  ;
*/
    
const targets = document.querySelectorAll(".load");

const lazyLoad = (target)=>{
    const io = new IntersectionObserver((entries,observer)=>{
        entries.forEach(entry=>{
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
    
    