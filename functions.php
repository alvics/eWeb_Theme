<?php

// Theme Stylesheet & JavaScript files
get_template_part('inc/enqueue');

// Adding Bootstrap Navwalker Menu Class
get_template_part( 'inc/navwalker', 'class' );

// Theme Widgets
get_template_part('inc/widgets');

// Theme support
add_theme_support( 'post-thumbnails' );

// Add image sizes
add_image_size('post_image', 1100, 750, true);
add_image_size('archive_image', 500, 350, true);



