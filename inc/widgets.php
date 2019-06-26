<?php
/**
 * e_Web declare widgets
 *
 * @package e_web
 *
 */

// Pages widget Side bar
register_sidebar(
	array(
		'name' => 'Right Sidebar',
		'id'   => 'right-sidebar',
		'class'=> 'side-bar',
		'before_title' => '<h4 class="side-bar-title">',
		'after_title' => '</h4>'
	)
);

//  Pages widget Side bar
register_sidebar(
	array(
		'name' => 'Left Sidebar',
		'id'   => 'left-sidebar',
		'class'=> 'side-bar',
		'before_title' => '<h4 class="side-bar-title">',
		'after_title' => '</h4>'
	)
);

//  Blog Page widget Side bar
register_sidebar(
	array(
		'name' => 'Blog Sidebar',
		'id'   => 'blog-sidebar',
		'class'=> 'blog-side-bar',
		'before_title' => '<h4 class="side-bar-title">',
		'after_title' => '</h4>'
	)
);

// Register footer widgets
register_sidebar( array(
	'name' => 'Footer 1',
	'id' => 'footer-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => 'Footer 2',
	'id' => 'footer-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => 'Footer 3',
	'id' => 'footer-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => 'Footer 4',
	'id' => 'footer-4',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
