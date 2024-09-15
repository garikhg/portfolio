<?php
/**
 * The template for displaying portfolio archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

?>

<?php get_template_part( 'template-parts/header/archive-header-portfolio' ); ?>

<div class="archive-content portfolio-projects pt-20">
    <div class="portfolio-filter flex gap-2 pb-5" data-filter="portfolio" data-filter-paged="true">
        <p>Filter by:</p>
        <ul class="portfolio-filter__list flex gap-2">
            <li class="flex items-center gap-1 is-active">
                <a href="#all"
                   data-category-count="15"
                   data-filter="*"
                   class="portfolio-filter-button text-link"
                >
                    <span class="pointer-events-none text">All</span>
                    <sup class="pointer-events-none">15</sup>
                </a>
            </li>
            <li class="flex items-center gap-1">
                <a href="#apps"
                   data-category-count="3"
                   data-filter=".apps"
                   class="portfolio-filter-button text-link"
                >
                    <span class="pointer-events-none text">Apps</span>
                    <sup class="pointer-events-none">3</sup>
                </a>
            </li>
            <li class="flex items-center gap-1">
                <a href="#branding"
                   data-category-count="4"
                   data-filter=".branding"
                   class="portfolio-filter-button text-link">
                    <span class="pointer-events-none text">Branding</span>
                    <sup class="pointer-events-none">4</sup>
                </a>
            </li>
            <li class="flex items-center gap-1">
                <a href="#creative"
                   data-category-count="1"
                   data-filter=".creative"
                   class="portfolio-filter-button text-link"
                >
                    <span class="pointer-events-none text">Creative</span>
                    <sup class="pointer-events-none">1</sup>
                </a>
            </li>
            <li class="flex items-center gap-1">
                <a href="#identity"
                   data-category-count="5"
                   data-filter=".identity"
                   class="portfolio-filter-button text-link"
                >
                    <span class="pointer-events-none text">Identity</span>
                    <sup class="pointer-events-none">5</sup>
                </a>
            </li>
            <li class="flex items-center gap-1">
                <a href="#mockup"
                   data-category-count="2"
                   data-filter=".mockup"
                   class="portfolio-filter-button text-link"
                >
                    <span class="pointer-events-none text">Mockup</span>
                    <sup class="pointer-events-none">2</sup>
                </a>
            </li>
        </ul>
    </div>

    <div class="portfolio-grid flex flex-wrap -mx-5">

		<?php while ( have_posts() ): ?>
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/content/content-portfolio-excerpt' ) ?>
		<?php endwhile; ?>
    </div>

    <!--<div class="pagination-holder mt-4">
        <div class="join">
            <button class="join-item btn">1</button>
            <button class="join-item btn btn-active">2</button>
            <button class="join-item btn">3</button>
            <button class="join-item btn">4</button>
        </div>
    </div>-->
</div>

<?php get_footer(); ?>
