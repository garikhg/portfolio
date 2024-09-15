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

<?php
get_template_part( 'template-parts/header/page-header', '', [
	'description' => esc_html( 'What I can do for you' )
] );
?>
    <div class="page-content pt-20">
		<?php the_content(); ?>
        <div class="grid grid-cols-4 gap-8 -mx-4">
			<?php if ( $all_services ): ?>
				<?php foreach ( $all_services as $service_term ) {
					get_template_part( 'template-parts/content/content-service', null, array( 'service' => $service_term ) );
				} ?>
			<?php endif; ?>
        </div>
    </div><!-- .page-content -->

<?php
get_footer();
