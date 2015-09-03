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
					<li><a href="rezerwacja.html"><i class="mdi mdi-calendar-plus"></i> Rezerwacja</a></li>
					<li><a href="#"><i class="mdi mdi-home-modern"></i> Nasze Kluby</a></li>
					<li class="active"><a href="trenerzy.html"><i class="mdi mdi-account-multiple"></i> Trenerzy</a></li>
					<li><a href="#"><i class="mdi mdi-cash"></i> Cennik</a></li>
					<li><a href="kontakt.html"><i class="mdi mdi-phone"></i> Kontakt</a></li>
				</ul>

			</section>
		</nav>
	</div>
	<!-- End Navbar  -->


	<!-- Content -->
	<div class="row">
		<div class="small-12 medium-9 large-10 center column">
			<!-- Profiles -->
			<ul class="small-block-grid-1
					   medium-block-grid-1
					   large-block-grid-2">
				<li>
					<!-- Profile Card -->
					<div class="profile-card">

						<!-- Photo & Name -->
						<img src="img/placeholders/guyfieri.png">
						<div class="profile-info">
							Guy Fieri
							<a href="tel:509123577"><i class="mdi mdi-phone"></i> 509 123 577</a>
						</div>
						<!-- End Photo & Name -->

						<!-- About Text -->
						<p>Trener z międzynarodowym certyfikatem trenerskim 2-go stopnia.<br>

							Numer jeden w rankingu Polskiej Federacji Squasha w latach 2004-2008 oraz wielokrotna Mistrzyni Polski.
							Na Drużynowych Mistrzostwach Europy ENCC jako rakieta numer jeden wraz z damską drużyną zdobywczyni w 2006 roku medalu srebrnego i brązowego w 2007 roku.<br>

							Wychowanka światowej klasy trenera Paul’a Anthony Lake’a, który również jest jej “mistrzem” jeśli chodzi o trenowanie innych. Od 2005 roku zajmuje się nauką gry w squasha. Prowadzi zajęcia indywidualne i grupowe, z dorosłymi i dziećmi.
							Trenuje grupę dobrze zapowiadających się juniorów i z  ramienia PFSu jest osobą odpowiedzialną za szkolenie i program juniorski.</p>
						<!-- End About Text -->
					</div>
					<!-- Profile Card -->

				</li>


			</ul>
			<!-- End Profiles -->
		</div>
	</div>
	<!--End Content -->


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
