<?php

/**
 * Jobs Enqueue
 */

 
function rent_enqueue_scripts() {
	wp_enqueue_script( 'scripts', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );
	wp_localize_script( 'scripts', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'rent_enqueue_scripts' );

/**
 * Functions takes care of the like of the rents
 *
 * @return void
 */
function rent_like() {
	$rent_id = esc_attr( $_POST['rent_id'] );

	$like_number = get_post_meta( $rent_id, 'likes', true );

    if ( empty( $like_number ) ) {
        update_post_meta( $rent_id, 'likes', 1 );
    } else {
        $like_number = $like_number + 1;
        update_post_meta( $rent_id, 'likes', $like_number );
    }

    wp_die();
}
add_action( 'wp_ajax_nopriv_rent_like', 'rent_like' );
add_action( 'wp_ajax_rent_like', 'rent_like' );

