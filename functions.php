<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 200, true );

add_image_size( 'post-thumbnail', 300, 200, true );

if ( function_exists('register_sidebar') ){
	
	register_sidebar( array(
		'name'          => __( 'Menü', 'jrk-menu' ),
		'id'            => 'jrk-menu',
		'description'   => __( 'Menü', 'jrk' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Banner', 'jrk-banner' ),
		'id'            => 'jrk-banner',
		'description'   => __( 'Banner', 'jrk' ),
		'before_widget' => '<div class="img-responsive img-max">',
		'after_widget'  => '</div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Mini Banner', 'jrk-banner' ),
		'id'            => 'jrk-minibanner',
		'description'   => __( 'Mini-Banner', 'jrk' ),
		'before_widget' => '<div class="img-responsive img-max">',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Fußzeile 1', 'jrk-footer1' ),
		'id'            => 'jrk-footer1',
		'description'   => __( 'Footer 1', 'jrk' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Fußzeile 2', 'jrk-footer2' ),
		'id'            => 'jrk-footer2',
		'description'   => __( 'Footer 2', 'jrk' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Fußzeile 3', 'jrk-footer3' ),
		'id'            => 'jrk-footer3',
		'description'   => __( 'Footer 3', 'jrk' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Fußzeile 4', 'jrk-footer3' ),
		'id'            => 'jrk-footer4',
		'description'   => __( 'Footer 4', 'jrk' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
}

function wps_disable_admin_bar( $content ) {
    return ( current_user_can( 'administrator' ) ) ? $content : false;
}

add_filter(
    'show_admin_bar',
    'wps_disable_admin_bar'
);

function check_user_in($atts, $content = null) { 
    if ( is_user_logged_in() ){
		return $content;
	}
	else {
		return;
	}
}
add_shortcode('loggedin', 'check_user_in' );

function check_user_out($atts, $content = null) {   
    if ( is_user_logged_in() ){
		return;
	}
	else {
		return $content;
	}
}
add_shortcode('loggedout', 'check_user_out' );
?>