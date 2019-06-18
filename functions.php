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
		'name' => 'Page Sidebar',
		'id'   => 'page-sidebar',
		'class'=> 'side-bar',
		'before_title' => '<h4 class="side-bar-title">',
		'after_title' => '</h4>'
	)
);
// Footer widget
register_sidebar(
	array(
		'name' => 'Footer',
		'id'   => 'ew-footer',
		'class'=> 'ew-footer',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>'
	)
);
