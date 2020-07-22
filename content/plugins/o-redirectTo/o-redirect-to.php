<?php

/*Plugin Name: oRedirect To
Description: Plugin to redirect for pages and posts
Bersion: 1.0
*/

if(!defined('WPINC')) {
    die();
}

class ORedirectTo
{
    public function __construct() 
    {
        add_action('template_redirect', [$this, 'redirect']);
    }

    public function redirect()
    {
        if (is_single() || is_page()) {
            // Get the content of the custom field
            $cf = get_post_meta(get_the_ID(), 'oRedirection', true);
            
            // If the custom is not empty, the redirection is to be done
            if (!empty($cf)) {
                //  Transformation ID in a valid URL
                $cf = get_permalink($cf);

                // Redirection
                wp_redirect($cf, 301);
                exit();
            }
        }
    }
}

$ort = new ORedirectTo();