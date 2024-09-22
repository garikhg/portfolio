<?php
/**
 * The template for displaying portfolio archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<div class="container">
	<?php get_template_part( 'template-parts/header/archive-header-portfolio' ); ?>

    <div class="archive-content portfolio-projects pt-6 md:pt-16">
		<?php // portfolio_the_portfolio_filters(); ?>
        <div class="portfolio-grid grid grid-cols-1 md:grid-cols-2 -mx-4 sm:-mx-3">
			<?php while ( have_posts() ): ?>
				<?php the_post(); ?>
				<?php get_template_part( 'template-parts/content/content-portfolio' ) ?>
			<?php endwhile; ?>
        </div>
		<?php portfolio_the_post_navigation(); ?>

    </div>
</div>

<?php get_footer(); ?>
