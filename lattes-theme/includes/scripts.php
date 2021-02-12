<?php

// SCRIPTS
function theme_enqueue_scripts() {
    wp_enqueue_script( 'nav', get_template_directory_uri() . '/scripts/lattesMenu.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
