<?php

/**
 * Template part for displaying posts
 *
 * @package  e_web
 *
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="entry-header">
		<?php
if (is_sticky() && is_home() && !is_paged()) {
    printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'e_web'));
}
if (is_singular()):
    the_title('<h1 class="entry-title">', '</h1>');
else:
    the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
endif;
?>
	</header><!-- .entry-header -->


<?php

the_content();

?>

</article><!-- #post-<?php the_ID();?> -->