<?php
/*
Template Name: Cennik
*/
?>

<?php get_header(); ?>

<!-- Content -->
<div class="row">
    <div class="small-12 medium-8 large-6 column small-centered">
        <h0>Cenniki</h0>
    </div>
</div>

<div class="row collapse">
    <div class="small-12 medium-8 large-6 column small-centered">
        
        <!-- Tabs -->
        <ul class="tabs" data-tab>

<?php
$args = array( 'post_type' => 'price');
$name_loop = new WP_Query( $args );
$counter = 1;

while ( $name_loop->have_posts() ) : $name_loop->the_post();
?>

            <li class="tab-title <?php activate_first() //add "active" to the first element ?>">
                <a href="#<?php the_slug() ?>"><?php the_title() ?></a>
            </li>

<?php
endwhile;
wp_reset_postdata();
?>

        </ul>
        <!-- End Tabs -->
        
        
        
        <!-- Tabs Content: Price Tables -->
        <div class="tabs-content">

<?php
$counter = 1;
$loop = new WP_Query('post_type=price' );
while ( $loop->have_posts() ) : $loop->the_post();
?>

            <div class="content <?php activate_first() //add "active" to the first element ?>"
                 id="<?php the_slug() ?>">

                <!-- Main table: -->
                <?php get_template_part('partials/price-table'); ?>
                
                
                <br>
                <br>
                <h3>Zajęcia z trenerem</h3>
                
                <!-- Lessons table -->
                <?php get_template_part('partials/price-lesson-table'); ?>
                <div style="margin: 0.5rem 0 !important;">Do ceny zajęć należy doliczyć cenę wynajęcia kortu wg. cennika.</div>
                <a href="<?php echo home_url() ?>/trenerzy"
                   class="button round small">

                    <i class="mdi mdi-account-multiple"></i>
                     Poznaj naszych trenerów

                </a>
                <br>
                <br>
                
                
                <h3>Dodatkowe usługi</h3>
                <!-- Extra table -->
                <?php get_template_part('partials/price-extra-table'); ?>

            </div>

<?php
endwhile;
wp_reset_postdata();
?>
        </div>
        <!-- End Price Tables -->



    </div>
</div>


<?php get_footer(); ?>