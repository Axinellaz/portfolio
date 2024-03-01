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


