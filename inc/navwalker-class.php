<?php

// Register Custom Navigation Walker Menu
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function register_navwalker(){
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'e_web' ),
		'mobile-menu' => __( 'Mobile Menu', 'e_web' )
	) );
}

add_action('init', 'register_navwalker');





