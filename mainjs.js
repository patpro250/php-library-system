
// navigation 
var navclose = document.getElementById('xmark1');
var navlinks = document.getElementById('navlink1');
var barshow = document.getElementById('bar1');
navclose.onclick = function(){
    navlinks.style.width = "0";
    navlinks.style.marginRight = "-50px";
};

barshow.addEventListener('click',function(){
    navlinks.style.display = "block";
    navlinks.style.width = "300px";
    navlinks.style.marginRight = "0px";
});


