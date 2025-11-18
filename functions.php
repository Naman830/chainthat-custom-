<?php
// echo '<pre>';
// print_r(filemtime(get_template_directory().'/style.css'));
// echo '</pre>';


// make a constant for get_template_directory() shhortcut;
if (! defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (! defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

function enqueue_ajax_auth_scripts()
{
    wp_enqueue_script('ajax-auth-script', get_template_directory_uri() . '/ajax-auth.js', array('jquery'), null, true);
    wp_localize_script('ajax-auth-script', 'ajax_auth_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-auth-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_auth_scripts');





// Load auotloader file.
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
// Template Tag file.
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';


// calling theme class class-plug-theme.
function aquila_get_theme_instance()
{
    AQUILA_THEME\Inc\PLUG_THEME::get_instance();
}

aquila_get_theme_instance();

function woocommerce_get_product_category_of_subcategories($category_slug)
{
    $terms_html = array();
    $taxonomy = 'product_cat';

    $parent = get_term_by('slug', $category_slug, $taxonomy);

    $children_ids = get_term_children($parent->term_id, $taxonomy);


    foreach ($children_ids as $children_id) {
        $term = get_term($children_id, $taxonomy);
        $term_link = get_term_link($term, $taxonomy);
        if (is_wp_error($term_link)) $term_link = '';

        $terms_html[] = '<a href="' . esc_url($term_link) . '" rel="tag" class="' . $term->slug . '">' . $term->name . '</a>';
    }
    return '<span class="subcategories-' . $category_slug . '">' . implode(', ', $terms_html) . '</span>';
}


add_action(
    'woocommerce_before_add_to_cart_quantity',
    function () {
        printf('<p class="qty-text">Qty</p>');
    }
);


//////////function to put text before/after woocommerce price on shop pages -------------->START<-----------------------

// add_filter( 'woocommerce_get_price_html', 'arrowdesign_customTextWithShopPagePrice' );
// function arrowdesign_customTextWithShopPagePrice($price){
// $ad_customTextWithPriceWooProd = '
//                 Be the first to review this product'; //change text in bracket to your preferred text 
// //for text after price 
// $newPriceString = $ad_customTextWithPriceWooProd . $price;
// $newPriceString = "<h4>". $newPriceString ."</h4>";
// //for text before price 
// // return $price . $ad_customTextWithPriceWooProd; //after price
// // return $ad_customTextWithPriceWooProd . $price; //before price
// //if the price is zero, or no price set
// //change XXXXX
// if( (!isset($price)) or (empty($price)) or (is_null($price)) or ($price=="") or ($price ==0) ){
// $price = " There is no price for this product.";
// }
// return $newPriceString;
// }//end function

//////////function to put text before/after woocommerce price on shop pages --------------> END <-----------------------







// Stock status.
add_action('woocommerce_single_product_summary', 'custom_stock_status', 5); // Position between add to cart button and meta

function custom_stock_status()
{
    global $product;

    if ($product->get_stock_status() == 'instock') {
        // Display the stock status
        echo '<div class="woocommerce-product-stock-status">';
        echo '<p class="stock ' . esc_attr($product->get_stock_status()) . '">' . esc_html("Availablity: In Stock") . '</p>';
        echo '</div>';
    } else {
        // Display the stock status
        echo '<div class="woocommerce-product-stock-status">';
        echo '<p class="stock ' . esc_attr($product->get_stock_status()) . '">' . esc_html("Availablity: Out Of Stock") . '</p>';
        echo '</div>';
    }
}



// Shift descriptio after add to card.
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 45, 888);



// Add comparison and wishlist buttons after add to cart button on single product page
add_action('woocommerce_after_add_to_cart_button', 'add_comparison_and_wishlist_buttons');

function add_comparison_and_wishlist_buttons()
{
    // Output comparison button
    echo '<div class="btn-wishlist-compare">';
    echo '<button class="compare-btn">';
    echo '<ion-icon name="heart"></ion-icon>Add to Compare';
    echo '</button>';

    // Output wishlist button
    echo '<button class="wishlistt-btn">';
    echo do_shortcode('[ti_wishlists_addtowishlist]');
    echo '</button>';


    echo '</div>';
}








// Add review section after single product summary
add_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_reviews', 10);

function woocommerce_output_product_reviews()
{
    // Check if reviews are enabled for the product
    if (comments_open()) {
        echo '<div id="reviews" class="">';
        // Display reviews title
        // echo '<h2>' . __('Reviews', 'woocommerce') . '</h2>';
        // Output reviews
        comments_template();
        echo '</div>';
    }
}






// remove related products.
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

// remove sidebar.
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// remove sidebar.
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

// remove sidebar.
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);



// Add feature section after single review form.
add_action('woocommerce_after_single_product_summary', 'woocommerce_output_feature_section', 10);

function woocommerce_output_feature_section()
{
    // Check if reviews are enabled for the product
    get_template_part('/template-parts/front-page/features');
    get_template_part('/template-parts/front-page/news-letter');
}






// Stock status with  count. 

// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 0 );

// add_action( 'woocommerce_single_product_summary', 'wc_loop_get_product_stock_availability_text', 5 );
//   function wc_loop_get_product_stock_availability_text() {
//     global $wpdb, $product;

//     // For variable products
//     if( $product->is_type('variable') ) {

//         // Get the stock quantity sum of all product variations (children)
//         $stock_quantity = $wpdb->get_var("
//             SELECT SUM(pm.meta_value) FROM {$wpdb->prefix}posts as p
//             JOIN {$wpdb->prefix}postmeta as pm ON p.ID = pm.post_id
//             WHERE p.post_type = 'product_variation'
//             AND p.post_status = 'publish' AND p.post_parent = '".get_the_id()."'
//             AND pm.meta_key = '_stock' AND pm.meta_value IS NOT NULL
//         ");

//         if ( $stock_quantity > 0 ) {
//             echo '<p class="stock in-stock">Avalablity: in stock</p>';
//         } else {
//             if ( is_numeric($stock_quantity) )
//                 echo '<p class="stock out-of-stock">' . __("Out of stock", "woocommerce") . '</p>';
//             else
//                 return;
//         }
//     }
//     // Other products types
//     else {
//         echo wc_get_stock_html( $product );
//     }
//   }








add_action('widgets_init', 'my_theme_sidebars');
function my_theme_sidebars()
{
    $args = array(
        'name'          => 'Awesome Sidebar %d',
        'id'            => 'awesome-sidebar',
        'description'   => 'One of the awesome sidebars',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    );

    register_sidebars(3, $args);
}




// category page filters.

function filter_products()
{
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => isset($_POST['itemsPerPage']) ? $_POST['itemsPerPage'] : 2,
        'orderby' => isset($_POST['sorting']) ? $_POST['sorting'] : 'title',
        'order' => 'DESC',
    );

    if (isset($_POST['categories']) && !empty($_POST['categories'])) {
        $args['tax_query'][] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $_POST['categories'], // Use term IDs
            'operator' => 'IN',
        );
    }

    if (isset($_POST['variations']) && !empty($_POST['variations'])) {
        foreach ($_POST['variations'] as $variation) {
            $args['tax_query'][] = array(
                'taxonomy' => 'pa_' . $variation,
                'field'    => 'slug',
                'terms'    => $variation,
                'operator' => 'IN',
            );
        }
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="row">';
        while ($query->have_posts()) {
            $query->the_post();
            $index         = 0;
            $no_of_columns = 3;
            if (0 === $index % $no_of_columns) {
                echo "<div class='product col-md-4'>";
            }

            wc_get_template_part('content', 'product');

            $index++;

            echo '</div>';
        }
        echo '</div>';
    } else {
        echo 'No products found';
    }

    wp_reset_postdata();
    die();
}
add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');



