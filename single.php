<?php get_header() ?>

<div class="row">
	<div class="small-12 medium-9 large-7 small-centered column">
		<!--Post Content-->
		<?php while ( have_posts() ) : the_post(); ?>
			<h3><?php  the_title() ?></h3>
			<?php the_content() ?>
		<?php endwhile; ?>
		<!--End Post Content -->
	</div>

</div>

<?php get_footer() ?>
