<?php

function plugin_lattes_styles() {
    wp_enqueue_style( 'plugin-style', plugins_url('Lattes'). '/styles/main.css' );
}
add_action( 'wp_enqueue_scripts', 'plugin_lattes_styles' );
