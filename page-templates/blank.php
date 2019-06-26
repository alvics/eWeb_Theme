<?php

/**
 * Template Name: Full Blank Page
 *
 * The template for displaying a blank page
 *
 * @package  e_web
 *
 */
?>

<?php get_header();?>

<div class="container">

	<h1><?php the_title(); ?></h1>

	<div class="content">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile;  endif; ?>

	</div>

</div>

<?php get_footer(); ?>


