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
        <div class="container">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
        <nav role="navigation" aria-label="<?php _e('Menu', 'text-domain'); ?>">

            <h1>
                <img class="logo_nav" src="wp-content/themes/theme_axinella/imgs/logo_axinella_portfolio.png" alt="Logo du site" >
            </h1>

            <div class="container_nav_animation">
            
            </div>

            <div class="menu-icon" id="menuIcon">
                <img src="<?php echo get_template_directory_uri() . '/imgs/flower_menu_burger.png;' ?>" alt="Fleur">
                <img src="<?php echo get_template_directory_uri() . '/imgs/flower_menu_burger_close.png;' ?>" alt="Fleur de fermeture" class="hide">
            </div>

            <?php
                $args = array(
                    'theme_location' => 'primary', 
                    'menu_class' => 'primary-menu', 
                    'container' => false, 
                );
                wp_nav_menu($args);
            ?>
        </nav>
    </header>

    <div id="content" class="site-content">
