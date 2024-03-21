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

    // Fonction pour observer la section "About Me" et déclencher les animations
    function observeAboutMe(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Démarrer l'effet d'écriture sur le titre "About Me"
                let aboutMeTitle = document.getElementById('about-me-title');
                aboutMeTitle.classList.add('writing-effect');
                typeWriterEffect(aboutMeTitle, 0, 0);

                // Démarrer l'effet d'écriture sur chaque paragraphe "Writing Effect"
                let phrases = document.querySelectorAll('.writing-effect p');
                let delay = 0;
                phrases.forEach(function(phrase, index) {
                    typeWriterEffect(phrase, index, delay);
                    delay += 2000; // Délai entre chaque phrase, en millisecondes
                });

                // Démarrer l'animation de la bulle de pensée
                const thoughtBubble = document.querySelector('.thought-bubble');
                thoughtBubble.classList.add('drawBubble');

                // Arrêter d'observer une fois que l'animation a commencé
                observer.unobserve(entry.target);
            }
        });
    }

    // Créer un observateur pour la section "About Me"
    let options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 // Détecte lorsque 50% de la section est visible
    };

    let observer = new IntersectionObserver(observeAboutMe, options);

    // Observer la section "About Me"
    let aboutMeSection = document.getElementById('about-me');
    observer.observe(aboutMeSection);
});

