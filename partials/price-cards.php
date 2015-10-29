<?php
// check if the repeater field has rows of data

if( have_rows('tier') ):

    // loop through the rows of data
    while ( have_rows('tier') ) : the_row();
    ?>
        <tr class="description" style="background-color: <?php the_sub_field('color') ?>;">
            <td colspan="4"><?php the_sub_field('name'); ?></td>
        </tr>
        <tr style="background-color: <?php the_sub_field('color') ?>;">
            <td><?php the_sub_field('week1') ?></td>
            <td><?php the_sub_field('week2') ?></td>
            <td><?php the_sub_field('week3') ?></td>
            <td><?php the_sub_field('weekend') ?></td>
        </tr>

        <?php 
        if( get_sub_field('space') )
            echo '<tr style="border:0; background-color:rgba(0, 0, 0, 0) !important;"><td style="border:0; background-color:rgba(0, 0, 0, 0) !important;">', PHP_EOL, '</td></tr>';
        ?>

    <?php
    endwhile;

else:
    echo "Error displaying pricing (not found in database)";
    // no rows found

endif;
?>
