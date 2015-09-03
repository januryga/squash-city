<!-- Article Card -->
<div class="article-card-wrap">
	<a href="<?php the_permalink(); ?>">
		<div class="article-card">
			<?php echo get_the_post_thumbnail(); ?>
			<article-title><?php the_title(); ?></article-title>
		</div>
	</a>
</div>
