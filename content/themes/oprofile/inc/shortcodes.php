<?php

// shortcode to show date and time
if (!function_exists('shortcodeTimestamp')) {
    function shortcodeTimestamp() {
        return '<p>Nous sommes le ' . date("d/m/Y") . ' et il est ' . date("H:i") . '</p>';
    }
}

add_shortcode('time', 'shortcodeTimestamp');


// shortcode to show citation
if (!function_exists('shortcodeCitation')) {
    function shortcodeCitation($atts, $content=null) {
        return '<span>' . $content . '</span>';
    }
}

add_shortcode('citation', 'shortcodeCitation');


// shortcode to come back home
if (!function_exists('shortcodeBackhome')) {
    function shortcodeBackhome($atts) {
        $buttonHome = shortcode_atts([
            'lien' => home_url(),
            'texte' => 'Retour à l\'accueil',
            'nouvel_onglet' => 'oui'
        ], $atts);

        if (!filter_var($buttonHome['lien'], FILTER_VALIDATE_URL)) {
            return '[ URL invalide !]';
        }
    
        else {
            $html = '<div class="action-bar" style="margin-top:2em;">';
            $html.= '<a href="' . $buttonHome['lien'] . '" class="action-button"';
            if($buttonHome['nouvel_onglet'] == 'oui') {
                $html .= 'target="_blank">';
            }
            else {
                $html .= '>';
            }
            $html .= $buttonHome['texte'];
            $html .= '</a>';
            $html .= '</div>';
            $html .= '<br>';

            return $html; 
        }
    }
}

add_shortcode('boutonHome', 'shortcodeBackhome');