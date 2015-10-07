<?php
/*
Template Name: Cennik
*/
?>

<?php get_header(); ?>

	<!-- Content -->

	<div class="row collapse">
		<div class="small-12 medium-8 large-6 column small-centered">
			<h0>Cennik</h0>
			<table class="price-table center">
				<thead>
					<tr>
						<td colspan="3">Poniedziałek - Piątek</td>
						<td>Weekend</td>
					</tr>
				</thead>
				<tbody>

					<col>
					<col>
					<col>
					<col>

					<tr class="hours">
						<td><ho>7</ho> - <ho>9</ho></td>
						<td><ho>10</ho> - <ho>16</ho></td>
						<td><ho>17</ho> - <ho>23</ho></td>
						<td><ho>7</ho> - <ho>22</ho></td>
					</tr>

					<?php
					$args = array( 'post_type' => 'price');
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>

						<?php get_template_part('partials/price-card'); ?>

					<?php
					endwhile;
					?>



				</tbody>
			</table>

		</div>
	</div>


<?php get_footer(); ?>
