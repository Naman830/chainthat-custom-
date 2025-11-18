<?php 
/**
* Header Navigation Tempalte
*
*/
?>
<?php

$menu_class = AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id =  $menu_class->get_menu_id('plug-topbarleft-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);
      // echo '<pre>';
      //   print_r( $header_menus );
      //   echo '</pre>';

?>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">


        <div class="row w-100">
            <div class="col-lg-8 col-md-8 col-sm-12 topbar-left">
                <?php
                
                if (! empty( $header_menus ) && is_array( $header_menus )) { 
                    
                ?>
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <?php
                        
                            foreach( $header_menus as $menu_item ) {
                            if ( !$menu_item->menu_item_parent ) { 
                                
                                $child_menu_item = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );

                                $has_children = ! empty( $child_menu_item ) && is_array ( $child_menu_item );

                                if ( ! $has_children ) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/images/home/icons/tick.png' ?>"  alt="tick" style="width: 15px;margin-right: 10px;">   <?php echo esc_html__( $menu_item->title ); ?>
                                    </a>
                                </li>
                            <?php  
                                } else {
                            ?>

                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo esc_html__( $menu_item->title ); ?>
                                </a>
                                
                                <?php 
                                    foreach ($child_menu_item as $child_menu_items) {
                                    ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo esc_url($child_menu_items->url ); ?>">
                                        <?php echo esc_html__( $child_menu_items->title ); ?>
                                    </a>
                                    </ul>
                                    <?php
                                    }
                                ?>
                                </li>

                            <?php 
                                
                                }
                                                        
                                ?>
                            


                            

                        <?php   }
                            }
                        
                        ?>

                </ul>


                <?php
                
                }
                
                ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 topbar-right">
                <ul class="navbar-nav">
                    <li class="dropdown">
                        <li class=" dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <a class="nav-link" href="#"> £ GBP  <img src="<?php echo get_template_directory_uri().'/assets/images/home/icons/arrow-down-white.png' ?>"  alt="arrow" style="width: 10px;"></a>
                    </li>
                        <ul class="dropdown-menu currency-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">EUR</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/my-account/" class="nav-link">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/home/icons/user.png' ?>"  alt="user" style="width: 20px;"> Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <img class="open-cart" src="<?php echo get_template_directory_uri().'/assets/images/home/icons/cart.png' ?>"  alt="cart" style="width: 20px;"> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex" id="searchForm">
                            <input class="form-control me-2" name="search_query" id="searchInput" type="search" placeholder="Search entire store here" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><ion-icon name="search-outline"></ion-icon></button>
                        </form>
                        
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>



<div id="searchResults" class="mt-3">
   
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>

jQuery(document).ready(function($) {
    $('#searchResults').hide();
    $('#searchForm').on('submit', function(event) {
        event.preventDefault(); // Prevent form submission
       
        var searchText = $('#searchInput').val();
        if (searchText !== '') {
            $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/template-search.php',
                type: 'post',
                data: {
                    search_query: searchText, // Change the key to 'query'
                },
                success: function(response) {
                    $('#searchResults').show();
                    $('#searchResults').html(response);
                }
            });
        } else {
            $('#searchResults').html('');
        }
    });
});


</script>


<script>


jQuery(document).ready(function($) {
    // Open the sliding cart
    $('.open-cart').click(function(e) {
        e.preventDefault();
        $('.sliding-cart').css('right', '0');
        // Fetch and display cart contents
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'get_cart_contents' },
            success: function(response) {
                $('.cart-content').html(response);
                updateCart();
            }
        });
    });

    // Close the sliding cart
    $('.close-cart').click(function() {
        $('.sliding-cart').css('right', '-450px');
    });
});


    // Remove item from cart
    $(document).on('click', '.remove-item', function(e) {
        e.preventDefault();
        var $cartItem = $(this).closest('.cart-item');
        var productId = $cartItem.data('product-id');
        // Remove item via AJAX
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: {
                action: 'remove_cart_item',
                product_id: productId,
            },
            success: function(response) {
                $cartItem.remove();
                updateCart();
            }
        });
    });










// jQuery(document).ready(function($) {
//     // Open the sliding cart
//     $('.open-cart').click(function(e) {
//         e.preventDefault();
//         $('.sliding-cart').css('right', '0');
//         // Fetch and display cart contents
//         $.ajax({
//             url: '<?php echo admin_url('admin-ajax.php'); ?>',
//             type: 'post',
//             data: { action: 'get_cart_contents' },
//             success: function(response) {
//                 $('.cart-content').html(response); // Replace existing content with new cart items
//                 updateCart();
//             }
//         });
//     });

//     // Close the sliding cart
//     $('.close-cart').click(function() {
//         $('.sliding-cart').css('right', '-300px');
//     });

//     // Update cart when quantity changes
//     $(document).on('change', '.item-quantity input', function() {
//         var $input = $(this);
//         var productId = $input.data('product-id');
//         var quantity = $input.val();
//         // Update cart via AJAX
//         $.ajax({
//             url: '<?php echo admin_url('admin-ajax.php'); ?>',
//             type: 'post',
//             data: {
//                 action: 'update_cart_quantity',
//                 product_id: productId,
//                 quantity: quantity
//             },
//             success: function(response) {
//                 // Update price and total in the cart
//                 var $cartItem = $input.closest('.cart-item');
//                 $cartItem.find('.item-price').html(response.price);
//                 $('.cart-totals .cart-subtotal').html(response.subtotal);
//                 $('.cart-totals .cart-total').html(response.total);
//             }
//         });
//     });

//     // Function to update cart totals
//     function updateCart() {
//         $.ajax({
//             url: '<?php echo admin_url('admin-ajax.php'); ?>',
//             type: 'post',
//             data: { action: 'get_cart_totals' },
//             success: function(response) {
//                 $('.cart-totals').html(response); // Update cart totals
//             }
//         });
//     }
// });


</script>