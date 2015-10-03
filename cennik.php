<?php
/*
Template Name: Cennik
*/
?>

<?php get_header(); ?>

	<!-- Content -->

	<div class="row collapse">
		<div class="small-12 medium-8 large-6 column small-centered">
			<h0>Cenniki</h0>

            <ul class="tabs" data-tab>
                <li class="tab-title active"><a href="#panel1">Tab 1</a></li>
                <li class="tab-title"><a href="#panel2">Tab 2</a></li>
                <li class="tab-title"><a href="#panel3">Tab 3</a></li>
                <li class="tab-title"><a href="#panel4">Tab 4</a></li>
            </ul>
            <div class="tabs-content">
                <div class="content active" id="panel1">
                    <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
                </div>
                <div class="content" id="panel2">
                    <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
                </div>
                <div class="content" id="panel3">
                    <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
                </div>
                <div class="content" id="panel4">
                    <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
                </div>
            </div>

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

						get_template_part('partials/price-card');

					endwhile;

                    wp_reset_postdata();
					?>





				</tbody>
			</table>

		</div>
	</div>


<?php get_footer(); ?>
