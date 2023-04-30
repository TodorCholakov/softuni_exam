<?php
/**
 * Register a custom post type called "rent".
 *
 * @see get_post_type_labels() for label keys.
 */
function rent_house_cpt() {
	$labels = array(
		'name'                  => _x( 'Rents', 'Post type general name', 'rent_house' ),
		'singular_name'         => _x( 'Rent', 'Post type singular name', 'rent_house' ),
		'menu_name'             => _x( 'Rents', 'Admin Menu text', 'rent_house' ),
		'name_admin_bar'        => _x( 'Rent', 'Add New on Toolbar', 'rent_house' ),
		'add_new'               => __( 'Add New', 'rent_house' ),
		'add_new_item'          => __( 'Add New Rent', 'rent_house' ),
		'new_item'              => __( 'New Rent', 'rent_house' ),
		'edit_item'             => __( 'Edit Rent', 'rent_house' ),
		'view_item'             => __( 'View Rent', 'rent_house' ),
		'all_items'             => __( 'All Rents', 'rent_house' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'rent' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'rent', $args );

    // flush_rewrite_rules();
}
add_action( 'init', 'rent_house_cpt' );

/**
 * Register a 'field' taxonomy for post type 'rent', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function rent_house_field_taxonomy() {
    $labels = array(
		'name'              => _x( 'Field', 'taxonomy general name', 'rent_house' ),
		'singular_name'     => _x( 'Field', 'taxonomy singular name', 'rent_house' ),
		'search_items'      => __( 'Search Field', 'rent_house' ),
		'all_items'         => __( 'All Field', 'rent_house' ),
		'parent_item'       => __( 'Parent Field', 'rent_house' ),
		'parent_item_colon' => __( 'Parent Field:', 'rent_house' ),
		'edit_item'         => __( 'Edit Field', 'rent_house' ),
		'update_item'       => __( 'Update Field', 'rent_house' ),
		'add_new_item'      => __( 'Add New Field', 'rent_house' ),
		'new_item_name'     => __( 'New Field Name', 'rent_house' ),
		'menu_name'         => __( 'Field', 'rent_house' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);


    register_taxonomy( 'field', 'rent', $args );
}
add_action( 'init', 'rent_house_field_taxonomy' );

/**
 * This is a function registering a custom Rent Location taxonomy
 *
 * @return void
 */
function rent_house_location_taxonomy() {
    $labels = array(
		'name'              => _x( 'Location', 'taxonomy general name', 'rent_house' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'rent_house' ),
		'search_items'      => __( 'Search Locations', 'rent_house' ),
		'all_items'         => __( 'All Locations', 'rent_house' ),
		'parent_item'       => __( 'Parent Location', 'rent_house' ),
		'parent_item_colon' => __( 'Parent Location:', 'rent_house' ),
		'edit_item'         => __( 'Edit Location', 'rent_house' ),
		'update_item'       => __( 'Update Locations', 'rent_house' ),
		'add_new_item'      => __( 'Add New Location', 'rent_house' ),
		'new_item_name'     => __( 'New Location Name', 'rent_house' ),
		'menu_name'         => __( 'Location', 'rent_house' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'location', 'job', $args );
}
add_action( 'init', 'rent_house_location_taxonomy' );

/**
 * This is a function registering a custom Rent Company taxonomy
 *
 * @return void
 */
function rent_company_taxonomy() {
    $labels = array(
		'name'              => _x( 'Company', 'taxonomy general name', 'rent_house' ),
		'singular_name'     => _x( 'Company', 'taxonomy singular name', 'rent_house' ),
		'search_items'      => __( 'Search Companies', 'rent_house' ),
		'all_items'         => __( 'All Companies', 'rent_house' ),
		'parent_item'       => __( 'Parent Company', 'rent_house' ),
		'parent_item_colon' => __( 'Parent Company:', 'rent_house' ),
		'edit_item'         => __( 'Edit Company', 'rent_house' ),
		'update_item'       => __( 'Update Companies', 'rent_house' ),
		'add_new_item'      => __( 'Add New Company', 'rent_house' ),
		'new_item_name'     => __( 'New Company Name', 'rent_house' ),
		'menu_name'         => __( 'Company', 'rent_house' ),
	);

    $args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);

    register_taxonomy( 'company', 'rent', $args );
}
add_action( 'init', 'rent_company_taxonomy' );