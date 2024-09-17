<?php
/**
 * Display project header.
 */
?>
<header class="project-header">
    <div class="container">
		<?php
		$thumbnail_classes = 'attachment-full size-full wp-post-image block w-full max-w-full h-[480px] object-cover rounded-2xl';
		the_post_thumbnail( 'full', array( 'class' => $thumbnail_classes ) );
		?>
    </div>
</header>
