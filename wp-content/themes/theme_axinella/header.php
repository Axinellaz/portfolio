<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>


        <div class="menu-burger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        

        <nav class="menu navbar-scroll"  id="navbar"role="navigation" aria-label="<?php _e('Menu', 'text-domain'); ?>">
            <?php
                $args = array(
                    'theme_location' => 'primary', 
                    'menu_class' => 'primary-menu', 
                    'container' => false, 
                    'link_before' => '<span>', // Ajoutez un élément span avant chaque lien
                    'link_after' => '</span>', // Fermez le span après chaque lien
                );
                wp_nav_menu($args);
            ?>
        </nav>

        </div>
    </header>

    <div id="content" class="site-content parallax-container">
