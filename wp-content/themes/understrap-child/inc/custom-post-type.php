<?php
add_action( 'init', 'portfolio_register' );

function portfolio_register() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Project', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Project item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Project item', 'understrap' ),
        'new_item'           => __( 'New Project item', 'understrap' ),
        'edit_item'          => __( 'Edit Project item', 'understrap' ),
        'view_item'          => __( 'View Project item', 'understrap' ),
        'all_items'          => __( 'All Project items', 'understrap' ),
        'search_items'       => __( 'Search Project items', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Project items:', 'understrap' ),
        'not_found'          => __( 'No Projects found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Projects items', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );

    register_post_type( 'Projects', $args );
}