<!-- Profile Card -->
<div class="profile-card">

	<!-- Photo & Name -->
	<img src="<?php the_post_thumbnail(); ?>">
	<div class="profile-info">
		<?php the_title(); ?>
		<a href="tel:509123577"><i class="mdi mdi-phone"></i> 509 123 577</a>
	</div>
	<!-- End Photo & Name -->

	<!-- About Text -->
	<?php the_content(); ?>
	<!-- End About Text -->
</div>
