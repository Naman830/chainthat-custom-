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
        wp_register_style('theme-style', get_stylesheet_uri(), [], filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('header', AQUILA_DIR_URI . '/assets/css/header.css', [], false, 'all');
        wp_register_style('front', AQUILA_DIR_URI . '/assets/css/front.css', [], false, 'all');
        wp_register_style('footer', AQUILA_DIR_URI . '/assets/css/footer.css', [], false, 'all');
        wp_register_style('platform', AQUILA_DIR_URI . '/assets/css/platform.css', [], false, 'all');
        wp_register_style('contact-main', AQUILA_DIR_URI . '/assets/css/contact.css', [], false, 'all');


        wp_register_style('bootstrap', AQUILA_DIR_URI . '/assets/build/css/bootstrap.css', [], false, 'all');
        wp_register_style('main-sass', AQUILA_DIR_URI . '/assets/build/css/search.css', ['bootstrap'], null, 'all');
        wp_register_style('temp-css', AQUILA_DIR_URI . '/assets/src/home.css', ['bootstrap'], null, 'all');
        wp_register_style('about-css', AQUILA_DIR_URI . '/assets/src/about.css', ['bootstrap'], null, 'all');

        // Enqueue Styles
        wp_enqueue_style('theme-style');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('header');
        wp_enqueue_style('front');
        wp_enqueue_style('footer');

        wp_enqueue_style('bootstrap');
        // wp_enqueue_style('main-sass');
        // wp_enqueue_style('temp-css');
        // wp_enqueue_style('about-css');
        wp_enqueue_style('contact-main');
        wp_enqueue_style('platform');
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
