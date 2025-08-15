<div class="main-nav-wrapper">
	<nav id="main-nav" data-skin="search-in-main-nav live-search-dark" class="main-nav header-nav live-search-parent" aria-label="Primary Navigation">
		<div class="container">
			<div class="main-menu-wrapper">
				<div id="menu-components-wrap">
					
					<div class="main-menu main-menu-wrap tie-alignleft">
						<div id="main-nav-menu" class="main-menu header-menu">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'main-menu', // must match register_nav_menu()
								'container'      => false,
								'menu_id'        => 'menu-main-menu',
								'menu_class'     => 'menu',
								'fallback_cb'    => false,
								'depth'          => 3 // supports dropdowns
							));
							?>
						</div>
					</div><!-- .main-menu.tie-alignleft /-->

					<ul class="components">
						<li class="search-bar menu-item custom-menu-link" aria-label="Search">
							<form method="get" id="search" action="<?php echo esc_url(home_url('/')); ?>">
								<input id="search-input" class="is-ajax-search" type="text" name="s" title="खोज्‍नुहोस" placeholder="खोज्‍नुहोस" />
								<button id="search-submit" type="submit">
									<span class="fa fa-search" aria-hidden="true"></span>
									<span class="screen-reader-text">खोज्‍नुहोस</span>
								</button>
							</form>
						</li>
					</ul><!-- Components -->

				</div><!-- #menu-components-wrap /-->
			</div><!-- .main-menu-wrapper /-->
		</div><!-- .container /-->
	</nav><!-- #main-nav /-->
</div><!-- .main-nav-wrapper /-->
