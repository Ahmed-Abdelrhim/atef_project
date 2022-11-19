let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode');



const enableDarkMode = () =>{
    toggleBtn.classList.replace('fa-sun', 'fa-moon');
    body.classList.add('dark');
    localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
    toggleBtn.classList.replace('fa-moon', 'fa-sun');
    body.classList.remove('dark');
    localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
    enableDarkMode();
}

toggleBtn.onclick = (e) =>{
    darkMode = localStorage.getItem('dark-mode');
    if(darkMode === 'disabled'){
        enableDarkMode();
    }else{
        disableDarkMode();
    }
}

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

// scroll to top
let up = document.querySelector(".top");

window.onscroll = function () {
    console.log(window.scrollY);
    if (window.scrollY >= 300) {
        up.style.display = "block";
    } else {
        up.style.display = "none";
    }
    //  this.scrollY >= 1000 ? span.classList.add("show") : span.classList.remove("show");
};

up.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};
