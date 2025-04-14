<?php

add_action('after_setup_theme', 'esgi_register_nav_menu', 0);
function esgi_register_nav_menu()
{
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'esgi-theme'),
    'footer-menu' => __('Footer Menu', 'esgi-theme')
  ));
}