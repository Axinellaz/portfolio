const menuIcon = document.getElementById('menuIcon');
const menu = document.querySelector('.primary-menu');
console.log(menu);

menuIcon.addEventListener('mouseenter', () => {
    menuIcon.querySelector('img').style.transform = 'scale(1.1) rotate(360deg)';
});

menuIcon.addEventListener('mouseleave', () => {
    menuIcon.querySelector('img').style.transform = 'scale(1) rotate(0deg)';
});

// Gestionnaire d'événements pour la première fleur (ouverture du menu)
menuIcon.addEventListener('click', () => {
    menu.classList.toggle('open');
    menuIcon.classList.toggle('hide'); // Toggle la première fleur
    menuIcon.querySelector('img:nth-child(2)').classList.toggle('hide'); // Toggle la deuxième fleur
});

// Gestionnaire d'événements pour la deuxième fleur (fermeture du menu)
menuIcon.querySelector('img:nth-child(2)').addEventListener('click', () => {
    menu.classList.remove('open'); // Fermer le menu
    menuIcon.classList.toggle('hide'); // Toggle la première fleur
    menuIcon.querySelector('img:nth-child(2)').classList.toggle('hide'); // Toggle la deuxième fleur
});

// Ajout d'un gestionnaire d'événements pour fermer le menu lorsque l'utilisateur clique en dehors du menu
document.addEventListener('click', (event) => {
    if (!menu.contains(event.target) && !menuIcon.contains(event.target)) {
        menu.classList.remove('open');
        menuIcon.classList.remove('hide');
        menuIcon.querySelector('img:nth-child(2)').classList.add('hide');
    }
});
