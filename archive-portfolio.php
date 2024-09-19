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

    <div class="archive-content portfolio-projects pt-20">
		<?php portfolio_the_portfolio_filters(); ?>
        <div class="portfolio-grid flex flex-wrap -mx-5">
			<?php while ( have_posts() ): ?>
				<?php the_post(); ?>
				<?php get_template_part( 'template-parts/content/content-portfolio' ) ?>
			<?php endwhile; ?>
        </div>
		<?php portfolio_the_post_navigation(); ?>

    </div>
</div>

<?php get_footer(); ?>
