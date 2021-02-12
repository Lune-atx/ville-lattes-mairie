<?php

function lattes_admin_setting(){
    show_admin_bar(false);
}
add_action( 'init', 'lattes_admin_setting' );
