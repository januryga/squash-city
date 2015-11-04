<?php global $post_num; ?>
<ul class="tabs" data-tab>

    <!-- Google Maps tab nav:-->
    <li class="tab-title active">
        <a href="#map<?php echo "$post_num-1" ?>">Dojazd</a>
    </li>

    <!-- Extra Maps tabs nav loop: -->
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
    else:
        echo "Error displaying maps.";
    endif;
    ?>
</div>
