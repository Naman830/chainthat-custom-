<?php

/**
 * Explore Flavours section - WooCommerce products
 *
 * Usage: include this template where you want the section to show.
 *
 * Notes:
 *  - Requires WooCommerce active.
 *  - Change 'posts_per_page' to show more/less products.
 */

if (! class_exists('WooCommerce')) {
    // Fallback: show message or exit silently
    return;
}

// Query args - fetch 3 latest published products (adjust as needed)
$args = [
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$loop = new WP_Query($args);

if (! $loop->have_posts()) {
    wp_reset_postdata();
    return;
}

// Optional: define color classes to cycle through for each product
$color_classes = ['blue', 'green', 'red'];
$index = 0;
?>

<section class="flavours-section">
    <div class="container">
        <h2 class="section-title">Explore Flavours</h2>

        <div class="row flavours-row">
            <?php while ($loop->have_posts()) : $loop->the_post();
                $product = wc_get_product(get_the_ID());
                if (! $product) continue;

                $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (! $img_url) {
                    $img_url = wc_placeholder_img_src(); // placeholder if no image
                }

                $title = get_the_title();
                $price = $product->get_price() !== '' ? wc_price($product->get_price()) : esc_html__('N/A', 'your-textdomain');

                $color = $color_classes[$index % count($color_classes)];
                $index++;
            ?>
                <div class="col-12 col-md-4 flavour-col">
                    <div class="flavour-card">
                        <div class="flavour-visual <?php echo esc_attr($color); ?>">

                            <!-- lightning SVG (inline so we can color it via CSS) -->


                            <!-- product image -->
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>" class="flavour-img">

                        </div>

                        <div class="flavour-meta">
                            <div class="flavour-title"><?php echo esc_html($title); ?></div>
                            <div class="flavour-price"><?php echo wp_kses_post($price); ?></div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>