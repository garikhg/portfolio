<?php
/**
 * Contact Me Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

$me_photo = get_template_directory_uri() . '/assets/images/demo/angeladiloyan-1x1.jpg';

function social_media() {
	?>
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
	<?php
}

?>

<div id="<?php echo esc_attr( $block['id'] ) ?>" class="flex flex-wrap gap-y-6 -mx-4">

    <div class="w-full lg:w-2/5 xl:w-2/6 flex justify-start px-4">
        <div class="w-full flex flex-col sm:flex-row lg:flex-col gap-4 bg-background rounded-2xl p-4 lg:p-8">
            <div class="mx-auto">
                <div class="overflow-hidden rounded-full w-64 h-64 lg:w-72 lg:h-72 xl:w-80 xl:h-80 border border-background">
                    <img src="<?php echo esc_url( $me_photo ) ?>"
                         class="w-full max-w-full h-full object-cover"
                         alt="Angela Diloyan"
                    >
                </div>
            </div>

            <div class="w-full">
                <div class="mt-8 text-center sm:text-start lg:text-center">
                    <h2 class="text-primary font-bold font-heading text-3xl">Angela Diloyan</h2>
                    <span class="block text-base text-gray-500 mt-1">eLearning Specialist</span>
                </div>

                <div class="hidden sm:block lg:hidden">
                    <span class="w-full block border-b border-gray-200 my-4 lg:my-8"></span>
                    <h5 class="text-base font-semibold font-heading">Contact Me:</h5>
                    <a class="text-link w-fit group py-0.5 inline-block" href="#">
                        <span class="text">(555) 123-4567</span>
                    </a>,
                    <a class="text-link group py-0.5 inline-block" href="#">
                        <span class="text">info@angeladiloyan.com</span>
                    </a>
                </div>

                <div class="block">
                    <span class="block sm:hidden lg:block w-16 border-b border-gray-200 mx-auto my-6 lg:my-8"></span>
					<?php social_media() ?>
                    <span class="block sm:hidden lg:block w-10 border-b border-gray-200 mx-auto my-6 lg:my-8"></span>
                </div>

                <div class="sm:hidden lg:block text-center">
                    <h5 class="text-base font-semibold font-heading">Contact Me:</h5>
                    <ul class="pt-2 text-center">
                        <li>
                            <a class="text-link w-fit group py-0.5 inline-block" href="#">
                                <span class="text">(555) 123-4567</span>
                            </a>
                        </li>
                        <li>
                            <a class="text-link group py-0.5 inline-block" href="#">
                                <span class="text">info@angeladiloyan.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full lg:w-3/5 xl:w-4/6 text-lg font-light leading-loose space-y-8 px-4">
        <p>
            Based in Alexandria, Virginia, I bring a diverse background and global perspective to my
            work in eLearning, instructional design, and marketing. Originally from Queens, New York, my
            educational journey took me to the American University of Armenia, where I laid the
            foundation for a career in education. With experience across various disciplines, including
            social media and video editing, I now leverage these skills to create impactful eLearning
            solutions that blend instructional design principles with engaging, meaningful content.
        </p>
        <p>
            I hold a BA in Communications, which has equipped me with the ability to craft clear,
            compelling messages and engage diverse audiences. My MA in TEFL has further honed my
            expertise in language education, enabling me to create targeted and effective learning
            experiences. Together, these qualifications have shaped my approach to eLearning, where
            communication, education, and design intersect to create powerful instructional content.
        </p>
        <p>
            Instructional design, to me, is the art of creating learning experiences that truly resonate
            with learners. My approach is grounded in the belief that learning should be intuitive,
            engaging, and visually captivating. By combining instructional design principles with a keen
            eye for visual design, marketing strategies, and video editing techniques, I develop courses
            that are not only educational but also enjoyable. My goal is to create learning experiences
            that are memorable, impactful, and aligned with the goals of both the learners and the
            organizations I work with. Whether it's interactive simulations, scenario-based learning, or
            visually rich content, I focus on designing experiences that make a lasting impression.
        </p>

    </div>

</div>
