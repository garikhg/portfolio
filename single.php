<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();

$project_details_client      = get_field( 'project_client', get_the_ID() ) ?? '';
$project_details_date        = get_field( 'project_date', get_the_ID() ) ?? '';
$project_details_description = get_field( 'project_description', get_the_ID() ) ?? '';
$project_url                 = get_field( 'project_url', get_the_ID() ) ?? '';
?>
<?php if ( have_posts() ): ?>
    <div class="hidden w-auto xl:block fixed left-0">
        <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"
           class="btn btn-back btn-link relative group h-14 px-2.5 inline-flex items-center no-underline hover:no-underline">
            <span class="btn-icon w-14 h-14 flex items-center justify-center rounded-full transition-all duration-200 group-hover:bg-background"><i
                        class="icon-arrow-left text-2xl"></i></span>
            <span class="btn-text text-base transition-all duration-200 opacity-0 translate-x-4 group-hover:translate-x-0 group-hover:opacity-100"><?php esc_html_e( 'Back', 'portfolio' ); ?></span>
        </a>
    </div>

	<?php if ( has_post_thumbnail() ) {
		get_template_part( 'template-parts/header/project-header' );
	} ?>

    <div class="project-content container pt-6 md:pt-16">
        <div class="flex flex-wrap -mx-4 lg:-mx-6 xl:-mx-8 space-y-8">

            <div class="w-full sm:w-2/5 xl:w-1/4 px-4 lg:px-6 xl:px-8">
                <div class="project-details sticky top-24">
                    <div class="project-details__holder bg-background rounded-2xl p-8">

                        <div class="project-details__header">
                            <h5 class="title mb-2 font-heading font-bold"><?php esc_html_e( 'Project Details', 'portfolio' ); ?></h5>
							<?php if ( ! empty( $project_details_description ) ): ?>
                                <p><?php echo wp_kses_post( $project_details_description ) ?></p>
							<?php endif; ?>
                        </div>

                        <ul class="project-options__group space-y-4 before:block before:h-px before:bg-primary before:mb-4 mt-8">
							<?php if ( ! empty( $project_details_client ) ): ?>
                                <li>
                                    <div class="flex items-baseline gap-2">
                                        <h6 class="font-semibold"><?php esc_html_e( 'Client:', 'portfolio' ); ?></h6>
                                        <span><?php echo $project_details_client; ?></span>
                                    </div>
                                </li>
							<?php endif; ?>
							<?php if ( ! empty( $project_details_date ) ): ?>
                                <li>
                                    <div class="flex items-baseline gap-2">
                                        <h6 class="font-semibold"><?php esc_html_e( 'Date:', 'portfolio' ); ?></h6>
                                        <span><?php echo $project_details_date; ?></span>
                                    </div>
                                </li>
							<?php endif; ?>
                        </ul>
                    </div>
					<?php if ( ! empty( $project_url ) ): ?>
                        <div class="open-project-holder mt-4">
                            <a href="<?php echo esc_url( $project_url ) ?>"
                               target="_blank"
                               role="button"
                               rel="nofollow"
                               aria-label="<?php esc_attr_e( 'View Project', 'portfolio' ); ?>"
                               class="btn w-full"
                            >
                                <span class="btn-text uppercase"><?php esc_html_e( 'View Project', 'portfolio' ); ?></span>
                                <span class="btn-icon"><i class="icon-arrow-right"></i></span>
                            </a>
                        </div>
					<?php endif; ?>

                </div>
            </div>

            <div class="w-full sm:w-3/5 xl:w-3/4 px-4 lg:px-6 xl:px-8">
				<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content/content-single' );
				endwhile; ?>
            </div>
        </div>
    </div>

	<?php get_template_part( 'template-parts/content/content-single-bottom' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
