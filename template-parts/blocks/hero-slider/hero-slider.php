<?php
/**
 * Hero slider block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

$sliders = get_field( 'sliders' );
if ( ! $sliders ) {
	return;
}
?>

<div class="container">
    <div class="hero-slider-wrapper h-[560px]">
        <div class="swiper hero-slider rounded-2xl">
            <div class="swiper-wrapper">
				<?php foreach ( $sliders as $slide ): ?>

                    <div class="swiper-slide relative">
                        <span class="block absolute top-0 left-0 w-full h-full bg-gradient-to-tl from-gray-950/90 to-transparent rounded-2xl z-10"></span>
						<?php
						$image_classes = 'attachment-full size-full block w-full max-w-full h-[560px] object-cover rounded-2xl';
						echo wp_get_attachment_image( $slide['image'], 'full', false, array( 'class' => $image_classes ) );
						?>

                        <div class="w-full absolute top-0 left-0 h-full flex items-center justify-center z-30">
                            <div class="block max-w-screen-md mx-auto text-center text-primary-foreground px-6">
								<?php if ( ! empty( $slide['title'] ) ): ?>
                                    <h2 class="animated-title swiper-slide__title text-3xl lg:text-5xl font-semibold"
                                        data-swiper-parallax="-300"
                                    >
										<?php echo $slide['title']; ?>
                                    </h2>
								<?php endif; ?>

								<?php if ( ! empty( $slide['description'] ) ): ?>
                                    <div class="animated-description text-lg lg:text-2xl font-light pt-2"
                                         data-swiper-parallax="-100"
                                    >
										<?php echo wp_kses_post( $slide['description'] ); ?>
                                    </div>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>

				<?php endforeach; ?>
            </div>

            <div class="hidden lg:block swiper-button-next"></div>
            <div class="hidden lg:block swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div><!-- .container -->
