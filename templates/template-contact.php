<?php
/**
 * Template Name: Page Contact Me
 */

get_header();
?>

<div class="container">
	<?php get_template_part( 'template-parts/header/page-header' ); ?>
    <div class="page-content pt-6 md:pt-16">

		<?php while ( have_posts() ) {
			the_post();
			the_content();
		} ?>

    </div>
</div>

<?php get_footer(); ?>
