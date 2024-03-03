console.log('ok')

// Sélectionnez tous les liens du menu de navigation
const menuLinks = document.querySelectorAll('.primary-menu li a');

menuLinks.forEach(link => {
    link.addEventListener('mousemove', (e) => {
        // La largeur du lien
        const linkWidth = link.offsetWidth;
        // La position du curseur à l'intérieur du lien
        const cursorX = e.clientX - link.getBoundingClientRect().left;
        // Calcule du pourcentage de la position du curseur par rapport à la largeur du lien
        const percentage = (cursorX / linkWidth) * 100;
        // Définissez la couleur du texte en fonction de la position du curseur
        link.style.background = `linear-gradient(to right, #ffffff, #b3d9ff ${percentage}%, #b3d9ff)`; // Dégradé de couleur allant du blanc vers un joli bleu pastel
        // Définir la couleur de la bordure en fonction du dégradé de couleur
        link.style.borderColor = `hsl(210, 50%, 80%)`; // Teinte bleue assortie au dégradé de couleur
        // Appliquez un effet de grossissement en modifiant la taille de la police
        link.style.fontSize = '110%';
        link.style.transition = 'background-color 0.3s ease, border-color 0.3s ease,font-size 0.3s ease'; // Transition pour les couleurs
    });

    // Réinitialisez les couleurs lorsque le curseur quitte le lien
    link.addEventListener('mouseleave', () => {
        link.style.color = ''; // Réinitialisez la couleur du texte
        link.style.background = ''; // Réinitialisez la couleur d'arrière plan 
        link.style.borderColor = ''; // Réinitialisez la couleur de la bordure
        link.style.fontSize = ''; // Réinitialisez la taille de la police
    });
});