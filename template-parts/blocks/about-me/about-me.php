<?php
/**
 * Contact Me Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

$my_info       = get_field( 'details' ) ?? '';
$my_name       = $my_info['name'] ?? '';
$my_profession = $my_info['profession'] ?? '';
$my_photo_url  = $my_info['image']['url'] ?? '';
$contact_title = $my_info['contacts_title'] ?? '';
$contacts      = $my_info['contacts'] ?? '';
$biography     = get_field( 'biography' ) ?? '';
?>
<div id="<?php echo esc_attr( $block['id'] ) ?>" class="flex flex-wrap gap-y-6 -mx-4">
    <div class="w-full lg:w-2/5 xl:w-2/6 flex justify-start px-4">
        <div class="w-full flex flex-col sm:flex-row lg:flex-col gap-4 bg-background rounded-2xl p-4 lg:p-8">
			<?php if ( ! empty( $my_photo_url ) ): ?>
                <div class="mx-auto">
                    <div class="overflow-hidden rounded-full w-64 h-64 lg:w-72 lg:h-72 xl:w-80 xl:h-80 border border-background">
                        <img src="<?php echo esc_url( $my_photo_url ) ?>"
                             class="w-full max-w-full h-full object-cover"
                             alt="<?php echo esc_attr( $my_name ) ?>"
                        >
                    </div>
                </div>
			<?php endif; ?>

            <div class="w-full">
                <div class="mt-8 text-center sm:text-start lg:text-center">
					<?php if ( ! empty( $my_name ) ): ?>
                        <h2 class="text-primary font-bold font-heading text-3xl">
							<?php echo $my_name; ?>
                        </h2>
					<?php endif; ?>
					<?php if ( $my_profession ): ?>
                        <span class="block text-base text-gray-500 mt-1"><?php echo $my_profession; ?></span>
					<?php endif; ?>
                </div>

                <div class="hidden sm:block lg:hidden">
                    <span class="w-full block border-b border-gray-200 my-4 lg:my-8"></span>
					<?php if ( ! empty( $contact_title ) ): ?>
                        <h5 class="text-base font-semibold font-heading">
							<?php echo $contact_title; ?>
                        </h5>
					<?php endif; ?>

					<?php if ( ! empty( $contacts ) ): ?>
						<?php
						$i          = 0;
						$totalLinks = count( $contacts );
						foreach ( $contacts as $contact ): ?>
							<?php $i ++; ?>
							<?php if ( ! empty( $contact['link'] ) && ! empty( $contact['value'] ) ): ?>
                            <a class="text-link w-fit group py-0.5 inline-block"
                               href="<?php echo esc_url( $contact['link'] ) ?>"
                            >
                                <span class="text"><?php echo esc_html( $contact['value'] ) ?></span>
                                </a><?php echo $i < $totalLinks ? ', ' : '' ?>
							<?php elseif ( empty( $contact['link'] ) && ! empty( $contact['value'] ) ): ?>
                                <div class="text-link w-fit group py-0.5 inline-block">
                                    <span class="text"><?php echo esc_html( $contact['value'] ) ?><?php echo $i < $totalLinks ? ', ' : '' ?></span>
                                </div>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
                </div>

                <div class="block">
                    <span class="block sm:hidden lg:block w-16 border-b border-gray-200 mx-auto my-6 lg:my-8"></span>

                    <ul class="list-none flex items-center justify-center sm:justify-start lg:justify-center gap-6 my-4">
                        <li>
                            <a href="#" class="items-center">
                                <i class="fa-brands fa-facebook w-6 h-6"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="items-center">
                                <i class="fa-brands fa-instagram instagram-icon w-6 h-6"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="items-center">
                                <i class="fa-brands fa-linkedin w-6 h-6"></i>
                                <span class="sr-only">Linkedin In</span>
                            </a>
                        </li>
                    </ul>

                    <span class="block sm:hidden lg:block w-10 border-b border-gray-200 mx-auto my-6 lg:my-8"></span>
                </div>

				<?php if ( ! empty( $contacts ) ): ?>
                    <div class="sm:hidden lg:block text-center">
						<?php if ( ! empty( $contact_title ) ): ?>
                            <h5 class="text-base font-semibold font-heading"><?php echo $contact_title; ?></h5>
						<?php endif; ?>

                        <ul class="pt-2 text-center">
							<?php foreach ( $contacts as $contact ): ?>
                                <li>
									<?php if ( ! empty( $contact['link'] ) && ! empty( $contact['value'] ) ): ?>
                                        <a class="text-link w-fit group py-0.5 inline-block"
                                           href="<?php echo esc_url( $contact['link'] ) ?>"
                                        >
                                            <span class="text"><?php echo esc_html( $contact['value'] ); ?></span>
                                        </a>
									<?php elseif ( empty( $contact['link'] ) && ! empty( $contact['value'] ) ): ?>
                                        <div class="text-link w-fit group py-0.5 inline-block">
                                            <span class="text"><?php echo esc_html( $contact['value'] ); ?></span>
                                        </div>
									<?php endif; ?>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
				<?php endif; ?>
            </div>

        </div>
    </div>

    <div class="w-full lg:w-3/5 xl:w-4/6 text-lg font-light leading-loose space-y-8 px-4">
		<?php if ( ! empty( $biography ) ) {
			echo wp_kses_post( $biography );
		} ?>
    </div>

</div>