// AJAX handler to fetch cart contents
add_action('wp_ajax_get_cart_contents', 'get_cart_contents');
add_action('wp_ajax_nopriv_get_cart_contents', 'get_cart_contents');

function get_cart_contents()
{
    // Get cart contents
    ob_start(); // Start output buffering to capture HTML output
    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        $_product = $cart_item['data'];
        if ($_product->exists() && $cart_item['quantity'] > 0) {

            echo '<div class="cart-item">';
            echo "<div class='row pt-3 pb-3'>";
            echo  "<div class='col-md-3'>";
            echo '<span class="item-image">' . $_product->get_image() . '</span>';
            echo "</div>";
            echo  "<div class='col-md-8'>";
            echo '<span class="item-name">' . $_product->get_name() . '</span>';
            echo '<span class="item-price">' . wc_price($_product->get_price()) . '</span>';

            // echo '<input type="number" class="item-quantity" value="' . $product_quantity . '" data-product-id="' . $product_id . '" placeholder="' . $product_quantity . '" />';
            echo "</div>";
            echo  "<div class='col-md-1'>";
            // echo '<span class="remove-item">X</span>';
            echo "</div>";
            echo "</div>";
            echo '</div>';
        }
    }
    $cart_contents = ob_get_clean(); // Get captured HTML output and clean buffer
    echo $cart_contents;

    // Add "View Cart" and "Checkout" buttons
    echo '<div class="cart-buttons">';
    echo '<button><a class="cart-btn" href="' . wc_get_cart_url() . '" class="button view-cart">View Cart</a></button>';
    echo '<button><a class="checkout-btn" href="' . wc_get_checkout_url() . '" class="button checkout">Checkout</a></button>';
    echo '</div>';

    die();
}



// AJAX handler to remove cart item
add_action('wp_ajax_remove_cart_item', 'remove_cart_item');
add_action('wp_ajax_nopriv_remove_cart_item', 'remove_cart_item');

