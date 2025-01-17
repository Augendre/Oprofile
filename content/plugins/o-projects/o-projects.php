<?php

/*
Plugin Name: oProjects
Description: un plugin permettanbt de gérer votre portfolio de projets
Version: 1.0
*/

if (!defined('WPINC')) {
    die;
}

class oProjects
{
    public function __construct()
    {
        add_action('init', [$this, 'register_cpt']);
        add_action('init', [$this, 'register_taxo']);
    }

    public function register_cpt()
    {
        $labels = [
            'name'               => 'Projets',
            'singular_name'      => 'Projet',
            'menu_name'          => 'Projets',
            'name_admin_bar'     => 'Projet',
            'add_new'            => 'Ajouter un projet',
            'add_new_item'       => 'Ajouter un nouveau projet',
            'new_item'           => 'Nouveau projet',
            'edit_item'          => 'Editer un projet',
            'view_item'          => 'Voir le projet',
            'all_items'          => 'Voir tous les projets',
            'search_items'       => 'Rechercher un projet',
            'not_found'          => 'Aucun projet trouvé',
            'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
            'attributes'         => 'Attributs du projet'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'hierarchical' => false,
            // on met show_in_rest à true si on souhaite l'éditeur Gutenberg
            'show_in_rest' => false,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => [
                'title',
                'editor',
                'page-attributes',
                'excerpt',
                'thumbnail',
                'custom-fields'
            ],
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'projets'
            ]
        ];
        // https://developer.wordpress.org/reference/functions/register_post_type/
        register_post_type('project', $args);
    }

    public function register_taxo()
    {
        register_taxonomy(
            'customer',
            'project',
            [
                'label' => 'Clients',
                'labels' => [
                    'choose_from_most_used' => 'Choisissez parmis les clients récurrents',
                    'separate_items_with_commas' => 'Séparez les clients par des virgules'
                    // etc....
                ],
                'public' => true,
                'hierarchical' => false,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'clients'
                ]
            ]
        );

        register_taxonomy(
            'techno',
            'project',
            [
                'label' => 'Technologies',
                'labels' => [
                    'add_new_item' => 'Ajouter une nouvelle technologie'
                ],
                'public' => true,
                'hierarchical' => true,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'technologies'
                ]
            ]
        );
    }

    public function oprojects_activate()
    {
        $this->register_cpt();
        $this->register_taxo();
        flush_rewrite_rules();
    }

    public function oprojects_deactivate()
    {
        flush_rewrite_rules();
    }
}

$oprojects = new oProjects();

// A l'activation du plugin
register_activation_hook(__FILE__, [$oprojects, 'oprojects_activate']);

// A la desactivation du plugin
register_deactivation_hook(__FILE__, [$oprojects, 'oprojects_deactivate']);