<?php
/**
 * Template part for displaying service
 */

$service = $args['service'] ?? '';
if ( ! $service ) {
	return;
}

$service_type     = carbon_get_term_meta( $service->term_id, 'crb_service_type' ) ?? '';
$service_icon_id  = carbon_get_term_meta( $service->term_id, 'crb_service_icon' ) ?? '';
$service_icon_url = $service_icon_id ? wp_get_attachment_image_url( $service_icon_id ) : '';
?>

<article id="service-<?php echo esc_attr( $service->term_id ); ?>" class="service-table">
    <div class="service-table__inside rounded-2xl transition-cubicBezier duration-150 bg-background hover:bg-light-gray h-full p-4">
		<?php if ( ! empty( $service_icon_url ) ): ?>
            <div class="mb-5">
                <img src="<?php echo esc_url( $service_icon_url ) ?>"
                     alt="<?php echo esc_attr( $service_type ); ?>"
                     class="w-8 h-8"
                >
            </div>
		<?php endif; ?>

        <div class="service-table-heading">
			<?php if ( ! empty( $service_type ) ): ?>
                <span class="block badge badge-outline text-sm mb-1"><?php echo esc_html( $service_type ); ?></span>
			<?php endif; ?>
            <h4 class="text-2xl font-heading font-bold mt-0.5">
				<?php echo $service->name; ?>
            </h4>
        </div>

		<?php if ( ! empty( $service->description ) ): ?>
            <div class="service-table-body leading-relaxed mt-6">
				<?php echo wp_kses_post( term_description( $service ) ); ?>
            </div>
		<?php endif; ?>
    </div>
</article>
