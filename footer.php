<?php

ob_start();

$args = array(
    'theme_location'    => 'footer',
    'container'         => FALSE,
    'menu_id'        => 'info',
    'menu_class'    => 'list-unstyled',
);

wp_nav_menu($args);

$footer_menu = ob_get_clean();


$visit = __("Visit Our Office",'sherpa');


$contact = __("Contact Us",'sherpa');


$follow = __("Follow Us",'sherpa');


require_once('footer-shared.php');