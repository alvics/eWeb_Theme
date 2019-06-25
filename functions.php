<?php
// Adding the Stylesheet & JavaScript files
get_template_part('inc/enqueue');

// Adding Bootstrap Navwalker Menu Class
get_template_part( 'inc/navwalker', 'class' );

// Theme support
add_theme_support( 'post-thumbnails' );


// Side bar Page widget
register_sidebar(
	array(
		'name' => 'Right Sidebar',
		'id'   => 'right-sidebar',
		'class'=> 'side-bar',
		'before_title' => '<h4 class="side-bar-title">',
		'after_title' => '</h4>'
	)
);

register_sidebar(
	array(
		'name' => 'Left Sidebar',
		'id'   => 'left-sidebar',
		'class'=> 'side-bar',
		'before_title' => '<h4 class="side-bar-title">',
		'after_title' => '</h4>'
	)
);
// Footer widget
//register_sidebar(
//	array(
//		'name' => 'Footer',
//		'id'   => 'ew-footer',
//		'class'=> 'ew-footer',
//		'before_title' => '<h4 class="footer-title">',
//		'after_title' => '</h4>'
//	)
//);
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
