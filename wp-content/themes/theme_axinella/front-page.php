<?php get_header() ?>

  <section id="hero" class="banner">
      <div class="items_banner">
          <h1></h1>
      </div>
  </section>

  <section class="about-me" id="aboutme">
    <div class="about-me-content">
        <h2 id="about-me-title">About Me</h2>
        <div class="writing-effect">
            <p id="phrase-1" style="display: none;">"Passionnée par le code et avide de connaissances, </p>
            <p id="phrase-2" style="display: none;">je suis une femme curieuse qui explore les mystères</p>
            <p id="phrase-3" style="display: none;">de la programmation avec enthousiasme</p>
        </div>
        <p class="description_aboume">Diplômée d'une formation certifiante sur OpenClassrooms, mon parcours témoigne de mon engagement envers l'excellence et ma volonté constante de perfectionnement. À la recherche de nouveaux défis et d'opportunités, je suis impatiente de partager mon expertise à travers un portfolio qui reflète ma passion, ma créativité et mon savoir-faire en développement web.</p>
    </div>
</section>

<section class="contact" id="contact">
    <div class="contact-form">
        <h2>Pour Me Contacter</h2>
        <?php echo do_shortcode('[contact-form-7 id="5626720" title="Contact Portfolio"]'); ?>
    </div>
</section>
  <section class="projets" id="projets">
    <div class="projet">
        <div class="contenu-projet">
            <h2 class="projet_title">Titre du Projet 1</h2>
            <p class="description-projet">Description du projet 1</p>
            <div class="image-projet">
                <img src="<?php echo get_template_directory_uri() . '/imgs/screen_projet_photographe_event.png;' ?>" alt="Fleur">
            </div>
        </div>
        <div class="overlay"></div>
        <div class="contenu-survol">
            <img src="<?php echo get_template_directory_uri() . '/imgs/screen_projet_photographe_event.png;' ?>" alt="Fleur">
            <p>Informations supplémentaires sur le projet 1</p>
        </div>
    </div>
    
    <div class="projet">
        <div class="contenu-projet">
            <h2 class="projet_title">Titre du Projet 2</h2>
            <p class="description-projet">Description du projet 2</p>
            <div class="image-projet">
                <img src="<?php echo get_template_directory_uri() . '/imgs/screen_projet_photographe_event.png;' ?>" alt="Fleur">
            </div>
        </div>
        <div class="overlay"></div>
        <div class="contenu-survol">
            <img src="<?php echo get_template_directory_uri() . '/imgs/screen_projet_photographe_event.png;' ?>" alt="Fleur">
            <p>Informations supplémentaires sur le projet 1</p>
        </div>
    </div>

    <div class="projet">
        <div class="contenu-projet">
            <h2 class="projet_title">Titre du Projet 3</h2>
            <p class="description-projet">Description du projet 3</p>
            <div class="image-projet">
                <img src="<?php echo get_template_directory_uri() . '/imgs/screen_projet_photographe_event.png;' ?>" alt="Fleur">
            </div>
        </div>
        <div class="overlay"></div>
        <div class="contenu-survol">
            <img src="<?php echo get_template_directory_uri() . '/imgs/screen_projet_photographe_event.png;' ?>" alt="Fleur">
            <p>Informations supplémentaires sur le projet 1</p>
        </div>
    </div>
</section>


<?php get_footer() ?>