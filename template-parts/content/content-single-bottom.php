<?php
/**
 * Template part for displaying portfolio single page bottom.
 */

$sup_title   = get_field( 'project_single_suptitle', 'options' );
$title       = get_field( 'project_single_title', 'options' );
$page_link   = get_field( 'project_single_pagelink', 'options' );
$description = get_field( 'project_single_description', 'options' );
?>
<section class="bg-background py-8 lg:py-16 mt-6 lg:mt-16">
    <div class="container">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2">
				<?php if ( ! empty( $sup_title ) ): ?>
                    <div class="subtitle text-sm font-medium uppercase"><?php echo $sup_title; ?></div>
				<?php endif; ?>

				<?php if ( ! empty( $title ) ): ?>
                    <h2 class="title text-4xl lg:text-5xl font-heading font-bold pt-2">
						<?php echo $title; ?>
                    </h2>
				<?php endif; ?>
            </div>

            <div class="w-full md:w-1/2 flex justify-end">
				<?php if ( ! empty( $page_link['url'] ) ): ?>
                    <a href="<?php echo esc_url( $page_link['url'] ); ?>" class="btn btn-primary text-white hidden md:flex">
                        <span class="btn-text uppercase"><?php echo $page_link['title']; ?></span>
                        <span class="btn-icon"><i class="icon-arrow-right"></i></span>
                    </a>
				<?php endif; ?>
            </div>

        </div>
        <div class="divider divider-neutral before:h-px after:h-px my-6"></div>
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2">
				<?php if ( ! empty( $description ) ) {
					echo wp_kses_post( $description );
				} ?>
            </div>
            <div class="w-full lg:w-1/2">
                <div class="pt-8 md:hidden">
					<?php if ( ! empty( $page_link['url'] ) ): ?>
                        <a href="<?php echo esc_url( $page_link['url'] ); ?>"
                           class="btn btn-block btn-primary text-white"
                        >
                            <span class="btn-text uppercase"><?php echo $page_link['title']; ?></span>
                            <span class="btn-icon"><i class="icon-arrow-right"></i></span>
                        </a>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
