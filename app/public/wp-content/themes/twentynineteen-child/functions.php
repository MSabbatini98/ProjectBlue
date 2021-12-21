<?php


function enqueue_parent_styles() {
	
	// enqueue parent styles
	wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
	
	// enqueue child styles
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));

	// //+ enqueue child theme's additional css files
	// //+ This will look for a stylesheet named "fonts" and load it.
	// wp_enqueue_style( 'fonts', get_stylesheet_directory());	
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

// !! Additional CSS files
wp_enqueue_style( 'fonts', get_stylesheet_directory_uri(). "/fonts/fonts.css" );	
wp_enqueue_style( 'header', get_stylesheet_directory_uri()."/css/header.css" );

// function that runs when shortcode is called
function wpb_demo_shortcode() { 
	
	// Things that you want to do. 
	$user = wp_get_current_user();
	$user_login = $user->user_login ;
	$message = 'Ciao Ciao Ciao ' . $user_login; 
	// Output needs to be return
	return $message;
} 
// register shortcode
add_shortcode('greeting', 'wpb_demo_shortcode');

?>
