<?php
/*
Template Name: Rezerwacja
*/
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Squash City</title>
	<link rel="stylesheet" href="scss/app.css">

	<!-- Open Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<!-- Material Design Icons -->
	<link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

	<script src="js/vendor/modernizr.js"></script>

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
					<li><a href="index.html"><i class="mdi mdi-home"></i> Home</a></li>
					<li class="active"><a href="rezerwacja.html"><i class="mdi mdi-calendar-plus"></i> Rezerwacja</a></li>
					<li><a href="#"><i class="mdi mdi-home-modern"></i> Nasze Kluby</a></li>
					<li><a href="trenerzy.html"><i class="mdi mdi-account-multiple"></i> Trenerzy</a></li>
					<li><a href="#"><i class="mdi mdi-cash"></i> Cennik</a></li>
					<li><a href="kontakt.html"><i class="mdi mdi-phone"></i> Kontakt</a></li>
				</ul>

			</section>
		</nav>
	</div>
	<!-- End Navbar  -->


	<!-- Content -->
	<iframe style="width:1020px; height:700px; border:0 none;" src="http://korty4u.pl/palio/html.run?_Instance=korty4u&_ptn=17002">
	</iframe>


	<!-- End Content -->


	<!-- Footer -->
	<foot>
		<!-- Foundation Scripts -->
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/fastclick.js"></script>

		<script src="js/foundation.min.js"></script>
		<script src="js/app.js"></script>

		<script>
			$(document).foundation();
		</script>
		<!-- End Foundation Scripts -->
	</foot>
	<!-- End Footer -->
</body>
</html>
