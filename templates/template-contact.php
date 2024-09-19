<?php
/**
 * Template Name: Page Contact Me
 */

get_header();
?>

<div class="container">
	<?php get_template_part( 'template-parts/header/page-header' ); ?>
    <div class="page-content pt-20">

		<?php while ( have_posts() ) {
			the_post();
			the_content();
		} ?>

    </div>
</div>

<?php get_footer(); ?>
