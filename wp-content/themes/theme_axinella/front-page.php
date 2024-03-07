<?php get_header() ?>

  <section id="hero" class="banner">
      <div class="items_banner">
          <h1 class="animate-text">Bienvenue </h1>
      </div>
  </section>

  <section class="about-me" id="about-me">
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
    <?php

    $args = array(
        'post_type' => 'projet', 
        'posts_per_page' => -1, 
    );
    $projects_query = new WP_Query($args);

    // Boucle à travers les projets
    if ($projects_query->have_posts()) :
        while ($projects_query->have_posts()) : $projects_query->the_post();

        // Récupérer l'URL de la single post
            $single_post_url = get_permalink();
        // Récupérer l'URL de l'image mise en avant
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-thumbnail');
        // Récupérer le contenu du champ ACF
            $acf_description_projet = get_field('description_projets');
            $acf_contexte_projet = get_field('contexte_projets');
    ?>
        <a href="<?php echo $single_post_url; ?>" class="projet">
            <div class="projet">
                <div class="contenu-projet">
                    <div class="container_title_descrption">
                        <h2 class="projet_title"><?php the_title(); ?></h2>

                        <p class="description-projet"><?php echo wp_trim_words($acf_description_projet, 20); ?></p>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
                <div class="contenu-survol">
                    <img src="<?php echo $image_url; ?>">
                    <h2><?php the_title() ?></h2> 
                    <p><?php echo wp_trim_words($acf_description_projet, 20); ?></p> 
                    <p><?php echo wp_trim_words($acf_contexte_projet, 20);?></p> 
                </div>
        </a>
    <?php
        endwhile;
        wp_reset_postdata(); // Réinitialiser les données de la requête
    endif;
    ?>
</section>

<section class="competences" id="competences">
    <h2>Mes Compétences</h2>
    <div class="container_skills">
        <div class="skills-section">
                <h3 class="toggle-button">Langages de programmation et technologies</h3>
                <ul class="skill-list">
                    <li>HTML/CSS</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>SQL</li>
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Frameworks et bibliothèques</h3>
                <ul class="skill-list">
                    <li>WordPrediv
                    <li>jQuery</li>
                    <li>Bootstrap</li>
                    <li>React.js</li>
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Outils de développement</h3>
                <ul class="skill-list">
                    <li>Git</li>
                    <li>Visual Studio Code</li>
                    <li>Sass</li>
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Conception graphique</h3>
                <ul class="skill-list">
                    <li>Adobe Photoshop</li>
                    <li>Adobe Illustrator</li>
                    <li>Figma</li> 
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Gestion de projet </h3>
                <ul class="skill-list">
                    <li>Méthodologies Agile</li>
                    <li>Gestion du temps</li>
                    <li>Collaboration d'équipe</li>
                    <li>Résolution de problèmdiv
                    <li>Communication efficace</li>
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Référencement (SEO)</h3>
                <ul class="skill-list">
                    <li>Optimisation on-page</li>
                    <li>Recherche de mots-clés</li>
                    <li>Analyse de la concurrence</li>
                    <li>Link building</li>
                    <li>Suivi des performances</li> 
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Systèmes de gestion de contenu (CMS)</h3>
                <ul class="skill-list"> 
                    <li>WordPress</li>
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Analyse et reporting</h3>
                <ul class="skill-list"> 
                    <li>Google Analytics</li>
                    <li>Google Search Console</li>
                </ul>
            </div>

            <div class="skills-section">
                <h3 class="toggle-button">Sécurité web</h3>
                <ul class="skill-list"> 
                    <li>Protection contre les attaques XSS</li>
                    <li>Cryptographie</li>
                    <li>Sécurité des mots de passe</li>
                    <li>Sécurisation des formulaires</li>
                    <li>Mise à jour et maintenance régulières</li>
                </ul>
            </div>
    </div>
</section>


<?php get_footer() ?>