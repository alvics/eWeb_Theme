<?php
// Template Name: Right Side Bar Page
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

			<div class="col-md-3 mt-3"><?php get_sidebar(); ?></div>


	</div>





</div>

<?php get_footer(); ?>



