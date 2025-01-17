<?php

if (!function_exists('oprofile_setup')) {

    function oprofile_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    
        register_nav_menus([
            'main-menu' => 'Menu burger de navigation'
        ]);
        
        if(!is_admin()) {
            show_admin_bar(false);
        }       
    }    
}
    
add_action('after_setup_theme', 'oprofile_setup');