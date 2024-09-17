<?php
/**
 * Template part for displaying portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="project-<?php the_ID(); ?>" <?php get_post_class( 'project' ) ?>>
    <div class="entry-content space-y-8">
		<?php the_content(); ?>
    </div>
</article>
