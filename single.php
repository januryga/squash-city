<?php get_header() ?>

<?php while ( have_posts() ) : the_post(); ?>


<div class="row small-collapse">
    <div class="article small-12 medium-10 large-8 small-centered column">
        <?php the_post_thumbnail( 'full' ); ?>
        <div class="body">
            <!--Post Content-->

            <h2><?php the_title() ?></h2>

                <?php the_content() ?>

            <!--End Post Content -->
        </div>
    </div>
</div>


<?php endwhile; ?>

<?php get_footer() ?>
