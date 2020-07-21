<?php

// Require of section's files
require 'customizer/oprofile_home.php';
require 'customizer/oprofile_footer.php';


if (!function_exists('oprofile_customize_register')) {
    // Ma fonction, puisqu'elle est greffée sur le hook "customize_register"
    // récupère automatiquement l'objet "wp_customize"
    // Cet objet représente le customizer tel qu'il existe actuellement
    // https://codex.wordpress.org/Theme_Customization_API
    function oprofile_customize_register($wp_customize) {
        // First step : add a panel
        $wp_customize->add_panel(
            // Unique name for the panel
            'oprofile_theme_panel',
            [
                // Title
                'title' => "oProfile",
                // Description
                'description' => 'oProfile - Gestion du thème',
                // location
                'priority' => 1
            ]
        );

        // Second step : add a section
        $wp_customize->add_section(
            'oprofile_home',
            [
                'title' => 'Page d\'accueil',
                'description' => 'oProfile - Gestion de la page d\'acceuil',
                // Pane identifier where show the the section
                'panel' => 'oprofile_theme_panel'
            ]
        );

        
        // An other section for the footer
        $wp_customize->add_section(
            'oprofile_footer',
            [
                'title' => 'Pied de page',
                'description' => 'oProfie - Gestion du pied de page',
                'panel' => 'oprofile_theme_panel'
            ]
        );

        // Call setting/control files
        oprofile_home($wp_customize);
        oprofile_footer($wp_customize);

        
    }
}

add_action('customize_register', 'oprofile_customize_register');