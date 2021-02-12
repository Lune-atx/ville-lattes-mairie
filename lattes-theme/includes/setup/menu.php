<?php

function lattes_register_nav_menus(){

    register_nav_menu('main', 'Menu principal');
}
add_action( 'after_setup_theme', 'lattes_register_nav_menus' );