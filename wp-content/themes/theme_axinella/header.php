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
           
        <div class="menu-icon" id="menuIcon">
            <img src="<?php echo get_template_directory_uri() . '/imgs/flower_menu_burger.png;' ?>" alt="Fleur">
            <img src="<?php echo get_template_directory_uri() . '/imgs/flower_menu_burger_close.png;' ?>" alt="Fleur de fermeture" class="hide">
        </div>

        <div class="menu-icon">
            <img src="<?php echo get_template_directory_uri() . '/imgs/menu_icone.png;' ?>" alt="Menu Burger">
        </div>

        <nav role="navigation" aria-label="<?php _e('Menu', 'text-domain'); ?>">
            <?php
                $args = array(
                    'theme_location' => 'primary', 
                    'menu_class' => 'primary-menu', 
                    'container' => false, 
                );
                wp_nav_menu($args);
            ?>
        </nav>
        <div class="container_link_and_arrow_projet">
            <div class="arrow-container">
    <div class="arrow-down"></div>
    <div class="arrow-down"></div>
    <div class="arrow-down"></div>
</div>
            <a href="#projets">Projets</a>
        </div>
    </header>

    <div id="content" class="site-content">
