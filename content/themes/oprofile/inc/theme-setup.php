<?php

if (!function_exists('oprofile_setup')) {

    function oprofile_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    
        register_nav_menus([
            'main-menu' => 'Menu burger de navigation'
        ]);
    
        // Lors du setup du thème, il faut demander à WordPress de charger le dossier de languages.
        load_theme_textdomain('oprofile', get_theme_file_path('languages'));
    
    }
    
}
    
add_action('after_setup_theme', 'oprofile_setup');