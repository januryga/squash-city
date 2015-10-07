<!--  Navbar  -->
<div class="fixed">
	<nav class="top-bar shadow" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				<h1 class="hide-for-medium-only"><a href="<?php echo home_url() ?>">Squash City</a></h1>
				<h1 class="show-for-medium-only"><a href="<?php echo home_url() ?>">SC</a></h1>
			</li>
			 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<ul class="right">
				<?php

				$params = array(
					'theme_location'  => 'header-menu',
					'menu'            => '',
				);
				wp_nav_menu( $params );

				?>
			</ul>

		</section>
	</nav>
</div>
<!-- End Navbar  -->
