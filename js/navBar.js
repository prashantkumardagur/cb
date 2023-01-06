var navLines = document.getElementById('navLines');
var navlinks = document.getElementById('navlinks');

var navToggle = false;
navLines.addEventListener('click', ()=>{
    if(navToggle) navlinks.style.left="-120vw";
    else navlinks.style.left="0";
    navToggle=!navToggle;
})