<?php
/**
 * Template Name: Page Portfolio
 *
 * Portfolio items perspective https://perspective.js.org/
 */

get_header();
?>
<!--
 Page header class if has background image: page-header min-h-[340px] flex items-center justify-center bg-frost-gray rounded-2xl px-16
-->
<?php get_template_part( 'template-parts/header/page-header', '', [
	'description' => esc_html( 'Explore a curated showcase of my work' )
] ); ?>

<div class="page-content pt-20">
    <div class="portfolio-projects">
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

        <div class="portfolio-grid grid grid-cols-3 -mx-5">
            <div class="portfolio-item-wrap w-4/12 grid-item col-span-1 apps" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-1.jpeg' ?>">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button"
                            >
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-item-wrap w-8/12 grid-item col-span-2 apps" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-2.jpeg' ?>">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button">
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-item-wrap w-4/12 grid-item col-span-1 apps" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-3.jpeg' ?>">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button">
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-item-wrap w-4/12 grid-item col-span-1 mockup" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-4.jpeg' ?>">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button">
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-item-wrap w-4/12 grid-item col-span-1 identity" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-1.jpeg' ?>"
                                     alt="">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button">
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-item-wrap w-8/12 grid-item col-span-2 creative" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-5.jpeg' ?>">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button">
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-item-wrap w-4/12 grid-item col-span-1 branding" data-tilt-perspective="60000">
                <div class="portfolio-item card p-5">
                    <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                        <div class="image-holder">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-6.jpeg' ?>">
                            </a>
                        </div>
                        <div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                            <button class="w-14 h-14 flex items-center justify-center text-primary-foreground"
                                    type="button">
                                <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                                <span class="button-text sr-only"><?php esc_html_e( 'Show', 'portfolio' ); ?></span>
                            </button>
                        </div>
                        <div class="overlay-details w-full bg-gradient-to-t from-primary to-transparent absolute bottom-0 p-[3vh]">
                            <div class="heading">
                                <h4 class="text-2xl font-semibold text-white">Stickers Pack</h4>
                                <div class="show-project mt-2">
                                    <div class="project-category__holder">
                                        <ul class="project-category__list flex gap-1.5">
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Identity</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="text-link text-link-foreground text-sm project-category__link inline-block">
                                                    <span class="category-text">Mockup</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="show-project__link text-white font-semibold">
                                        <a href="#" class="text-link text-link-foreground">
                                            <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination-holder mt-4">
            <div class="join">
                <button class="join-item btn">1</button>
                <button class="join-item btn btn-active">2</button>
                <button class="join-item btn">3</button>
                <button class="join-item btn">4</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
