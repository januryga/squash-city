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
        if( get_sub_field('space') ){
            //echo "<tr><td></td></tr>";
            $make_space = '
                </tbody>
            </table>
            <table class="price-table">
                <col>
                <col>
                <col>
                <col>

                <thead style="visibility:hidden;">
                    <tr>
                        <td colspan="3">Poniedziałek - Piątek</td>
                        <td>Weekend</td>
                    </tr>
                </thead>
                <tbody>
            ';
            echo $make_space;
        }
        ?>

    <?php
    endwhile;

else:
    echo "Error displaying pricing (not found in database)";
    // no rows found

endif;
?>
