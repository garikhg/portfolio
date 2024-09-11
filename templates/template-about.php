<?php
/**
 * Template Name: Page About Me
 */

get_header();

$me_photo = get_template_directory_uri() . '/assets/images/demo/angeladiloyan-1x1.jpg';
?>

    <article id="page-<?php echo esc_attr( get_the_ID() ) ?>" <?php post_class( 'pt-20' ); ?>>

        <div class="flex flex-wrap -mx-4">

            <div class="w-2/6 flex justify-start px-4">
                <div class="text-center flex flex-col bg-background rounded-2xl p-6">
                    <div>
                        <div class="overflow-hidden rounded-full w-80 h-80 border border-background">
                            <img src="<?php echo esc_url( $me_photo ) ?>"
                                 class="w-full max-w-full h-full object-cover"
                                 alt="Angela Diloyan"
                            >
                        </div>
                        <div class="mt-8">
                            <h2 class="font-bold font-heading text-3xl">Angela Diloyan</h2>
                            <span class="block text-base text-gray-500 mt-1">eLearning Specialist</span>
                        </div>
                    </div>

                    <div class="mt-auto p-6">
                        <h5 class="text-base text-start font-semibold font-heading">Contact Me:</h5>
                        <div class="pt-4 space-y-2">
                            <a class="text-link flex gap-2 items-center group" href="#">
                                <span class="w-8 h-8 flex items-center justify-center bg-light-gray rounded-full
                                text-primary group-hover:bg-primary group-hover:text-white transition-all p-2">
                                    <i data-lucide="phone" class="icon-phone w-5 h-5"></i>
                                </span>
                                <span class="text">(555) 123-4567</span>
                            </a>

                            <a class="text-link flex gap-2 items-center group" href="#">
                                <span class="w-8 h-8 flex items-center justify-center bg-light-gray rounded-full
                                text-primary group-hover:bg-primary group-hover:text-white transition-all p-2">
                                    <i data-lucide="mail" class="icon-mail w-5 h-5"></i>
                                </span>
                                <span class="text">info@angeladiloyan.com</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="w-4/6 text-lg font-light leading-loose break-all space-y-8 px-4">
                <p>
                    Based in Alexandria, Virginia, I bring a diverse background and global perspective to my work in
                    eLearning, instructional design, and marketing. Originally from Queens, New York, my educational
                    journey took me to the American University of Armenia, where I laid the foundation for a career in
                    education. With experience across various disciplines, including social media and video editing, I
                    now leverage these skills to create impactful eLearning solutions that blend instructional design
                    principles with engaging, meaningful content.
                </p>
                <p>
                    I hold a BA in Communications, which has equipped me with the ability to craft clear, compelling
                    messages and engage diverse audiences. My MA in TEFL has further honed my expertise in language
                    education, enabling me to create targeted and effective learning experiences. Together, these
                    qualifications have shaped my approach to eLearning, where communication, education, and design
                    intersect to create powerful instructional content.
                </p>
                <p>
                    Instructional design, to me, is the art of creating learning experiences that truly resonate with
                    learners. My approach is grounded in the belief that learning should be intuitive, engaging, and
                    visually captivating. By combining instructional design principles with a keen eye for visual
                    design, marketing strategies, and video editing techniques, I develop courses that are not only
                    educational but also enjoyable. My goal is to create learning experiences that are memorable,
                    impactful, and aligned with the goals of both the learners and the organizations I work with.
                    Whether it's interactive simulations, scenario-based learning, or visually rich content, I focus on
                    designing experiences that make a lasting impression.
                </p>

            </div>

        </div>

    </article>

<?php
get_footer();
