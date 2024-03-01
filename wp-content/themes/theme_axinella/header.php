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

            <h1>LOGO </h1>

            <div class="container_nav_animation">
            
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
