<?php
function portfolio_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * This theme does not use a hard-coded <title> tag in the document head,
	 * WordPress will provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Add post-formats support.
	 */
	add_theme_support( 'post-formats', [
		'link',
		'aside',
		'gallery',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat',
	] );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );


	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'portfolio' ),
		'footer'  => __( 'Footer Menu', 'portfolio' ),
	] );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', [
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
		'navigation-widgets',
	] );

	/*
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', [
		'height'               => 300,
		'width'                => 130,
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => false,
		'header-text'          => [ 'site-title', 'site-description' ],
	] );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-style' );

	// Add support for custom content width and wide size
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	$editor_stylesheet_path = './style-editor.css';
	add_editor_style( $editor_stylesheet_path );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Image sizes
	add_image_size( 'icon', '20', '20' );
}

add_action( 'after_setup_theme', 'portfolio_setup' );

function portfolio_scripts(): void {
	// Swiper
	wp_enqueue_script( 'swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', [ 'in_footer' => true ] );
	wp_enqueue_style( 'swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11' );

	// Font and Icons
	wp_enqueue_script( 'lucide-icons', '//cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js', array(), null, [ 'in_footer' => true ] );
	wp_enqueue_script( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js', array(), '6.6.0', [ 'in_footer' => true ] );
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.6.0' );

	// DaisyUI
	wp_enqueue_style( 'daisy-ui', '//cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css', array(), '4.12.10' );

	// Theme
	wp_enqueue_style( 'portfolio-theme-style', get_template_directory_uri() . '/dist/main.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'portfolio-theme-script', get_template_directory_uri() . '/dist/main.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), [ 'in_footer' => true ] );
}

add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

function portfolio_block_editor_assets() {
	wp_enqueue_style( 'acf-editor-styles', get_template_directory_uri() . '/assets/css/style-editor-block.css', array(), wp_get_theme()->get( 'Version' ) );
}

// add_action( 'enqueue_block_editor_assets', 'portfolio_block_editor_assets' );

function portfolio_svg_support( $mimes ): array {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'portfolio_svg_support' );
