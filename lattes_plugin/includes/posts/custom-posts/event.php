<?php 

function lattes_custom_post_event() {
    $labels = array(
        'name'                  => 'Évènements',
        'singular_name'         => 'Évènement',
        'menu_name'             => 'Évènements',
        'name_admin_bar'        => 'Évènement',
        'add_new'               => 'Ajouter un évènement',
        'add_new_item'          => 'Ajouter un évènement',
        'new_item'              => 'Nouvel évènement',
        'edit_item'             => 'Éditer l\'évènement',
        'view_item'             => 'Voir l\'évènement',
        'all_items'             => 'Tous les évènements',
        'not_found'             => 'Aucun évènement à afficher.',
        'not_found_in_trash'    => 'Aucun évènement présent dans la corbeille.',
        'featured_image'        => 'Image de couverture',
        'set_featured_image'    => 'Ajouter une image de couverture',
        'remove_featured_image' => 'Supprimer l\'image de couverture',
        'use_featured_image'    => 'utiliser une image de couverture',
        'archives'              => 'Touts les évènements',
        'insert_into_item'      => 'Ajouter à l\'évènement'
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
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
        'menu_icon'          =>  'dashicons-buddicons-groups'
    );      
    register_post_type( 'event', $args );
}
add_action( 'init', 'lattes_custom_post_event' );