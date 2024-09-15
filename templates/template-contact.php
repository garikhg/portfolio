<?php
/**
 * Template Name: Page Contact Me
 */

get_header();
?>

<?php get_template_part( 'template-parts/header/page-header' ); ?>
<div class="page-content">

	<?php while ( have_posts() ) {
		the_post();
		the_content();
	} ?>
</div>

<?php get_footer(); ?>
