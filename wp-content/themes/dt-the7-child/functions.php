<?php
// load child theme textdomain
/*
function presscore_load_text_domain() {
	load_child_theme_textdomain( 'presscore', get_stylesheet_directory() . '/languages' );
}
*/

/**
 * Your code here.
 *
 */
 
 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
 function my_theme_enqueue_styles() {
  
	 $parent_style = 'dt-the7'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
  
	 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'child-style',
		 get_stylesheet_directory_uri() . '/style.css',
		 array( $parent_style ),
		 wp_get_theme()->get('Version')
	 );
 }
 ?>