<?php

/*
Plugin Name: oRole
Description: Plugin permettant d'ajouter un rôle.
Version: 1.0
*/


if (!defined('WPINC')){
    die;
}

class ORoles
{
    public function __construct()
    {
        add_action('init', [$this, 'oroles_add_roles']);
    }

    public function oroles_add_roles()
    {
        add_role(
            'oclockien',
            'oClockien',
            [
                'read' => true
            ]
        );
    }

    public function oroles_add_cap()
    {
        // on récupère l'objet du rôle
        $role = get_role('oclockien');

        // puis on l'enrichi avec de nouvelles capacités
        $role->add_cap('create_post');
        $role->add_cap('edit_posts');
        $role->add_cap('edit_published_posts');
    }

    public function oroles_remove_role()
    {
        if (get_role('oclockien')){
            remove_role('oclockien');
        }
    }

    public function oroles_activate()
    {
        $this->oroles_add_roles();
        $this->oroles_add_cap();
    }

    public function oroles_deactivate()
    {
        $this->oroles_remove_role();
    }
}

$oroles = new ORoles;

register_activation_hook(__FILE__, [$oroles, 'oroles_activate']);
register_deactivation_hook(__FILE__, [$oroles, 'oroles_deactivate']);