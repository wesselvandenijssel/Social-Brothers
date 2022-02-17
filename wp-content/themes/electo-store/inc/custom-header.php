<?php
/**
 * @package Electo Store
 * @subpackage electo-store
 * @since electo-store 1.0
 * Setup the WordPress core custom header feature.
 * @uses electo_store_header_style()
*/

function electo_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'electo_store_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 120,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'electo_store_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'electo_store_custom_header_setup' );

if ( ! function_exists( 'electo_store_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'electo_store_header_style' );
function electo_store_header_style() {
	if ( get_header_image() ) :
	$electo_store_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'electo-store-basic-style', $electo_store_custom_css );
	endif;
}
endif;