<?php
/**
 * Products Template
 *
 * @package Advanced WooCommerce Theme
 */

// Current page.
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$args = [
	'post_type'      => 'product',
	'posts_per_page' => 10,
	'paged'          => $paged,
	'order'          => 'DESC',
	'post_status'    => 'publish',
];

$the_query = new WP_Query( $args );

?>
<div class="products container mx-auto my-24 px-4 xl:px-0">
	<div class="row">
		<?php
		if ( $the_query->have_posts() ) {
		?>
		
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$index         = 0;
			$no_of_columns = 3;
			if ( 0 === $index % $no_of_columns ) {
				?>
				<div class="col-lg-4 col-md-3 col-sm-12">
					
				

				<?php
			}

			get_template_part( 'template-parts/front-page/product' );

			$index ++;

			// if ( 0 !== $index && 0 === $index % $no_of_columns ) {
				?>
				</div>
				<?php
			endwhile;
			?>
		</div>
		<?php
		}
		?>
</div>

