<?php

/***
* Plugin Name: modal_install
*
*/


function modal_shortcode( $content = null ) {
	// Enqueue the stylesheet now
	wp_enqueue_style( 'bs_modal_css' ); 
	wp_enqueue_style( 'po_bible_css' ); 
	wp_enqueue_script('modal_js');
	
	return $content;
}

// Our Shortcode Action
add_shortcode( 'use_modal', 'modal_shortcode' );

// Register the Stylesheet so it's ready to go.
function modal_enqueue_scripts() {
    wp_register_script( 'modal_js', plugins_url('/bs_modal/bs_modal.js', __FILE__ ), ['jquery'], '', true );
 
}
// Enqueue Stylesheet Action
add_action( 'wp_enqueue_scripts', 'modal_enqueue_scripts' );


// Register the Stylesheet so it's ready to go.
function modal_enqueue_css() {
    wp_register_style( 'bs_modal_css', plugins_url('/bs_modal/bs_modal.css', __FILE__ ), '', '', false ); 
    wp_register_style( 'po_bible_css', plugins_url('/bs_mobal/po_bible.css', __FILE__ ), '', '', false ); 
    
}
// Enqueue Stylesheet Action
add_action( 'wp_enqueue_scripts', 'modal_enqueue_css' );

?>
