<?php
/**
 * Displays the site navigation.
 */
?>
<nav id="site-navigation" class="primary-navigation relative flex"
     aria-label="<?php esc_attr_e( 'Primary menu', 'portfolio' ) ?>">
    <div class="menu-button-container -mr-2 md:-mr-3">

        <label for="menu-drawer" class="btn btn-circle relative swap swap-rotate drawer-button lg:hidden mb-0">
            <input id="menu-drawer" type="checkbox" class="drawer-toggle"/>
            <span class="sr-only"><?php esc_html_e( 'Menu', 'portfolio' ) ?></span>

            <!-- hamburger icon -->
            <svg class="swap-off fill-current"
                 xmlns="http://www.w3.org/2000/svg"
                 width="32"
                 height="32"
                 viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/>
            </svg>

            <!-- close icon -->
            <svg class="swap-on fill-current"
                 xmlns="http://www.w3.org/2000/svg"
                 width="32"
                 height="32"
                 viewBox="0 0 512 512">
                <polygon
                        points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/>
            </svg>
        </label>
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
