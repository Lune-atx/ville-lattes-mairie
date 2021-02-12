<?php 

function lattes_custom_post_logo() {
    $labels = array(
        'name'                  => 'Logos de pied de page',
        'singular_name'         => 'Logo de pied de page',
        'menu_name'             => 'Logos de pied de page',
        'name_admin_bar'        => 'Logos de pied de page',
        'add_new'               => 'Ajouter un logo de pied de page',
        'add_new_item'          => 'Ajouter un logo de pied de page',
        'new_item'              => 'Nouveau logo de pied de page',
        'edit_item'             => 'Éditer le logo',
        'view_item'             => 'Voir le logo',
        'all_items'             => 'Tous les logos de pied de page',
        'not_found'             => 'Aucun logo de pied de page à afficher.',
        'not_found_in_trash'    => 'Aucun logo de pied de page présent dans la corbeille.',
        'featured_image'        => 'Logo de pied de page',
        'set_featured_image'    => 'Ajouter le logo de pied de page',
        'remove_featured_image' => 'Supprimer le logo de pied de page',
        'use_featured_image'    => 'Ajouter le logo de pied de page',
        'archives'              => 'Touts les logos de pied de page',
        'insert_into_item'      => 'Ajouter au logo'
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'event - custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'event' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'author', 'thumbnail' ),
        'show_in_rest'       => true,
        'menu_icon'          =>  'dashicons-image-filter'
    );      
    register_post_type( 'logo', $args );
}
add_action( 'init', 'lattes_custom_post_logo' );