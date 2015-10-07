<!-- Profile Card -->
<div class="profile-card">

	<!-- Photo & Name -->
	<?php the_thumbnail(); ?>

	<div class="profile-info">
		<?php the_title(); ?>
		<a href="tel:<?php the_phone(); ?>">
			<i class="mdi mdi-phone"></i> <?php the_phone(); ?>
		</a>
	</div>
	<!-- End Photo & Name -->

	<!-- About Text -->
	<p><?php the_content(); ?></p>
	<!-- End About Text -->
</div>
<!-- Profile Card -->
