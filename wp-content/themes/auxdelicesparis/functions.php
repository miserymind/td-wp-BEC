<?php

add_action( 'init', 'codex_patisserie_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_patisserie_init() {
    $labels = array(
        'name'               => _x( 'Pâtisseries', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Pâtisserie', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Pâtisseries', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Pâtisserie', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter une nouvelle Pâtisserie', 'patisserie', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter une nouvelle Pâtisserie', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouvelle Pâtisserie', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Modifier une Pâtisserie', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Regarder la Pâtisserie', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Toutes les Pâtisseries', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher une Pâtisserie', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Pâtisseries:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucunes Pâtisseries trouvé', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucunes Pâtisseries dans la poubelle', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'patisserie' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type( 'patisserie', $args );
}


add_action( 'init', 'codex_patissier_init' );
function codex_patissier_init() {
    $labels = array(
        'name'               => _x( 'Pâtissiers', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Pâtissier', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Pâtissiers', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Pâtissier', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Ajouter un nouveau Pâtissier', 'patisserie', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Ajouter un nouveau Pâtissier', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Nouveau Pâtissier', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Modifier un Pâtissier', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Regarder le Pâtissier', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Tous les Pâtissiers', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Rechercher un Pâtissier', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Pâtissiers:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Aucuns Pâtissier trouvé', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Aucuns Pâtissiers dans la poubelle', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'patissier' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type( 'patissier', $args );
}


?>