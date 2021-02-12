<?php 

function lattes_custom_post_news() {
    $labels = array(
        'name'                  => 'News',
        'singular_name'         => 'News',
        'menu_name'             => 'News',
        'name_admin_bar'        => 'News',
        'add_new'               => 'Ajouter une news',
        'add_new_item'          => 'Ajouter une news',
        'new_item'              => 'Nouvelle news',
        'edit_item'             => 'Éditer la news',
        'view_item'             => 'Voir la news',
        'all_items'             => 'Toutes les news',
        'not_found'             => 'Aucune news à afficher.',
        'not_found_in_trash'    => 'Aucune news présente dans la corbeille.',
        'featured_image'        => 'Image couverture',
        'set_featured_image'    => 'Ajouter une image de couverture',
        'remove_featured_image' => 'Supprimer l\'image de couverture',
        'use_featured_image'    => 'utiliser une image de couverture',
        'archives'              => 'Toutes les news',
        'insert_into_item'      => 'Ajouter à la news',
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'News - custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
        'menu_icon'          =>  'dashicons-megaphone'
    );      
    register_post_type( 'news', $args );
}
add_action( 'init', 'lattes_custom_post_news' );