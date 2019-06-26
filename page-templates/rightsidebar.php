<?php
/**
 * Template Name: Right Side Bar Page
 *
 * The template for displaying a right side bar page
 *
 * @package  e_web
 *
 */
?>

<?php get_header();?>

<div class="container">

	<div class="row mt-3">

		<div class="col-md-9">
			<div class="content">
				<h1><?php the_title(); ?></h1>

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile;  endif; ?>
			</div>
			</div>
        <!-- Right Side Bar -->
			<div class="col-md-3 mt-3">	<?php
				if(is_active_sidebar('right-sidebar')){
					dynamic_sidebar('right-sidebar');
				}
				?></div>


	</div>





</div>

<?php get_footer(); ?>



