<?php global $post_num; ?>

<!-- Google Maps content:-->
<div class="content active" id="map<?php echo "$post_num-1" ?>">
    <?php get_template_part("components/acf-map/acf-map"); ?>
</div>

<!-- Extra Maps tabs content loop: -->
 <?php
$row_num = 2;
while ( have_rows('extra_maps') ) : the_row();
?>


<div class="content" id="map<?php echo "$post_num-$row_num" ?>">
    <img src="<?php the_sub_field("extra_map") ?>">
</div>


<?php
    $row_num++;
endwhile;
?>
