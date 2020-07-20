<?php

// Inclusion des enqueues
require 'inc/enqueue.php';

// Inclusion du setup de thème
require 'inc/theme-setup.php';

// Inclusion des shortcodes
require 'inc/shortcodes.php';

// Inclusion du customizer
require 'inc/customizer.php';

// Mise en forme de mes var_dump()
function dump($var) {
    echo '<pre style="color:black;font-size:0.8em;">';
    var_dump($var);
    echo '</pre>';
    die;
}