<?php get_header(); ?>

	<!-- Welcome Banner -->
	<div class="welcome-banner">
		<div class="welcome-text">Witaj w Squash&nbsp;City.</div>

		<!-- Helper Buttons -->
		<div class="row small-collapse medium-uncollapse">
			<div class="small-4 small-offset-0
						medium-2 medium-offset-3
						large-2 large-offset-3
						column">

				<!-- Button -->
				<div class="helper-button-wrap">
					<a href="<?php echo home_url() ?>/rezerwacja">
						<div class="helper-button">
							<i class="mdi mdi-large mdi-calendar-plus"></i>
							<br>
							<helper-label>Zarezerwuj</helper-label>
						</div>
					</a>
				</div>
				<!-- End Button -->

			</div>


			<div class="small-4 medium-2 large-2 column">

				<!-- Button -->
				<div class="helper-button-wrap">
					<a href="tel:781417832">
						<div class="helper-button">
							<i class="mdi mdi-large mdi-phone"></i>
							<br>
							<helper-label>Zadzwoń</helper-label>
						</div>
					</a>
				</div>
				<!-- End Button -->

			</div>

			<div class="small-4 medium-2 large-2 column end">

				<!-- Button -->
				<div class="helper-button-wrap">
					<a href="<?php echo home_url() ?>/kontakt">
						<div class="helper-button">
							<i class="mdi mdi-large mdi-navigation"></i>
							<br>
							<helper-label>Znajdź nas</helper-label>
						</div>
					</a>
				</div>
				<!-- End Button -->

			</div>


		</div>
		<!--End  Helper Buttons -->
	</div>
	<!-- End Welcome Banner -->


	<!-- Content -->
	<div class="row">
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
