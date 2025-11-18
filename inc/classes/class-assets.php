<?php


namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;


class Assets
{
    use Singleton;

    protected function __construct()
    {
        // wp_die('hello');

        // load classes.
        $this->setup_hooks();
    }


    protected function setup_hooks()
    {
        // action and  filters.

        // enqueue styles and 
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }


    public function register_styles()
    {
        // Register Styles
        // wp_register_style( 'theme-style', get_stylesheet_uri(), [], filemtime( AQUILA_DIR_PATH . '/style.css' ), 'all' );
        wp_register_style( 'bootstrap', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
        // wp_register_style( 'header', AQUILA_DIR_URI . '/assets/css/header.css', [], false, 'all' );
        // wp_register_style( 'front', AQUILA_DIR_URI . '/assets/css/front.css', [], false, 'all' );
        // wp_register_style( 'footer', AQUILA_DIR_URI . '/assets/css/footer.css', [], false, 'all' );
        // wp_register_style( 'single-product', AQUILA_DIR_URI . '/assets/css/single-product.css', [], false, 'all' );
        // wp_register_style( 'product-cat', AQUILA_DIR_URI . '/assets/css/taxonomy-cat.css', [], false, 'all' );
        // wp_register_style( 'cart', AQUILA_DIR_URI . '/assets/css/cart.css', [], false, 'all' );
        // wp_register_style( 'checkout', AQUILA_DIR_URI . '/assets/css/checkout.css', [], false, 'all' );
        // wp_register_style( 'myaccount', AQUILA_DIR_URI . '/assets/css/my-account.css', [], false, 'all' );
        // wp_register_style( 'responsive', AQUILA_DIR_URI . '/assets/css/responsive.css', [], false, 'all' );


        // wp_register_style('bootstrap', AQUILA_DIR_URI . '/assets/build/css/bootstrap.css', [], false, 'all');
        // wp_register_style('main-sass', AQUILA_DIR_URI . '/assets/build/css/search.css', ['bootstrap'], null, 'all');
        // wp_register_style('temp-css', AQUILA_DIR_URI . '/assets/src/home.css', ['bootstrap'], null, 'all');
        // wp_register_style('about-css', AQUILA_DIR_URI . '/assets/src/about.css', ['bootstrap'], null, 'all');
        // wp_register_style('contact-css', AQUILA_DIR_URI . '/assets/src/contact.css', ['bootstrap'], null, 'all');

        // Enqueue Styles
        // wp_enqueue_style('theme-style');
        wp_enqueue_style('bootstrap');
        // wp_enqueue_style('header');
        // wp_enqueue_style('front');
        // wp_enqueue_style('footer');
        // wp_enqueue_style('single-product');
        // wp_enqueue_style('product-cat');
        // wp_enqueue_style('cart');
        // wp_enqueue_style('checkout');
        // wp_enqueue_style('myaccount');
        // wp_enqueue_style('responsive');

        // wp_enqueue_style('bootstrap');
        // wp_enqueue_style('main-sass');
        // wp_enqueue_style('temp-css');
        // wp_enqueue_style('about-css');
        // wp_enqueue_style('contact-css');
    }


    public function register_scripts()
    {

        // Register Scripts 
        wp_register_script('theme-script', AQUILA_DIR_URI . '/assets/main.js', [], filemtime(AQUILA_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
        wp_register_script('wishlist-compare', AQUILA_DIR_URI . '/assets/comparison-wishlist.js', ['jquery'], false, true);
        wp_register_script('category-page', AQUILA_DIR_URI . '/assets/custom-product.js', ['jquery'], false, true);
        wp_register_script('search', AQUILA_DIR_URI . '/assets/search.js', ['jquery'], false, true);



        // Enqueue Scripts
        wp_enqueue_script('theme-script');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('wishlist-compare');
        wp_enqueue_script('category-page');
        wp_enqueue_script('search');
    }
}
