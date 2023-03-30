let menu = document.getElementsByClassName('Menu');
let navMob = document.getElementById('Navmob');
let close = document.getElementById('close');
let regMob = document.getElementById('Regmob');
let adminMob = document.getElementById('Adminmob');

menu[0].addEventListener('click', (e) => {
    navMob.style.left = "0%";
    menu[0].style.display = "none";
    close.style.display = "block";
})

close.addEventListener('click', (e) => {
    navMob.style.left = "-150%";
    menu[0].style.display = "block";
    close.style.display = "none";
})

regMob.addEventListener('click', (e) => {
    navMob.style.left = "-150%";
    menu[0].style.display = "block";
    close.style.display = "none";
})

adminMob.addEventListener('click', (e) => {
    navMob.style.left = "-150%";
    menu[0].style.display = "block";
    close.style.display = "none";
})