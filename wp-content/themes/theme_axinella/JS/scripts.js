console.log('ok')




document.addEventListener("DOMContentLoaded", function() {
    const projets = document.querySelectorAll('.projet');
    projets.forEach(projet => {
        // Recherche de l'élément .contenu-survol en dehors de la div .projet
        const contenuSurvol = projet.nextElementSibling;
        
        if (contenuSurvol && contenuSurvol.classList.contains('contenu-survol')) {
            // Au survol du projet
            projet.addEventListener('mouseenter', function() {
                contenuSurvol.style.opacity = '1';
                contenuSurvol.style.pointerEvents = 'auto';
                contenuSurvol.style.transform = 'translate(-50%, -50%) scale(0.8)';
            });

            // En quittant le survol du projet
            projet.addEventListener('mouseleave', function() {
                contenuSurvol.style.opacity = '0';
                contenuSurvol.style.pointerEvents = 'none';
                contenuSurvol.style.transform = 'translate(-50%, -50%) scale(1)';
            });
        }
    });
});

// Section Contact - Effet Bulles de Savon
// Fonction pour générer des bulles de savon
function generateBubbles() {
    const section = document.getElementById('contact');
    console.log(section);
    const sectionRect = section.getBoundingClientRect(); // Rectangle de la section
    for (let i = 0; i < 15; i++) { // Générer 10 bulles
        const bubble = document.createElement('div');
        bubble.classList.add('bubble');
        const x = Math.random() * (sectionRect.width - 40); // Position horizontale aléatoire dans la section
        const y = Math.random() * (sectionRect.height - 40); // Position verticale aléatoire dans la section
        bubble.style.left = x + 'px';
        bubble.style.top = y + 'px';
        section.appendChild(bubble);
    }
}

// Générer les bulles lorsque le document est chargé
document.addEventListener('DOMContentLoaded', generateBubbles);


// ANIMATION H1
document.addEventListener("DOMContentLoaded", function() {
    var h1 = document.querySelector('.animate-text');
    setTimeout(function() {
      h1.classList.add('show');
    }, 500);
  });


// ANIMATION FLEUR NAVBAR 
document.addEventListener('DOMContentLoaded', function() {
    const flowerIcon = document.getElementById('flower-icon');
    console.log(flowerIcon);

    flowerIcon.addEventListener('click', function() {
        const flowerImages = this.querySelectorAll('img');
        flowerImages.forEach(img => img.classList.toggle('hidden'));
    });
});

// CHEMIN LIENS MENU NAV
document.addEventListener("DOMContentLoaded", function() {
    // Sélectionnez tous les liens dans votre menu de navigation
    var links = document.querySelectorAll('.primary-menu a');

    // Parcourez chaque lien
    links.forEach(function(link) {

        var text = link.textContent.trim().toLowerCase().replace(/\s+/g, '-');


        link.href = '#' + text;
        console.log(text);
    });
});
