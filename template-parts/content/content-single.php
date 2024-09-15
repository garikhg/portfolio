<?php
/**
 * Template part for displaying portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<article id="project-<?php the_ID(); ?>" <?php get_post_class('project') ?>>
	<div class="project-heading">
		<div class="project-image-holder">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/demo/projects/single/project-single-1.jpg' ) ?>"
			     class="block w-full max-w-full h-[480px] object-cover rounded-2xl"
			     alt=""
			>
		</div>
	</div>

	<div class="project-content py-20">
		<div class="flex flex-wrap -mx-8">

            <div class="project-details w-full lg:w-1/4 px-8">
				<div class="project-details__holder bg-background rounded-2xl p-8">
					<div class="project-details__header">
						<h5 class="title mb-2 font-heading font-bold">Project Details</h5>
						<p>Building an internal tool of this scale is no small feat.</p>
					</div>
					<ul class="project-options__group space-y-4 before:block before:h-px before:bg-primary before:mb-4 mt-8">
						<li>
							<div class="flex items-baseline gap-2">
								<h6 class="font-semibold">Client:</h6>
								<span>Professional Development</span>
							</div>
						</li>
						<li>
							<div class="flex items-baseline gap-2">
								<h6 class="font-semibold">Date:</h6>
								<span>Nov 2023</span>
							</div>
						</li>
						<li>
							<div class="flex items-baseline gap-2">
								<h6 class="font-semibold">Services:</h6>
								<span>eLearning Design and Development</span>
							</div>
						</li>
					</ul>

                    <div class="divider before:h-px before:bg-primary after:h-px after:bg-primary"></div>
					<div class="">
						<a href="#" class="btn btn-ghost">
							<span class="btn-text text-xs uppercase"><?php esc_html_e( 'Open Project', 'portfolio' ); ?></span>
							<span class="btn-icon"><i class="icon-arrow-right"></i></span>
						</a>
					</div>
				</div>
			</div>

			<div class="w-full lg:w-3/4 px-8">
				<div class="entry-content space-y-8">
					<div>
						<h2>Incident Investigation with Global Logistics</h2>
						<p>
							This project aims to enhance workplace safety within a global logistics giant through our
							comprehensive eLearning project. Focused on investigating workplace incidents, our
							end-to-end
							process covered
							analysis, design, development, implementation, and evaluation.
						</p>
					</div>
					<div>
						<h3>Objective</h3>
						<p>
							Global Logistics grappled with a rise in workplace incidents lacking clear explanations.
							Acknowledging deeper cultural and systemic problems, the company took a straightforward
							approach
							to
							overhaul
							and improve safety.
						</p>
					</div>
					<div>
						<h3>Goal:</h3>
						<p>
							The main goal of the project is to strengthen the incident investigation system. Notably,
							the
							absence of
							a
							structured process to understand why workplace accidents happen led Global Logistics to
							develop
							a
							practical
							solution.
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</article>
