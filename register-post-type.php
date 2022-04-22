<?php

namespace cpl\podcast_management;

function cpl_register_podcast_episode() {

	$labels = array(
		'name'                  => _x( 'Podcast Episodes', 'Post Type General Name', 'cpl-podcast-management' ),
		'singular_name'         => _x( 'Podcast Episode', 'Post Type Singular Name', 'cpl-podcast-management' ),
		'menu_name'             => __( 'Podcast Episodes', 'cpl-podcast-management' ),
		'name_admin_bar'        => __( 'Podcast Episode', 'cpl-podcast-management' ),
		'archives'              => __( 'Podcast Episode Archives', 'cpl-podcast-management' ),
		'attributes'            => __( 'Podcast Episode Attributes', 'cpl-podcast-management' ),
		'parent_item_colon'     => __( 'Parent Podcast Episode:', 'cpl-podcast-management' ),
		'all_items'             => __( 'All Podcast Episodes', 'cpl-podcast-management' ),
		'add_new_item'          => __( 'Add New Podcast Episode', 'cpl-podcast-management' ),
		'add_new'               => __( 'Add New', 'cpl-podcast-management' ),
		'new_item'              => __( 'New Podcast Episode', 'cpl-podcast-management' ),
		'edit_item'             => __( 'Edit Podcast Episode', 'cpl-podcast-management' ),
		'update_item'           => __( 'Update Podcast Episode', 'cpl-podcast-management' ),
		'view_item'             => __( 'View Podcast Episode', 'cpl-podcast-management' ),
		'view_items'            => __( 'View Podcast Episodes', 'cpl-podcast-management' ),
		'search_items'          => __( 'Search Podcast Episode', 'cpl-podcast-management' ),
		'not_found'             => __( 'Not found', 'cpl-podcast-management' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cpl-podcast-management' ),
		'featured_image'        => __( 'Featured Image', 'cpl-podcast-management' ),
		'set_featured_image'    => __( 'Set featured image', 'cpl-podcast-management' ),
		'remove_featured_image' => __( 'Remove featured image', 'cpl-podcast-management' ),
		'use_featured_image'    => __( 'Use as featured image', 'cpl-podcast-management' ),
		'insert_into_item'      => __( 'Insert into item', 'cpl-podcast-management' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cpl-podcast-management' ),
		'items_list'            => __( 'Podcast Episodes list', 'cpl-podcast-management' ),
		'items_list_navigation' => __( 'Podcast Episodes list navigation', 'cpl-podcast-management' ),
		'filter_items_list'     => __( 'Filter items list', 'cpl-podcast-management' ),
	);
	$rewrite = array(
		'slug'                  => 'podcast',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Podcast Episode', 'cpl-podcast-management' ),
		'description'           => __( 'Podcast episode', 'cpl-podcast-management' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'delete_with_user'    	=> false,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'template'            => array(
			array(
				'core/html',
			),
			array(
				'core/heading',
				array(
					'content' => 'Find us on:',
				),
			),
		),
	);
	register_post_type( 'podcast_episode', $args );

}
