<!-- Welcome Banner -->
<div id="welcome-banner">
    <div class="welcome-text">Witaj w Squash&nbsp;City.</div>

    <!-- Helper Buttons -->
    <div class="row small-collapse medium-uncollapse"
         id="helper-buttons">
        
        <div class="small-4 small-offset-0
                    medium-2 medium-offset-3
                    large-2 large-offset-3
                    column">

            <!-- Button -->
            <div class="helper-button-wrap">
                <a href="<?php echo home_url() ?>/rezerwacja">
                    <div class="helper-button">
                        <i class="mdi mdi-large mdi-calendar-plus"></i>
                        <br>
                        <helper-label>Zarezerwuj</helper-label>
                    </div>
                </a>
            </div>
            <!-- End Button -->

        </div>


        <div class="small-4 medium-2 large-2 column">

            <!-- Button -->
            <div class="helper-button-wrap">
                <div class="helper-button">
                    <a data-dropdown="phone_dropdown"
                       aria-controls="phone_dropdown"
                       aria-expanded="false"
                       data-options="align:bottom">

                        <i class="mdi mdi-large mdi-phone"></i>
                        <br>
                        <helper-label>Zadzwoń</helper-label>

                   </a>
                </div>
            </div>
            <!-- End Button -->

        </div>


        <div class="small-4 medium-2 large-2 column end">

            <!-- Button -->
            <div class="helper-button-wrap">
                <div class="helper-button">
                    <a data-dropdown="location_dropdown"
                       aria-controls="location_dropdown"
                       aria-expanded="false"
                       data-options="align:bottom">
                        <i class="mdi mdi-large mdi-navigation"></i>
                        <br>
                        <helper-label>Znajdź nas</helper-label>
                    </a>
                </div>
            </div>
            <!-- End Button -->

        </div>


    </div>
    <!--End  Helper Buttons -->
</div>
<!-- End Welcome Banner -->




<!-- Invisible Content - Dropdowns-->

<ul id="phone_dropdown"
    class="f-dropdown"
    data-dropdown-content
    aria-hidden="true"
    tabindex="-1">
    
<?php
$loop = new WP_Query('post_type=location');
while ( $loop->have_posts() ) : $loop->the_post();
?>

    <li>
        <a href="tel:<?php the_phone() ?>">
            <i class="mdi mdi-phone"></i> <?php the_title() ?>
            <div class="phone-number show-for-medium-up"><?php the_phone() ?></div>
        </a>
    </li>

<?php
endwhile;
wp_reset_postdata();
?>
    
</ul>




<ul id="location_dropdown"
    class="f-dropdown"
    data-dropdown-content
    aria-hidden="true"
    tabindex="-1">

<?php
$loop = new WP_Query('post_type=location');
while ( $loop->have_posts() ) : $loop->the_post();

$google_map = get_field('google_map');

$lat = $google_map['lat'];
$lng = $google_map['lng'];
$maps_link = "http://maps.google.com/?q=$lat,$lng";
?>      

    <li>
        <a href="<?php echo $maps_link ?>">
            <i class="mdi mdi-navigation"></i> <?php the_title() ?>
        </a>
    </li>

<?php
endwhile;
wp_reset_postdata();
?>

</ul>
<!-- End Invisible Content -->
