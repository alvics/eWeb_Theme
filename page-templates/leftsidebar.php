<?php
/**
 * Template Name: Left Side Bar Page
 *
 * The template for displaying a left side bar page
 *
 * @package  e_web
 *
 */
?>


<?php get_header();?>

<div class="container">

	<div class="row mt-3">
<!-- Left Side Bar -->
		<div class="col-md-3 mt-3">	<?php
			if(is_active_sidebar('left-sidebar')){
				dynamic_sidebar('left-sidebar');
			}
			?></div>

		<div class="col-md-9">
			<div class="content">
				<h1><?php the_title(); ?></h1>

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile;  endif; ?>
			</div>
		</div>




	</div>





</div>

<?php get_footer(); ?>



