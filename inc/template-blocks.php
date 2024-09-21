<?php

function portfolio_acf_register_block() {
	if ( function_exists( 'acf_register_block' ) ) {
		acf_register_block( array(
			'name'            => 'theme-block/about-me',
			'title'           => 'About Me',
			'description'     => 'A restricted content block.',
			'category'        => 'formatting',
			'mode'            => 'preview',
			'supports'        => array(
				'align' => false,
				'mode'  => 'edit',
			),
			'render_template' => get_template_directory() . '/template-parts/blocks/about-me/about-me.php',
		) );
	}
}

add_action( 'acf/init', 'portfolio_acf_register_block' );
