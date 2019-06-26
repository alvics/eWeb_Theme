<?php
/**
 * The template for displaying archive pages
 *
 * @package  e_web
 */

get_header(); ?>

<div id="primary" class=" content-area">
	<main id="main" class="site-main" role="main">
		<div class="container archive-post-container">

            <div class="row">
				<div class="col-md-9 pb-3">
                    <h1>Archive Template</h1>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>
                    <div class="single-archive">
					<?php if(has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('archive_image'); ?>" class="img-fluid mb-5" alt="<?php the_title(); ?>"></a>
                    <?php endif; ?>

                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <?php the_excerpt(); ?>
                    </div>

						<?php
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
					      ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

                        <!-- End the loop. -->
					 <?php endwhile; ?>

                    <!-- Paginate Links -->
                    <div class="paginate-links text-center">
					<?php
					global $wp_query;

					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );
					?>
                    </div>
                    <!-- Previous/next post navigation. -->
<!--					--><?php //the_post_navigation( array(
//						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'e_web' ) . '</span> ' .
//						               '<span class="screen-reader-text">' . __( 'Next post:', 'e_web' ) . '</span> ' .
//						               '<span class="post-title">%title</span>',
//						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'e_web' ) . '</span> ' .
//						               '<span class="screen-reader-text">' . __( 'Previous post:', 'e_web' ) . '</span> ' .
//						               '<span class="post-title">%title</span>',
//					) ); ?>

				</div> <!-- .col-9 -->

				<div class="col-md-3 archive-right-sidebar">
					<?php
					if(is_active_sidebar('blog-sidebar')){
						dynamic_sidebar('blog-sidebar');
					}
					?> </div> <!-- .col-3 Side bar -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

