<?php
/*
Template Name: Sketch
*/
?>
<html>
<head>


    <link rel="stylesheet" type="text/css" href="<?php stylesheet_url() ?>/components/acf-map/acf-map-style.css">

</head>


<body>
    <?php
    $args = array( 'post_type' => 'location');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>


    <li>
        <div class="halo"><i class="mdi mdi-phone"></i> <?php the_phone() ?></div>
        <p><i class="mdi mdi-email"></i> <?php the_email() ?></p>
        <p><i class="mdi mdi-navigation"></i> <?php the_address() ?></p>

        <?php
        $google_map = get_field('google_map');

        if( !empty($google_map) ):
        ?>
        <br>
        <?php echo $google_map['lat']; ?>
        <br>
        <?php echo $google_map['lng']; ?>
        <br>

        <div class="acf-map">
            <div class="marker"
                 data-lat="<?php echo $google_map['lat']; ?>"
                 data-lng="<?php echo $google_map['lng']; ?>">
            </div>
        </div>


        <?php
        endif;
        ?>

    </li>


    <?php
    endwhile;
    ?>
<foot>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php stylesheet_url() ?>/components/acf-map/acf-map-script.js"></script>

</foot>
</body>




</html>
