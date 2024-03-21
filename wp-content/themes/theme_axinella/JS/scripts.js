console.log('ok')
// SECTION COMPETENCES 
 const toggleButtons = document.querySelectorAll('.toggle-button');
        const skillLists = document.querySelectorAll('.skill-list');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                skillLists[index].classList.toggle('active');
            });
        });

// SECTION PROJETS
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
    const text = document.querySelector(".animate-text");
    const letters = text.textContent.split(""); // Séparer le texte en lettres individuelles
    text.textContent = ""; // Effacer le texte initial
    
    // Parcourir chaque lettre et les placer dans des spans avec une opacité initiale de 0
    letters.forEach(letter => {
        const span = document.createElement("span");
        span.textContent = letter;
        text.appendChild(span);
    });

    // Définir un délai progressif pour l'apparition de chaque lettre
    let delay = 0.8;
    text.querySelectorAll("span").forEach((span, index) => {
        setTimeout(() => {
            span.style.opacity = 1;
        }, delay);
        delay += 0.2; // Délai entre chaque lettre (100 millisecondes)
    });

    
});


document.addEventListener("DOMContentLoaded", function() {

    const flowers = document.querySelectorAll(".flower");
    let delay = 0;

    flowers.forEach((flower, index) => {
        setTimeout(function() {
            flower.style.opacity = 1;
        }, delay);
        delay += 2000; // Ajouter un délai entre chaque fleur (1 seconde = 1000 millisecondes)
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

// PARALLAX SECTION 
var rellax = new Rellax('.parallax-section', {
    speed: -2, // Adjust the speed as per your preference
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });
