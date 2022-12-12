<?php

require_once 'config.php';

$content = '';
$is_principal = false;
$white_list = ['/', 'home', 'customers', 'contact', 'ambulance-stretchervan', 'wheelchair', 'long-distance', 'groups'];
$view = isset($_GET['views']) ? $_GET['views'] : false;

if (in_array($view, $white_list) ) :

    if ($view) :
        $content = trim($view) . '.php';
        $is_principal = false;
    else :
        $content = 'home.php';
        $is_principal = true;
    endif;
else : 
    if (!$view) {
        $content = 'home.php';
        $is_principal = true;
    }
    else $content = '404';
endif;

include 'views/template.php';
?>