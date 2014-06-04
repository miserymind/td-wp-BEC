<?php


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
add_action( 'init', 'codex_patissier_init' );


function add_menu_to_theme(){
    add_theme_support('menus');
    register_nav_menu('main_menu', 'Menu Principal');
    register_nav_menu('footer', 'Menu Footer');
}
add_action( 'after_setup_theme', 'add_menu_to_theme' );


function add_page_attribut() {
    add_post_type_support( 'page', 'page-attributes' );
}
add_action('init', 'add_page_attribut');



?>