function remove_cart_item()
{
    $product_id = $_POST['product_id'];
    WC()->cart->remove_cart_item($product_id);
    wp_send_json_success();
}

// Other AJAX handlers remain the same as before




// AJAX handler to update cart quantity
// add_action('wp_ajax_update_cart_quantity', 'update_cart_quantity');
// add_action('wp_ajax_nopriv_update_cart_quantity', 'update_cart_quantity');

// function update_cart_quantity() {
//     $product_id = $_POST['product_id'];
//     $quantity = $_POST['quantity'];
//     WC()->cart->set_quantity($product_id, $quantity);

//     // Get updated price and totals
//     $product = wc_get_product($product_id);
//     $price = $product->get_price_html();
//     $subtotal = WC()->cart->get_cart_subtotal();
//     $total = WC()->cart->get_cart_total();

//     // Return updated price and totals
//     wp_send_json([
//         'price' => $price,
//         'subtotal' => $subtotal,
//         'total' => $total
//     ]);
// }

// // AJAX handler to fetch cart totals
// add_action('wp_ajax_get_cart_totals', 'get_cart_totals');
// add_action('wp_ajax_nopriv_get_cart_totals', 'get_cart_totals');

// function get_cart_totals() {
//     echo WC()->cart->get_cart_totals_html();
//     die();
// }






/**
 * Process the registration form.
 */
function custom_registration_process()
{
    if (isset($_POST['register']) && wp_verify_nonce($_POST['woocommerce-register-nonce'], 'woocommerce-register')) {
        $username = isset($_POST['username']) ? sanitize_user($_POST['username']) : '';
        $email    = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        // Check for errors and sanitize data

        $errors = new WP_Error();

        if (empty($username)) {
            $errors->add('username_required', __('Username is required.', 'your-text-domain'));
        }

        if (empty($email)) {
            $errors->add('email_required', __('Email address is required.', 'your-text-domain'));
        } elseif (! is_email($email)) {
            $errors->add('invalid_email', __('Invalid email address.', 'your-text-domain'));
        }

        if (empty($password)) {
            $errors->add('password_required', __('Password is required.', 'your-text-domain'));
        }

        // If there are no errors, proceed with registration
        if (empty($errors->get_error_codes())) {
            $user_id = wp_create_user($username, $password, $email);

            if (! is_wp_error($user_id)) {
                // Registration successful, perform any additional actions
            } else {
                // Registration failed, handle errors
            }
        } else {
            // Display error messages
            foreach ($errors->get_error_messages() as $error_message) {
                echo '<div class="woocommerce-error">' . esc_html($error_message) . '</div>';
            }
        }
    }
}
add_action('woocommerce_process_registration', 'custom_registration_process');




/**
 * Process the login form.
 */
function custom_login_process()
{
    if (isset($_POST['login']) && wp_verify_nonce($_POST['woocommerce-login-nonce'], 'woocommerce-login')) {
        $username = isset($_POST['username']) ? sanitize_user($_POST['username']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        // Check for errors and sanitize data
        $errors = new WP_Error();

        if (empty($username) || empty($password)) {
            $errors->add('empty_fields', __('Username and password are required.', 'your-text-domain'));
        }

        // If there are no errors, proceed with login
        if (empty($errors->get_error_codes())) {
            $user = wp_authenticate($username, $password);

            if (! is_wp_error($user)) {
                // Login successful
                wp_set_auth_cookie($user->ID, isset($_POST['rememberme']) ? true : false);
                do_action('wp_login', $user->user_login, $user);
                wp_redirect(home_url()); // Redirect to homepage after login
                exit;
            } else {
                // Login failed, add error message
                $errors->add('login_failed', $user->get_error_message());
            }
        }

        // Display error messages
        if (! empty($errors->get_error_codes())) {
            foreach ($errors->get_error_messages() as $error_message) {
                echo '<div class="woocommerce-error">' . esc_html($error_message) . '</div>';
            }
        }
    }
}
add_action('woocommerce_process_login', 'custom_login_process');








function plug_enqueue_assets()
{
    $theme_dir = get_template_directory_uri();
    $build_dir = $theme_dir . '/assets/build';

    // CSS
    $css_file = '/css/main.css';
    if (file_exists(get_template_directory() . '/assets/build/css/main.css')) {
        wp_enqueue_style('plug-style', $build_dir . $css_file, array(), filemtime(get_template_directory() . '/assets/build/css/main.css'));
    }

    // JS
    $js_file = '/js/main.js';
    if (file_exists(get_template_directory() . '/assets/build/js/main.js')) {
        wp_enqueue_script('plug-scripts', $build_dir . $js_file, array(), filemtime(get_template_directory() . '/assets/build/js/main.js'), true);
    }
}
add_action('wp_enqueue_scripts', 'plug_enqueue_assets');
