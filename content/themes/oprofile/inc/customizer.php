<?php

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

        // Third step : add a setting
        $wp_customize->add_setting(
            'oprofile_posts_count',
            [
                'default' => 6
            ]
        );

        // Forth step : add a control
        $wp_customize->add_control(
            // Same identifier than his setting
            'oprofile_posts_count',
            [
                // Field type
                'type' => 'number',
                // Input attributs
                'input_attrs' => [
                    'min' => 0,
                    'max' => 10,
                    'step' => 2
                ],
                // Section where show the control
                'section' => 'oprofile_home',
                // Label
                'label' => 'Nombres d\'articles',
                // Description
                'description' => 'Nombre d\'articles à afficher sur la page d\'accueil'
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

        // Email
        $wp_customize->add_setting(
            'oprofile_footer_email',
            [
                'default' => 'test@ok.io'
            ]
        );
        $wp_customize->add_control(
            'oprofile_footer_email',
            [
                'type' => 'email',
                'section' => 'oprofile_footer',
                'label' => 'Adresse email',
                'description' => 'Adresse email affichée dans le pied de page'
            ]
        );

        // Télephone
        $wp_customize->add_setting(
            'oprofile_footer_num',
            [
                'default' => '+33 7 77 77 77 77'
            ]
        );
        $wp_customize->add_control(
            'oprofile_footer_num',
            [
                'type' => 'text',
                'section' => 'oprofile_footer',
                'label' => 'Numéro de téléphone',
                'description' => 'Numéro de téléphone affichée dans le pied de page'
            ]
        );

        // Adresse postale
        $wp_customize->add_setting(
            'oprofile_footer_address',
            [
                'default' => '55 rue de Papou 17000 La Rochelle'
            ]
        );
        $wp_customize->add_control(
            'oprofile_footer_address',
            [
                'type' => 'textarea',
                'section' => 'oprofile_footer',
                'label' => 'Adresse postale',
                'description' => 'Adresse postale affichée dans le pied de page'
            ]
        );
    }
}

add_action('customize_register', 'oprofile_customize_register');