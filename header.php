<?php

/**
 * Header Template
 *
 */
?>




<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- <title>Plug Maker</title> -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- To add scripts in after the body tag; -->
    <?php

    if (function_exists('wp_body_open')) {
        wp_body_open();
    }

    ?>
    <div id="page" class="site">
        <div class="header-main">
            <header id="masthead" class="site-header" role="banner">

                <?php get_template_part('template-parts/header/nav-new'); ?>

            </header>
        </div>

        <div id="content" class="site-content">