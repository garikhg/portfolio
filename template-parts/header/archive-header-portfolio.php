<?php
/**
 * Display template part Portfolio archive header.
 */

$archive_title       = carbon_get_theme_option( 'crb_portfolio_archive_title' ) ?? '';
$archive_description = carbon_get_theme_option( 'crb_portfolio_archive_description' ) ?? '';
$archive_thumbnail   = carbon_get_theme_option( 'crb_portfolio_archive_thumbnail' ) ?? '';

$header_classes = 'archive-header relative flex items-center justify-center px-0';

if ( $archive_thumbnail ) {
	$header_classes .= ' text-white h-[480px] overflow-hidden rounded-2xl';
}
?>
<header class="<?php echo esc_attr( $header_classes ); ?>">
	<?php if ( $archive_thumbnail ): ?>
        <div class="absolute z-0 w-full h-full">
            <span class="block absolute top-0 right-0 left-0 h-full bg-gradient-to-t from-gray-950/70 to-transparent"></span>
			<?php
			$attachment_classes = 'attachment-full size-full w-full max-w-full h-full object-cover';
			echo wp_get_attachment_image( $archive_thumbnail, 'full', false, array( 'class' => $attachment_classes ) )
			?>
        </div>
	<?php endif; ?>

    <div class="archive-header-inside relative z-10 py-8 px-6">
		<?php if ( ! empty( $archive_title ) ): ?>
            <div class="archive-title__wrapper">
                <h1 class="page-title text-4xl md:text-5xl lg:text-6xl font-semibold text-center">
					<?php echo $archive_title ?>
                </h1>
            </div>
		<?php endif; ?>
		<?php if ( ! empty( $archive_description ) ): ?>
            <p class="archive-description text-lg text-center font-light">
				<?php echo wp_kses_post( $archive_description ) ?>
            </p>
		<?php endif; ?>
    </div>
</header>
