<?php 

// MENU  NAVIGATION 
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Menu Principal' ), // Identifiant et libellé de l'emplacement du menu
            'footer' => __( 'Menu Pied de Page' ) 
        )
    );
}
add_action( 'after_setup_theme', 'register_my_menus' );

// DECLARTION FICHIER CSS 
function montheme_enqueue_styles() {
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/CSS/main.css' );
}
add_action( 'wp_enqueue_scripts', 'montheme_enqueue_styles' );

// DECLARATION LIBRAIRIE EFFET PARALLAX

function enqueue_rellax_script() {
    // Enregistrer Rellax.js depuis le CDN
    wp_enqueue_script('rellax', 'https://unpkg.com/rellax@latest/dist/rellax.min.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_rellax_script');


// DECLARTION FICHIER JS
function montheme_enqueue_scripts_js() {
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/JS/scripts.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'menu-burger', get_template_directory_uri() . '/JS/menu-burger.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'effet-text', get_template_directory_uri() . '/JS/text-effet-aboutme.js', array( 'jquery' ), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'montheme_enqueue_scripts_js' );

// NOUVELLE TAILLE IMAGE
add_action('after_setup_theme', 'custom_image_sizes');

function custom_image_sizes() {
    add_image_size('custom-thumbnail', 500, 500, true); // true pour recadrer l'image
}

