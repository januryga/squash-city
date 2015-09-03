<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Squash City</title>

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="screen" />

	<!-- Open Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<!-- Material Design Icons -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr.js"></script>

	<?php wp_head(); ?>
</head>
<body>

<?php
	$params = array(
		'theme_location'  => 'header-menu-desktop',
		'menu'            => '',
		'link_before'     => '<i class="mdi mdi-cash"></i>',
	);
?>

<!--  Navbar  -->
	<div class="fixed">
		<nav class="top-bar shadow" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1 class="hide-for-medium-only"><a href="index.html"><logo>▰</logo>Squash City</a></h1>
					<h1 class="show-for-medium-only"><a href="index.html"><logo>▰</logo>SC</a></h1>
				</li>
				 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<?php wp_nav_menu( $params ); ?>
				</ul>

			</section>
		</nav>
	</div>
	<!-- End Navbar  -->
