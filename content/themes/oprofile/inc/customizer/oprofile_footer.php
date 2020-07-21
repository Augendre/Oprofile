<?php

function oprofile_footer($wp_customize) {

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


    // Telephone
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


    // Address
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

    // Activate / déactivate display footer
    $wp_customize->add_setting('oprofile_footer_active');

    $wp_customize->add_control(
        'oprofile_footer_active',
        [
            'type' => 'checkbox',
            'section' => 'oprofile_footer',
            'label' => 'Activer l\'affichage du footer',
            'description' => 'Permet de masquer ou afficher le footer'
        ]
    );

    // If footer deactivate, deactivation color picker too
    if (get_theme_mod('oprofile_footer_active')):

        // Modification footer background'scolor
        $wp_customize->add_setting(
            'oprofile_footer_bgcolor',
            [
                'default' => '#292f4c'
            ]
        );

        $wp_customize->add_control(
            'oprofile_footer_bgcolor',
            [
                'type' => 'color',
                'section' => 'oprofile_footer',
                'label' => 'Couleur de fond du footer',
                'description' => 'Permet de modifier la couleur de fond du footer'
            ]
        );

    endif;
}