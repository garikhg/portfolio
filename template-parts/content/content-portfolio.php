<?php
/**
 * Template part for displaying portfolio archives results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

// $wrapper_class = 'portfolio-item-wrap w-full md:w-1/2 grid-item';
$wrapper_class = 'portfolio-item-wrap grid-item';

$cover_text_color       = get_field( 'title_color', get_the_ID() );
$project_heading_styles = $cover_text_color ? ' style="--text: ' . $cover_text_color . ';"' : '';
$filters                = get_the_terms( get_the_ID(), 'tool' ) ?? '';
$project_categories     = '';

if ( $filters ) {
	$wrapper_class      .= ' ' . implode( ' ', wp_list_pluck( $filters, 'slug' ) );
	$project_categories = implode( ', ', wp_list_pluck( $filters, 'name' ) );
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $wrapper_class ); ?> data-tilt-perspective="60000">
    <div class="portfolio-item card p-4 sm:p-3">
        <div class="portfolio-item__inside relative overflow-hidden rounded-lg">
            <div class="image-holder">
                <a href="<?php echo get_permalink() ?>">
					<?php
					$thumbnail_classes = 'attachment-post_thumbnail size-post_thumbnail wp-post-image block w-full h-full max-w-full object-cover';
					the_post_thumbnail( 'post_thumbnail', array( 'class' => $thumbnail_classes ) )
					?>
                </a>
            </div>

            <div class="overlay-details w-full absolute bottom-0 p-[3vh]">
                <div class="heading relative z-10"<?php echo $project_heading_styles; ?>>
                    <h4 class="text-xl md:text-2xl font-semibold">
                        <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
                    </h4>
                    <div class="show-project mt-2">
						<?php if ( $project_categories ): ?>
                            <div class="project-category__holder">
                                <span class="category-text text-sm inline-block"><?php echo $project_categories; ?></span>
                            </div>
						<?php endif; ?>

                        <div class="show-project__link font-semibold">
                            <a href="<?php echo get_permalink() ?>" class="text-link">
                                <span class="text"><?php esc_html_e( 'Show project', 'portfolio' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <span class="block w-full h-full bg-gradient-to-t from-gray-950/90 to-transparent absolute z-0 top-0 left-0"></span>
            </div>
        </div>
    </div>
</article>
