<?php

function lattes_custom_logo(){
    add_theme_support( 'custom-logo', array(
        'height' => 30,
        'width'  => 150,
    ) );
}
add_action( 'after_setup_theme', 'lattes_custom_logo' );
