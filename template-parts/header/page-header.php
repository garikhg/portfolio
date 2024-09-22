<?php
/**
 * Display page header.
 */

$hse_thumbnail   = has_post_thumbnail();
$wrapper_classes = '';

if ( $hse_thumbnail ) {
	$wrapper_classes = 'archive-header page-header relative text-white flex items-center justify-center has-header-background h-[480px] bg-frost-gray overflow-hidden rounded-2xl px-0';
} else {
	$wrapper_classes = 'page-header relative flex items-center justify-center h-auto';
}

$title    = carbon_get_post_meta( get_the_ID(), 'crb_banner_title' ) ?? '';
$subtitle = carbon_get_post_meta( get_the_ID(), 'crb_banner_subtitle' ) ?? '';
?>

<header class="<?php echo esc_attr( $wrapper_classes ) ?>">
	<?php if ( $hse_thumbnail ): ?>
        <span class="block absolute top-0 right-0 left-0 h-full bg-gradient-to-t from-gray-950/70 to-transparent"></span>
		<?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
	<?php endif; ?>

    <div class="page-header-inside px-6">
        <div class="page-title__wrapper">
			<?php if ( ! empty( $title ) ): ?>
                <h1 class="page-title text-4xl lg:text-6xl font-semibold text-center"><?php echo $title; ?></h1>
			<?php else: ?>
				<?php the_title( '<h1 class="page-title text-4xl lg:text-6xl font-semibold text-center">', '</h1>' ) ?>
			<?php endif; ?>
        </div>
		<?php if ( ! empty( $subtitle ) ): ?>
            <p class="page-description text-lg text-center font-light">
				<?php echo $subtitle; ?>
            </p>
		<?php endif; ?>
    </div>
</header>
