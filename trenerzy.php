<?php
/*
Template Name: Trenerzy
*/
?>

<?php get_header(); ?>

	<!-- Content -->
	<div class="row">
		<div class="small-12 medium-9 large-10 small-centered column">
			<!-- Profiles -->
			<ul class="small-block-grid-1
					   medium-block-grid-1
					   large-block-grid-2">

				<?php
				$args = array( 'post_type' => 'profile');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>

				<li>

					<?php get_template_part('partials/profile-card'); ?>

				</li>

				<?php
				endwhile;
				?>


			</ul>
			<!-- End Profiles -->
		</div>
	</div>



	<!--End Content -->

<?php get_footer(); ?>
