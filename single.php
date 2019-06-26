<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package  e_web
 *
 */

get_header(); ?>

<div id="primary" class=" content-area single-post-content-area">
	<main id="main" class="site-main" role="main">
           <div class="container single-post-container">



               <h1><?php the_title(); ?></h1>

               <div class="row">
                   <div class="col-md-9">

	                   <?php if(has_post_thumbnail()): ?>
                       <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="img-fluid mb-5" alt="<?php the_title(); ?>">
                       <?php endif; ?>

                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
	                                the_content();
	                                /*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
                                    get_template_part( 'content', get_post_format() );

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;

                                    // Previous/next post navigation.
                                    the_post_navigation( array(
                                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'e_web' ) . '</span> ' .
                                                       '<span class="screen-reader-text">' . __( 'Next post:', 'e_web' ) . '</span> ' .
                                                       '<span class="post-title">%title</span>',
                                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'e_web' ) . '</span> ' .
                                                       '<span class="screen-reader-text">' . __( 'Previous post:', 'e_web' ) . '</span> ' .
                                                       '<span class="post-title">%title</span>',
                                    ) );

                                    // End the loop.
                                endwhile;
                                ?>
                       <?php the_tags(); ?>

                   </div> <!-- .col-9 -->

                   <div class="col-md-3 post-right-sidebar">
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
