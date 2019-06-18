<?php
// Adding the Stylesheet
function load_stylesheets() {
	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), 1, 'all'  );
	wp_enqueue_style('stylesheet');

	wp_register_style('custom', get_template_directory_uri() . '/app.css', array(), 1, 'all'  );
	wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Adding Custom JS File
function load_JS() {
	wp_deregister_script( 'jquery' );

	wp_register_script( 'custom', get_template_directory_uri() . '/app.js', '', 1, true );
	wp_enqueue_script( 'custom' );

}

add_action( 'wp_enqueue_scripts', 'load_JS' );
