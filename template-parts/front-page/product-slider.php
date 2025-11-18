

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

<div id="container">
  <div id="slider-container">
    <div class="row heading-row">
        <div class="col-md-6">
            <h3>
               <strong>Special</strong> Offers
            </h3>
        </div>
        <div class="col-md-6 position-relative d-flex justify-content-end">
            <span id="slide-left" onclick="slideLeft()" class="btn"></span>
            <span id="slide-right" onclick="slideRight()" class="btn"></span>
        </div>
    </div>
    <span onclick="slideRight()" class="btn"></span>
      <div id="slider">
      <?php
		if ( $the_query->have_posts() ) {
		?>
        <?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
			$index         = 0;
			$no_of_columns = 3;
			if ( 0 === $index % $no_of_columns ) {
				?>

        
        <div class="slide">

    <?php 
    }

    get_template_part( 'template-parts/front-page/slider-content' );

    $index ++; ?>
           
		</div>
    <?php
			endwhile;
			?>
         
		<?php
		}
		?>
    </div>
    <span onclick="slideLeft()" class="btn"></span>
  </div>
</div>

