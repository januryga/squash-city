<?php get_header(); ?>


	<?php get_template_part('partials/homepage-banner') ?>

	<!-- Content -->
	<div class="row" id="news">
		<div class="small-12
					medium-10
					large-8
					small-centered column">
			<ul class="small-block-grid-1
					   medium-block-grid-2
					   large-block-grid-2
                       js-masonry"
                data-masonry-options='{"itemSelector": ".masonry-item" }'>


<?php $loop = new WP_Query( 'category_name=news' ); ?>
<?php: while ( $loop->have_posts() ) : $loop->the_post(); ?>


					<li class="masonry-item">

						<?php get_template_part('partials/article-card'); ?>

					</li>

<?php endwhile;
wp_reset_postdata(); ?>

			</ul>
		</div>
	</div>

	<!-- End Content -->





<?php get_footer(); ?>