<?php

function lattes_admin_thumbnail(){
    add_theme_support('post-thumbnails');    
    add_image_size('large_thumb', 900, 500, true);
    add_image_size('small_thumb', 250, 250, true);
}
add_action( 'init', 'lattes_admin_thumbnail' );
