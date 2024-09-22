<?php
/**
 * Template Name: Homepage v1
 */

get_header();
?>

<div class="page-content">

	<?php while ( have_posts() ): ?>
		<?php the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>
