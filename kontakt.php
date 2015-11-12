<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header() ?>

<!-- Content -->
<div class="row">
    <div class="small-12 medium-9 large-10 small-centered column">
        <h0>Kontakt</h0>
    </div>
</div>

<div class="row">
    <div class="small-12 medium-9 large-10 small-centered column">
        <!-- Locations -->
        <ul class="small-block-grid-1
                   medium-block-grid-1
                   large-block-grid-2">

<?php
$post_num = 1;
$loop = new WP_Query('post_type=location');
while ( $loop->have_posts() ) : $loop->the_post();
?>

            <li>

                <?php get_template_part('partials/location-card'); ?>

            </li>

<?php
$post_num++;
endwhile;
?>


        </ul>
        <!-- End Locations -->
    </div>
</div>

<div class="push-down"></div>

<?php get_footer(); ?>