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

					<tr class="description">
						<td colspan="4"><i class="mdi mdi-dumbbell"></i> standardowa cena</td>
					</tr>
					<tr>
						<td>55zł</td>
						<td>45zł</td>
						<td>65zł</td>
						<td>65zł</td>
					</tr>



					<tr class="description squash-city">
						<td colspan="4"><i class="mdi mdi-star-circle"></i> z naszą kartą członkowską</td>
					</tr>
					<tr class="squash-city">
						<td>45zł</td>
						<td>35zł</td>
						<td>55zł</td>
						<td>55zł</td>
					</tr>


					<tr class="sport-card description">
						<td colspan="4"><i class="mdi mdi-heart-box"></i> z kartą SportCard™</td>
					</tr>
					<tr class="sport-card">
						<td>45zł</td>
						<td>35zł</td>
						<td>55zł</td>
						<td>50zł</td>
					</tr>


					<tr class="gold-squash description">
						<td colspan="4"><i class="mdi mdi-library-plus"></i> z kartą Gold Squash™</td>
					</tr>
					<tr class="gold-squash">
						<td>30zł</td>
						<td>40zł</td>
						<td>50zł</td>
						<td>50zł</td>
					</tr>



				</tbody>
			</table>

		</div>
	</div>


<?php get_footer(); ?>
