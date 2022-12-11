<?php

require_once 'config.php';

$content = '';
$is_principal = false;
$white_list = ['home', 'customers', 'about', 'pricing', 'contact'];
$view = isset($_GET['views']) ? $_GET['views'] : false;

if ($view) :
    $content = trim($view) . '.php';
    $is_principal = false;
else :
    $content = 'home' . '.php';
    $is_principal = true;
endif;

include 'views/template.php';
?>