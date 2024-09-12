<?php
/**
 * Display page header.
 */

$hse_thumbnail   = has_post_thumbnail();
$wrapper_classes = '';

if ( $hse_thumbnail ) {
	$wrapper_classes = 'page-header relative text-white flex items-center justify-center has-header-background h-full max-h-96 bg-frost-gray overflow-hidden rounded-2xl px-0';
} else {
	$wrapper_classes = 'page-header relative flex items-center justify-center h-full max-h-96 px-16';
}
?>

<div class="<?php echo esc_attr( $wrapper_classes ) ?>">
	<?php if ( $hse_thumbnail ): ?>
    <span class="block w-full h-full absolute bg-gradient-to-t from-black/60 to-transparent"></span>
		<?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
	<?php endif; ?>

    <div class="page-header-inside py-16">
        <div class="page-title__wrapper">
			<?php the_title( '<h1 class="page-title text-6xl font-semibold text-center">', '</h1>' ) ?>
        </div>
		<?php if ( ! empty( $args['description'] ) ): ?>
            <p class="page-description text-lg text-center font-light">
				<?php echo $args['description']; ?>
            </p>
		<?php endif; ?>
    </div>

</div>
