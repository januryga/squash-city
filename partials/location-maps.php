<ul class="tabs" data-tab>

    <?php
    $counter = 1;
    $id_num = 1;
    if (have_rows('extra_maps')):
        while ( have_rows('extra_maps') ) : the_row();

        ?>

            <li class="tab-title <?php activate_first() ?>"> <!-- adds "active" to first ($counter==1) -->
                <a href="#map<?php echo $id_num ?>"><?php the_sub_field('name') ?></a>
            </li>

        <?php
            $id_num++;
        endwhile;
        ?>
    </ul>

    <div class="tabs-content">

         <?php
        $counter = 1;
        $id_num = 1;
        while ( have_rows('extra_maps') ) : the_row();

        ?>

            <div class="content <?php activate_first() ?>" id="map<?php echo $id_num ?>">
                <img src="<?php the_sub_field("extra_map") ?>">
            </div>

        <?php
            $id_num++;
        endwhile;
    else:
        echo "Error displaying maps.";
    endif;
    ?>
</div>
