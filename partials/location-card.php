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




            <!-- Map Tabs -->
<?php global $post_num; ?>
            <ul class="tabs with-border" data-tab>

                <!-- Google Maps tab nav: -->
                <li class="tab-title active">
                    <a href="#map<?php echo "$post_num-1" ?>">Dojazd</a>
                </li>

                <!-- Extra Maps tabs nav: -->
<?php
if (have_rows('extra_maps')):

$row_num = 2;
while ( have_rows('extra_maps') ) : the_row();
    ?>

                <li class="tab-title">
                    <a href="#map<?php echo "$post_num-$row_num" ?>"><?php the_sub_field('name') ?></a>
                </li>

<?php
$row_num++;
endwhile;
?>

            </ul>


            <div class="tabs-content">
                <?php get_template_part('partials/location-maps') ?>
            </div>

<?php
else:

echo "Error displaying maps.";
endif;
?>

		</div>
	</li>
</ul>
