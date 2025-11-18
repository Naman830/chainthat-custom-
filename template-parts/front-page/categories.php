<?php
/**
 * Products Template
 *
 * @package Advanced WooCommerce Theme
 */

// Current page.


  $taxonomy     = 'product_cat';
  $orderby      = 'id';
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no
  $title        = '';
  $empty        = 0;

            

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty,

  );

 $all_categories = get_categories( $args );
 

?>
    <div class="container-fluid p-4">
            <div class="products-categories">
                <div class="row">
                    <?php
                    foreach ( $all_categories as $cat ) {

                        if ( $cat->category_parent == 0 ) {
                            $category_id = $cat->term_id;
                            $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );  

                        $index         = 0;
                        $no_of_columns = 3;
                    
                        if ( 0 === $index % $no_of_columns ) {
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-12 category-grid-col p-3" style="'.$image.'">
                        
                                
                            

                            <?php
                        }
                        $image = wp_get_attachment_url( $thumbnail_id );
                        echo '<img src="'.$image.'" alt="" width="762" height="365" />';
                        echo '<li class="cat-item"><a class="cat-link" href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';

                        $index ++;

                        // if ( 0 !== $index && 0 === $index % $no_of_columns ) {
                            ?>
                            </div>
                            <?php
                        }
                    }
                        ?>
                </div>
            </div>

    </div>

