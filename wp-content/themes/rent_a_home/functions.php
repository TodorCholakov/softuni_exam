<?php 

/**
 * This function takes care of handling the assets wit enqueue
 */
function softuni_assets() {
    wp_enqueue_style('rent-home', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), filemtime(get_template_directory() . '/assets/css/master.css'), '');
}
add_action('wp_enqueue_scripts', 'softuni_assets');




function get_the_post_dateA() {
$post_date = get_the_date( 'Y-m-d' );
$days_ago = human_time_diff( strtotime( $post_date ), current_time( 'timestamp' ) );

get_template_part( 'rent-item' );
}
add_action( 'wp', 'get_the_post_dateA' );


/** Function that when the post was cretated */
function get_the_post_date() {
    $post_date = get_the_date( 'Y-m-d' );
    $days_ago = human_time_diff( strtotime( $post_date ), current_time( 'timestamp' ) );
    set_query_var('days_ago', $days_ago);
    get_template_part('template-part');
}
add_action('wp', 'get_the_post_date');