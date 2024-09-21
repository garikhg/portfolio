<?php
/**
 * Display project header.
 */

$description  = get_field( 'page_description', get_the_ID() ) ?? '';
$filters      = get_the_terms( get_the_ID(), 'tool' ) ?? '';
$filters_name = wp_list_pluck( $filters, 'name' );
?>
<header class="project-cover">
    <div class="container relative">
		<?php if ( has_post_thumbnail() ): ?>
            <div class="relative rounded-2xl overflow-hidden">
                <span class="block absolute top-0 right-0 left-0 h-full bg-gradient-to-t from-gray-950/70 to-transparent"></span>
				<?php
				$thumbnail_classes = 'attachment-full size-full wp-post-image block w-full max-w-full h-[480px] object-cover';
				the_post_thumbnail( 'full', array( 'class' => $thumbnail_classes ) );
				?>
            </div>
		<?php endif; ?>
        <div class="flex items-center justify-center absolute top-0 left-0 w-full h-full px-8 py-20">
            <div class="project-cover__inside text-center max-w-screen-md mx-auto">
				<?php
				$the_title = sprintf( '<h1 class="project-cover__title text-4xl md:text-5xl lg:text-6xl font-semibold text-center">%s</h1>', get_the_title() );
				echo $the_title;
				?>
				<?php if ( ! empty( $description ) ): ?>
                    <div class="project-cover__description pt-2">
						<?php echo wp_kses_post( $description ); ?>
                    </div>
				<?php endif; ?>
				<?php if ( ! empty( $filters_name ) && ! $description ): ?>
                    <div class="project-cover__description pt-2">
						<?php echo implode( ', ', $filters_name ) ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</header>
