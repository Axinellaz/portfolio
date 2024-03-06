const menuBurger = document.querySelector('.menu-burger');
const menu = document.querySelector('.menu');

menuBurger.addEventListener('click', function() {
    menu.classList.toggle('menu-open');
    menuBurger.querySelectorAll('.bar').forEach(bar => bar.classList.toggle('open'));
});
