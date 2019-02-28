<?php

ob_start();

$args = array(
    'theme_location'    => 'footer_es',
    'container'         => FALSE,
    'menu_id'        => 'info',
);

wp_nav_menu($args);

$footer_menu = ob_get_clean();


$visit = "Visita Nuestra Oficina";


$contact = "Contactanos";


$follow = "Síguenos";


require_once('footer-shared.php');