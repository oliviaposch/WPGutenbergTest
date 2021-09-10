<?php

// Register Custom Post Type
function news() {

	$labels = array(
		'name'                  => _x( 'Beiträge', 'Post Type General Name', 'post-sixa' ),
		'singular_name'         => _x( 'Beitrag', 'Post Type Singular Name', 'post-sixa' ),
		'menu_name'             => __( 'News', 'post-sixa' ),
		'name_admin_bar'        => __( 'News', 'post-sixa' ),
		'archives'              => __( 'Item Archives', 'post-sixa' ),
		'attributes'            => __( 'Item Attributes', 'post-sixa' ),
		'parent_item_colon'     => __( 'Parent Item:', 'post-sixa' ),
		'all_items'             => __( 'Alle Beiträge', 'post-sixa' ),
		'add_new_item'          => __( 'neuen Beitrag einfügen', 'post-sixa' ),
		'add_new'               => __( 'neuen Beitrag einfügen', 'post-sixa' ),
		'new_item'              => __( 'neuen Beitrag', 'post-sixa' ),
		'edit_item'             => __( 'Beitrag bearbeiten', 'post-sixa' ),
		'update_item'           => __( 'Beitrag aktualisieren', 'post-sixa' ),
		'view_item'             => __( 'Beitrag ansehen', 'post-sixa' ),
		'view_items'            => __( 'Beiträge ansehen', 'post-sixa' ),
		'search_items'          => __( 'Beitrag suchen', 'post-sixa' ),
		'not_found'             => __( 'nicht gefunden', 'post-sixa' ),
		'not_found_in_trash'    => __( 'nicht im Papierkorb gefunden', 'post-sixa' ),
		'featured_image'        => __( 'Featured Image', 'post-sixa' ),
		'set_featured_image'    => __( 'Set featured image', 'post-sixa' ),
		'remove_featured_image' => __( 'Remove featured image', 'post-sixa' ),
		'use_featured_image'    => __( 'Use as featured image', 'post-sixa' ),
		'insert_into_item'      => __( 'Insert into item', 'post-sixa' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'post-sixa' ),
		'items_list'            => __( 'Beiträge Liste', 'post-sixa' ),
		'items_list_navigation' => __( 'Items list navigation', 'post-sixa' ),
		'filter_items_list'     => __( 'Filter items list', 'post-sixa' ),
	);
	$args = array(
		'label'                 => __( 'Beitrag', 'post-sixa' ),
		'description'           => __( 'news blog using wp-react', 'post-sixa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news', 0 );

add_action( 'init', 'add_news_to_json_api', 30 );
function add_news_to_json_api(){
    global $wp_post_types;
    $wp_post_types['news']->show_in_rest = true;
}