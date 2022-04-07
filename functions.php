<?php

// Ajout du titre

add_theme_support('title-tag');


// Chargement des fichiers css et js

function montheme_enqueue_styles() {
    wp_enqueue_style("bootstrap", 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style("maincss", get_template_directory_uri() . '/assets/css/style2.css' );
    wp_enqueue_script('mainscript', get_template_directory_uri() . '/assets/js/script.js');    
}

add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');

// Chargement de la barre de navigation

register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );