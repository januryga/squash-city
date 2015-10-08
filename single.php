<?php get_header() ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="article row small-collapse">
    <div class="small-12 medium-10 large-8 small-centered column">
        <?php the_post_thumbnail( 'full' ); ?>
    </div>
    <div class="body small-12 medium-10 large-8 small-centered column">
        <!--Post Content-->
        
        <h3><?php the_title() ?></h3>
        
			<?php the_content() ?>
        
        <!--End Post Content -->
    </div>  
</div>

<?php endwhile; ?>



<?php get_footer() ?>
