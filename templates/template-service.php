<?php
/**
 * Template Name: Page Services
 */

get_header();

$all_services = get_terms( array(
	'taxonomy'   => 'service',
	'hide_empty' => false,
) );
?>
    <div class="container">

		<?php get_template_part( 'template-parts/header/page-header' ); ?>
        <div class="page-content pt-6 md:pt-16">
			<?php the_content(); ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
				<?php if ( $all_services ): ?>
					<?php foreach ( $all_services as $service_term ) {
						get_template_part( 'template-parts/content/content', 'service', array( 'service' => $service_term ) );
					} ?>
				<?php endif; ?>
            </div>
        </div><!-- .page-content -->

    </div><!-- .container -->

<?php
get_footer();
