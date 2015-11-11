<table class="price-table">
    <col>
    <col>
    <col>
    <col>
    <thead>
        <tr>
            <th colspan="3">Poniedziałek - Piątek</th>
            <th>Weekend</th>
        </tr>
        <tr class="hours">
            <th><ho>7</ho> - <ho>9</ho></th>
            <th><ho>9</ho> - <ho>17</ho></th>
            <th><ho>17</ho> - <ho>23</ho></th>
            <th><ho>7</ho> - <ho>22</ho></th>
        </tr>
    </thead>
    <tbody>

<?php
// check if the repeater field has any rows of data
if( have_rows('tier') ):
    // loop through the rows of data
    while ( have_rows('tier') ) : the_row();


        // Pricing tier:
        get_template_part('partials/price-tier');

        //begin new table if 'space' is set to True
        if( get_sub_field('space') ){
            $make_space = '
                </tbody>
            </table>
            <table class="price-table">
                <col>
                <col>
                <col>
                <col>

                <tbody>
            ';
            echo $make_space;
        }
        // End of tables


    endwhile;

else:
    echo "Error displaying pricing (not found in database)";
    // no rows found

endif;
?>



    </tbody>
</table>
