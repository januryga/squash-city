<ul class="location-accordion" data-accordion>
	<li class="location-accordion-navigation">
		<a href="#<?php the_slug() ?>">

			<div class="location-card" style="background-image: url('<?php the_background() ?>');">
				<div class="location-name"><?php the_title(); ?></div>
			</div>
		</a>
		<div id="<?php the_slug() ?>" class="content">
			<p><i class="mdi mdi-phone"></i> <?php the_phone() ?></p>
			<p><i class="mdi mdi-email"></i> <?php the_email() ?></p>
			<p><i class="mdi mdi-navigation"></i> <?php the_address() ?></p>

                Taby:
                <?php get_template_part("partials/location-maps"); ?>

		</div>
	</li>
</ul>
