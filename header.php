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
					<li class="active"><a href="index.html"><i class="mdi mdi-home"></i> Home</a></li>
					<li><a href="rezerwacja.html"><i class="mdi mdi-calendar-plus"></i> Rezerwacja</a></li>
					<li><a href="#"><i class="mdi mdi-home-modern"></i> Nasze Kluby</a></li>
					<li><a href="trenerzy.html"><i class="mdi mdi-account-multiple"></i> Trenerzy</a></li>
					<li><a href="cennik.html"><i class="mdi mdi-cash"></i> Cennik</a></li>
					<li><a href="kontakt.html"><i class="mdi mdi-phone"></i> Kontakt</a></li>
				</ul>

			</section>
		</nav>
	</div>
	<!-- End Navbar  -->
