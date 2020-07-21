<?php

function oprofile_home($wp_customize) {

    // Third step : add a setting

    // Number of posts to show
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


    // Selection of categories type
    $wp_customize->add_setting(
        'oprofile_home_category_display',
        [
            'default' => 'news'
        ]
    );

    $all_post_categories = get_categories();

    foreach ($all_post_categories as $post_category) {
        $array_choices[$post_category->slug] = $post_category->name;
    }

    $wp_customize->add_control(
        'oprofile_home_category_display',
        [
            'type' => 'select',
            // ici, on va fournir un array associatif avec nos <options>
            // clef => value de l'option - valeur => label de l'option
            'choices' => $array_choices,
            'section' => 'oprofile_home',
            'label' => 'Catégorie d\'articles à afficher',
            'description' => 'Sélectionnez une catégorie d\'articles à afficher sur la home'
        ]
    );
}