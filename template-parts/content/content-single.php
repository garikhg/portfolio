<?php
/**
 * Template part for displaying portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="project-<?php the_ID(); ?>" <?php get_post_class( 'project' ) ?>>
	<?php if ( has_post_thumbnail() ) {
		get_template_part( 'template-parts/header/project-header' );
	} ?>

    <div class="project-content py-20">
        <div class="flex flex-wrap -mx-8">
            <div class="project-details w-full lg:w-1/4 px-8">
                <div class="project-details__holder bg-background rounded-2xl p-8">
                    <div class="project-details__header">
                        <h5 class="title mb-2 font-heading font-bold">Project Details</h5>
                        <p>Building an internal tool of this scale is no small feat.</p>
                    </div>
                    <ul class="project-options__group space-y-4 before:block before:h-px before:bg-primary before:mb-4 mt-8">
                        <li>
                            <div class="flex items-baseline gap-2">
                                <h6 class="font-semibold">Client:</h6>
                                <span>Professional Development</span>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-baseline gap-2">
                                <h6 class="font-semibold">Date:</h6>
                                <span>Nov 2023</span>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-baseline gap-2">
                                <h6 class="font-semibold">Services:</h6>
                                <span>eLearning Design and Development</span>
                            </div>
                        </li>
                    </ul>

                    <div class="divider before:h-px before:bg-primary after:h-px after:bg-primary"></div>
                    <div class="">
                        <a href="#" class="btn btn-ghost">
                            <span class="btn-text text-xs uppercase"><?php esc_html_e( 'Open Project', 'portfolio' ); ?></span>
                            <span class="btn-icon"><i class="icon-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="entry-content w-full lg:w-3/4 px-8">
                <div class="entry-content__inside space-y-8">
					<?php the_content(); ?>
                </div>
            </div>
        </div>

    </div>
</article>
