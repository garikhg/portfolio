<?php
/**
 * Template part for displaying portfolio archives results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

$wrapper_class = 'portfolio-item-wrap w-1/2 grid-item apps'
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $wrapper_class ); ?> data-tilt-perspective="60000">
    <div class="portfolio-item card p-5">
        <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
            <div class="image-holder">
                <a href="<?php echo get_permalink() ?>">
					<?php
					$thumbnail_classes = 'attachment-post_thumbnail size-post_thumbnail wp-post-image block w-full h-full max-w-full object-cover';
					the_post_thumbnail( 'post_thumbnail', array( 'class' => $thumbnail_classes ) )
					?>
                </a>
            </div>

            <!--<div class="overlay-details top fade-down absolute top-0 p-[3vh]">
                <button class="w-14 h-14 flex items-center justify-center text-primary-foreground" type="button">
                    <span><i data-lucide="maximize" class="icon icon-maximize"></i></span>
                    <span class="button-text sr-only"><?php /*esc_html_e( 'Show', 'portfolio' ); */?></span>
                </button>
            </div>-->

            <div class="overlay-details w-full absolute bottom-0 p-[3vh]">
                <div class="heading relative z-10">
                    <h4 class="text-2xl text-primary font-semibold"><?php the_title() ?></h4>
                    <div class="show-project mt-2">
                        <div class="project-category__holder">
                            <ul class="project-category__list flex gap-1.5">
                                <li>
                                    <a href="#"
                                       class="text-link text-primary text-sm project-category__link inline-block">
                                        <span class="category-text">Identity</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="text-link text-primary text-sm project-category__link inline-block">
                                        <span class="category-text">Mockup</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="show-project__link text-primary font-semibold">
                            <a href="<?php echo get_permalink() ?>" class="text-link text-primary">
                                <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <span class="block w-full h-full bg-gradient-to-t from-primary/40 to-transparent absolute z-0 top-0 left-0 opacity-30"></span>
            </div>
        </div>
    </div>
</article>
