<?php
/**
 * Template Name: Homepage v1
 */

get_header();
?>

<div class="container">

    <div class="hero-slider-wrapper h-[480px] bg-frost-gray rounded-2xl">
        <div class="swiper hero-slider rounded-2xl overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-2.jpeg' ?>"
                         class="block w-full max-w-full h-[480px] object-cover"
                         alt=""
                    />
                </div>

                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/demo/projects/project-2-1.jpeg' ?>"
                         class="block w-full max-w-full h-[480px] object-cover"
                         alt=""
                    />
                </div>
            </div>
        </div>

    </div>

</div><!-- .container -->

<div class="page-content mt-20">
    <section class="portfolio-projects bg-background rounded-xl p-20 mt-24">
        <div class="container">
            <div class="max-w-xl mb-20">
                <div class="section-heading">
                    <span class="badge badge-outline mb-2">39 completed projects</span>
                    <h2 class="section-title text-4xl font-heading font-bold">
                        Get inspired
                    </h2>
                    <div class="section-description text-lg mt-3">
                        <p>
                            Select from any of our carefuly <strong>crafted website templates</strong> to best fit
                            your
                            personal style and professional needs.
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="/portfolio"
                           class="inline-flex items-center gap-2 py-2 px-4 whitespace-nowrap rounded-full bg-primary text-primary-foreground text-sm font-semibold">
                            <span class="btn-text">See all works</span>
                            <span class="btn-icon"><i class="icon-arrow-up-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="slider-outer-wrapper">
                <div class="slider-outer-end">
                    <div class="portfolio-grid grid grid-cols-3 -mx-5">
                        <div class="portfolio-item-wrap grid-item col-span-1 apps" data-tilt-perspective="60000">
                            <div class="portfolio-item card px-5">
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
                        <div class="portfolio-item-wrap grid-item col-span-1 apps" data-tilt-perspective="60000">
                            <div class="portfolio-item card px-5">
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
                        <div class="portfolio-item-wrap grid-item col-span-1 apps" data-tilt-perspective="60000">
                            <div class="portfolio-item card px-5">
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
                    </div>
                </div>
                <div class="slider-controls flex justify-between mt-4">
                    <div class="slider-counter flex items-center gap-3">
                        <span class="slider-count-current">1</span>
                        <span class="slider-count-divider block w-10 h-0.5 bg-primary"></span>
                        <span class="slider-count-total">4</span>
                    </div>

                    <div class="slider-nav-bottom flex gap-6">
                        <div class="slider-btn-prev w-14 h-14 flex items-center justify-center">
                            <i class="icon-arrow-left text-2xl"></i>
                        </div>
                        <div class="slider-btn-next w-14 h-14 flex items-center justify-center">
                            <i class="icon-arrow-right text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<?php get_footer(); ?>
