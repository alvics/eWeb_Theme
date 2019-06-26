<?php
/**
 * Template Name: Full Width Page
 *
 * The template for displaying a full width page
 *
 * @package  e_web
 *
 */
?>


<?php get_header();?>

<div class="container-fluid">

	<h1><?php the_title(); ?></h1>

	<div class="content">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile;  endif; ?>

	</div>

</div>

<?php get_footer(); ?>

