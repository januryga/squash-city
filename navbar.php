<!--  Navbar  -->


<div class="fixed">
    <div class="logo">
        <span class="hide-for-medium-only"><a href="<?php echo home_url() ?>">Squash City</a></span>
        <span class="show-for-medium-only"><a href="<?php echo home_url() ?>">SC</a></span>
    </div>
	<nav class="top-bar high-shadow"
         data-topbar
         data-options="scrolltop: false"
         role="navigation">
        
		<ul class="title-area">
			 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="name"> </li>
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
