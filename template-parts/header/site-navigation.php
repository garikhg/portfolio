<?php
/**
 * Displays the site navigation.
 */
?>
<nav id="site-navigation" class="primary-navigation relative flex" aria-label="<?php esc_attr_e( 'Primary menu', 'portfolio' ) ?>">
	<div class="menu-button-container -mr-2 md:-mr-3">
		<button id="primary-mobile-menu" class="w-14 h-14 flex justify-center items-center rounded-full bg-light-gray lg:hidden">
            <span class="block">
                <span class="icon-hamburger w-6 block h-0.5 bg-black my-1.5"></span>
                <span class="icon-hamburger w-4 block h-0.5 bg-black my-1.5"></span>
            </span>
			<span class="sr-only"><?php esc_html_e( 'Menu', 'portfolio' ); ?></span>
		</button>
	</div>
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'menu_class'      => 'menu-wrapper flex items-center list-none justify-between gap-x-2 ml-auto -mr-3',
			'container_class' => 'primary-menu-container hidden lg:block',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'fallback_cb'     => false,
		)
	); ?>
</nav>
