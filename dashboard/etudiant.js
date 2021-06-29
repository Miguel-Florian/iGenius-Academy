var btn = document.querySelector('.toggle_btn');
var nav = document.querySelector('.nav');
btn.onclick = function () {
  nav.classList.toggle("nav_open");
};

function toggleMenu(){
        let toggle=document.querySelector('.toggle');
        let nav=document.querySelector('.nav');
        let main=document.querySelector('.main');
        toggle.classList.toggle('active');
        nav.classList.toggle('active');
        main.classList.toggle('active');
    }
  

