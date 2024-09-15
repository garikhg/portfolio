<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>
<?php if ( have_posts() ): ?>
    <div class="page-headline w-auto fixed left-0">
        <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>"
           class="btn btn-icon btn-link relative group h-14 px-2.5 inline-flex items-center no-underline hover:no-underline"
        >
            <span class="btn-icon w-14 h-14 flex items-center justify-center rounded-full transition-all duration-200 group-hover:bg-background"
            ><i class="icon-arrow-left text-2xl"></i></span>
            <span class="btn-text text-base transition-all duration-200 opacity-0 translate-x-4 group-hover:translate-x-0 group-hover:opacity-100"><?php esc_html_e( 'Back', 'portfolio' ); ?></span>
        </a>
    </div>

	<?php
	// Start the loop
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content/content-single' );
	endwhile; // End of loop
	?>

    <section class="alignfull bg-background py-[10vh]">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2">
                <div class="subtitle text-sm font-medium uppercase">Let's Collaborate</div>
                <h2 class="title text-5xl font-heading font-bold pt-2">Got a project?</h2>
            </div>
            <div class="w-full md:w-1/2 flex justify-end">
                <a href="<?php echo esc_url( home_url( '/contact-me' ) ); ?>" class="btn btn-primary text-white">
                    <span class="btn-text uppercase"><?php esc_html_e( 'Contact Me', 'portfolio' ); ?></span>
                    <span class="btn-icon"><i class="icon-arrow-right"></i></span>
                </a>
            </div>
        </div>
        <div class="divider divider-neutral before:h-px after:h-px my-6"></div>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2">
                <p>
                    <strong>Got a project? Let’s collaborate!</strong> I design impactful eLearning solutions that
                    engage and inspire, blending instructional design, marketing, and visual storytelling for lasting
                    results.
                </p>
            </div>
            <div class="w-full md:w-1/2"></div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
