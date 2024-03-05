document.addEventListener('DOMContentLoaded', function() {
    const aboutMeSection = document.getElementById('aboutme');
    const aboutMeContent = document.querySelector('.about-me-content');

    // Fonction pour vérifier si la section "About Me" est dans la vue
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Fonction pour déclencher l'animation lorsque la section "About Me" est dans la vue
    function animateAboutMe() {
        if (isInViewport(aboutMeSection)) {
            aboutMeSection.classList.add('visible');
            window.removeEventListener('scroll', animateAboutMe); // Arrêter l'écouteur d'événements une fois que l'animation est déclenchée
        }
    }

    // Écouter le défilement de la fenêtre et déclencher l'animation lorsque la section "About Me" est dans la vue
    window.addEventListener('scroll', animateAboutMe);
});

document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour effectuer l'effet d'écriture
    function typeWriterEffect(textElement, index, delay) {
        setTimeout(function() {
            textElement.style.display = 'block';
        }, delay);

        let text = textElement.textContent;
        textElement.textContent = '';

        let i = 0;
        let speed = 50; // Vitesse de frappe, en millisecondes

        function type() {
            if (i < text.length) {
                textElement.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }

        type();
    }

    // Appeler l'effet d'écriture pour chaque phrase
    let phrases = document.querySelectorAll('.writing-effect p');
    let delay = 0;
    phrases.forEach(function(phrase, index) {
        typeWriterEffect(phrase, index, delay);
        delay += 2000; // Délai entre chaque phrase, en millisecondes
    });

    // Ajouter une classe pour l'effet d'écriture sur le titre "About Me"
    let aboutMeTitle = document.getElementById('about-me-title');
    aboutMeTitle.classList.add('writing-effect');
    typeWriterEffect(aboutMeTitle, 0, 0);
});
