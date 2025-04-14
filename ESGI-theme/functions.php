<?php

// TOUTE LA LOGIQUE DU THEME //

// Enregistrer les emplacements de menu
add_action('after_setup_theme', 'esgi_register_nav_menu', 0);
function esgi_register_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'ESGI'),
        'footer_menu'  => __('Footer Menu', 'ESGI'),
    ));
}

add_action('wp_enqueue_scripts', 'esgi_enqueue_assets', 10);
function esgi_enqueue_assets()
{
    wp_enqueue_style('main', get_stylesheet_uri());
}
