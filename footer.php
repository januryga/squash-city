	<!-- Footer -->
	<div class="footer">
		<div class="row">
			<div class="small-12 column">
				© 2015 Squash City. Created by Jan Uryga
				<a href="<?php get_site_url() ?>/wp-admin">Login</a>
			</div>
		</div>
	</div>
	<foot>
		<!-- Foundation Scripts -->
		<script src="<?php stylesheet_url() ?>/js/vendor/jquery.js"></script>
		<script src="<?php stylesheet_url() ?>/js/vendor/fastclick.js"></script>

		<script src="<?php stylesheet_url() ?>/js/foundation.min.js"></script>
		<script src="<?php stylesheet_url() ?>/js/app.js"></script>


		<script>
			$(document).foundation();
		</script>
		<!-- End Foundation Scripts -->


        <!-- Advanced Custom Fields - Google Maps Embed -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="<?php stylesheet_url() ?>/components/acf-map/acf-map-script.js"></script>

        <script>
            //o co chodzi
			/*$(document).foundation();
            $(document).foundation('accordion', 'reflow');*/
		</script>

	</foot>
	<!-- End Footer -->
</body>
</html>
