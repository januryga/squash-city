<table class="extra-table">
    <tbody>

        <col>
        <col>

<?php
// check if the repeater field has rows of data
if( have_rows('lessons') ):
// loop through the rows of data
while ( have_rows('lessons') ) : the_row();
?>


        <tr>
            <td><?php echo the_sub_field('name') ?></td>
            <td><?php echo the_sub_field('price') ?></td>
        </tr>



<?php
endwhile;

else:
echo "Error displaying pricing (not found in database)";
// no rows found

endif;
?>


    </tbody>
</table>