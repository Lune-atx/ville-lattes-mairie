<?php

// STYLES
function theme_enqueue_styles() {
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/styles/main.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );