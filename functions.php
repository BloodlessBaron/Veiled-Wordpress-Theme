<?php

if ( ! function_exists( 'sidebars' ) ) {

// Register Sidebars
function sidebars() {

	$args = array(
		'id'            => 'leftbar',
		'name'          => __( 'Left Sidebar', 'text_domain' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'rightbar',
		'name'          => __( 'Right Sidebar', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'sidebars' );

}