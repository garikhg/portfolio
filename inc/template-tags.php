<?php
/**
 * Custom template tags for this theme
 */

if ( ! function_exists( 'portfolio_the_post_navigation' ) ) {
	function portfolio_the_post_navigation() {

		the_posts_pagination(
			array(
				'mid_size'  => 1,
				// 'prev_text' => __( '&larr; Older posts', 'portfolio' ),
				// 'next_text' => __( 'Newer posts &rarr;', 'portfolio' ),
				'prev_text' => '<i class="icon-arrow-left"></i>',
				'next_text' => '<i class="icon-arrow-right"></i>',
			)
		);
	}
}

if ( ! function_exists( 'portfolio_the_portfolio_filters' ) ) {
	function portfolio_the_portfolio_filters() {
		$all_filters = get_terms( array(
			'taxonomy'   => 'tool',
			'hide_empty' => false,
		) );

		$counter = array_sum( wp_list_pluck( $all_filters, 'count' ) );
		?>
		<?php if ( $all_filters ): ?>
            <div class="portfolio-filter flex gap-2 pb-5" data-filter="portfolio" data-filter-paged="true">
                <p><?php esc_attr_e( 'Filter by:', 'portfolio' ); ?></p>
                <ul class="portfolio-filter__list flex gap-2">
                    <li class="flex items-center gap-1 is-active">
                        <a href="#all"
                           data-category-count="<?php echo esc_attr( $counter ) ?>"
                           data-filter="*"
                           class="portfolio-filter-button text-link"
                        >
                            <span class="pointer-events-none text"><?php esc_attr_e( 'All', 'portfolio' ); ?></span>
                            <sup class="pointer-events-none"><?php echo esc_html( $counter ) ?></sup>
                        </a>
                    </li>
					<?php foreach ( $all_filters as $filter ): ?>

                        <li class="flex items-center gap-1">
                            <a href="#<?php echo esc_attr( $filter->slug ); ?>"
                               data-category-count="<?php echo esc_attr( $filter->count ) ?>"
                               data-filter=".<?php echo esc_attr( $filter->slug ); ?>"
                               class="portfolio-filter-button text-link">
                                <span class="pointer-events-none text"><?php echo esc_html( $filter->name ) ?></span>
                                <sup class="pointer-events-none"><?php echo esc_html( $filter->count ) ?></sup>
                            </a>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
		<?php endif; ?>
		<?php
	}
}
