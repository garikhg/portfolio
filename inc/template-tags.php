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
