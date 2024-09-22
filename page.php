<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>
<?php if ( have_posts() ): ?>

    <div class="container">
        <div class="page-content pt-6 md:pt-16">
			<?php
			/* Start the Loop */
			while ( have_posts() ): the_post();
				the_content();
			endwhile; // End of the loop.
			?>
        </div>
    </div>

<?php endif; ?>

<?php get_footer();
