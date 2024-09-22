<?php
/**
 * Displays the site navigation drawer.
 */

$nav_menu = wp_nav_menu(
	array(
		'theme_location' => 'primary',
		'menu_class'     => 'menu-wrapper menu text-base-content text-base w-full p-4',
		'container'      => false,
		'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'fallback_cb'    => false,
		'echo'           => false,
	)
);

if ( ! $nav_menu ) {
	return;
}
?>
<div class="drawer z-[100]">
    <input id="menu-drawer" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-side">
        <label for="menu-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <div class="bg-base-200 w-80 min-h-full">
            <h5 class="text-lg font-semibold text-primary font-heading border-b border-base-300 p-4 px-8">
				<?php if ( is_front_page() ): ?>
					<?php echo esc_html__( 'Menu', 'portfolio' ) ?>
				<?php elseif ( is_singular( 'portfolio' ) ): ?>
					<?php echo esc_html__( 'Portfolio', 'portfolio' ) ?>
				<?php else: ?>
					<?php the_title() ?>
				<?php endif; ?>
            </h5>

			<?php echo $nav_menu ?>
        </div>
    </div>
</div>
