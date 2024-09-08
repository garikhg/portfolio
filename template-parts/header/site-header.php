<?php
/**
 * Displays the site header.
 */
?>
<header id="masthead" class="site-banner sticky top-6 py-6 z-50">
    <div class="container">
        <div class="bg-background flex items-center justify-between rounded-full h-16 px-4 md:px-6">
            <?php get_template_part('template-parts/header/site-branding') ?>
            <?php get_template_part('template-parts/header/site-navigation') ?>
        </div>
    </div>
</header>
