<?php

// Theme Stylesheet & JavaScript files
get_template_part('inc/enqueue');

// Adding Bootstrap Navwalker Menu Class
get_template_part( 'inc/navwalker', 'class' );

// Theme Widgets
get_template_part('inc/widgets');

// Theme support
add_theme_support( 'post-thumbnails' );

// Theme support Woo-commerce
//function e_web_add_woocommerce_support() {
//	add_theme_support( 'woocommerce' );
//}
//
//add_action( 'after_setup_theme', 'e_web_add_woocommerce_support' );

/*
 * For woocommerce add a
 * woocommerce.php, copy pages.php , add clean template add in <?php woocommerce_content(); ?>
 * template-shop.php,
 * template-cart.php
 *
 *
 *overrides change woocommerce templates
 * copy woocommerce template folder add in to theme root dir rename to woocommerce
 *
 */

// Add image sizes
add_image_size('post_image', 1100, 750, true);
add_image_size('archive_image', 500, 350, true);



