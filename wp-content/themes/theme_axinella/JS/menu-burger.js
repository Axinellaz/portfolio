// JavaScript pour gérer le clic sur l'icône de menu
        document.addEventListener("DOMContentLoaded", function() {
            const menuIcon = document.getElementById("menuIcon");
            const menuBurgerIcon = document.getElementById("menuBurgerIcon");
            const menuLinks = document.getElementById("menuLinks");

            menuIcon.addEventListener("click", function() {
                menuLinks.classList.toggle("show");
                menuIcon.classList.toggle("hide");
                menuBurgerIcon.classList.toggle("hide");
            });
        });
