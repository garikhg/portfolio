<?php
/**
 * Home Projects Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

$all_projects = get_posts( array(
	'posts_per_page' => - 1,
	'post_type'      => 'portfolio',
	'post_status'    => 'publish',
	'orderby'        => 'date',
	'order'          => 'DESC',
	'meta_query'     => array(
		'relation' => 'OR',
		array(
			array(
				'key'     => 'show_on_home',
				'compare' => '=',
				'value'   => '1',
			),
			array(
				'key'     => '_thumbnail_id',
				'compare' => 'EXISTS',
			)
		),
	)
) );

$page_link = get_field( 'page_link' ) ?? '';
?>

<section id="<?php echo esc_attr( $block['id'] ) ?>" class="portfolio-projects bg-background rounded-xl py-8 lg:py-16 mt-8 lg:mt-16">
    <div class="container">
        <div class="max-w-xl mb-8 lg:mb-16">
            <div class="section-heading">
				<?php if ( $sup_label = get_field( 'sup_label' ) ) {
					echo '<span class="badge badge-outline mb-2">' . $sup_label . '</span>';
				} ?>

				<?php if ( $title = get_field( 'block_title' ) ) {
					echo '<h2 class="section-title text-4xl font-heading font-bold">' . $title . '</h2>';
				} ?>

				<?php if ( $description = get_field( 'block_description' ) ) {
					echo '<div class="section-description text-lg mt-3">' . wp_kses_post( $description ) . '</div>';
				} ?>

				<?php if ( ! empty( $page_link['title'] ) && ! empty( $page_link['url'] ) ): ?>
                    <div class="mt-5">
                        <a href="<?php echo esc_url( $page_link['url'] ) ?>"
							<?php echo ! empty( $page_link['target'] ) ? 'target="' . $page_link['target'] . '"' : '' ?>
                           class="inline-flex items-center gap-2 py-2 px-4 whitespace-nowrap rounded-full bg-primary text-primary-foreground text-sm font-semibold"
                        >
                            <span class="btn-text"><?php echo $page_link['title']; ?></span>
                            <span class="btn-icon"><i class="icon-arrow-up-right"></i></span>
                        </a>
                    </div>
				<?php endif; ?>
            </div>
        </div>

        <div class="slider-outer-wrapper">
            <div class="slider-outer-end">

                <div id="carousel_<?php echo esc_attr( $block['id'] ) ?>" class="swiper project-carousel">
                    <div class="swiper-wrapper">
						<?php if ( $all_projects ): ?>
							<?php foreach ( $all_projects as $project ): ?>
								<?php
								$filters = get_the_terms( $project->ID, 'tool' ) ?? '';
								if ( $filters ) {
									$filters = implode( ', ', wp_list_pluck( $filters, 'name' ) );
								}
								?>
                                <div class="swiper-slide lg:max-w-[653px]">
                                    <div class="portfolio-item-wrap" data-tilt-perspective="60000">
                                        <div class="portfolio-item card">
                                            <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
                                                <div class="image-holder">
                                                    <a href="<?php echo esc_attr( get_permalink( $project->ID ) ); ?>">
														<?php echo get_the_post_thumbnail( $project->ID, 'full' ); ?>
                                                    </a>
                                                </div>
                                                <div class="overlay-details w-full bg-gradient-to-t from-gray-950/90 to-transparent absolute bottom-0 p-[3vh]">
                                                    <div class="heading">
                                                        <h4 class="text-2xl font-semibold text-white">
                                                            <a href="<?php echo esc_attr( get_permalink( $project->ID ) ); ?>">
																<?php echo wp_kses_post( $project->post_name ); ?>
                                                            </a>
                                                        </h4>

                                                        <div class="show-project mt-2">
                                                            <div class="project-category__holder">
																<?php if ( $filters ): ?>
                                                                    <div class="project-category__holder">
                                                                        <span class="category-text text-sm inline-block"><?php echo $filters; ?></span>
                                                                    </div>
																<?php endif; ?>
                                                            </div>
                                                            <div class="show-project__link text-white font-semibold">
                                                                <a href="<?php echo esc_attr( get_permalink( $project->ID ) ); ?>"
                                                                   class="text-link text-link-foreground">
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
							<?php endforeach; ?>
						<?php endif; ?>
                    </div>
                    <div class="slider-controls flex justify-between mt-4">
                        <div class="hidden slider-counter items-center gap-3">
                            <span class="slider-count-current">1</span>
                            <span class="slider-count-divider block w-10 h-0.5 bg-primary"></span>
                            <span class="slider-count-total">4</span>
                        </div>

                        <div class="slider-nav-bottom flex">
                            <button type="button" class="slider-btn-prev w-14 h-14 flex items-center justify-center">
                                <i class="icon-arrow-left text-2xl pointer-events-none"></i>
                                <span class="sr-only"><?php esc_html_e( 'Previous Project', 'portfolio' ); ?></span>
                            </button>
                            <button type="button" class="slider-btn-next w-14 h-14 flex items-center justify-center">
                                <i class="icon-arrow-right text-2xl pointer-events-none"></i>
                                <span class="sr-only"><?php esc_html_e( 'Next Project', 'portfolio' ); ?></span>
                            </button>
                        </div>
                    </div>

                </div><!-- .project-carousel -->

            </div><!-- .slider-outer-end -->
        </div><!-- .slider-outer-wrapper -->
    </div><!-- .container -->
</section>
