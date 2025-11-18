<?php
/**
 * Footer Tempalte
 *
 */
?>
<?php

$menu_class = AQUILA_THEME\Inc\Menus::get_instance();
$footer_menu1_id = $menu_class->get_menu_id('plug-footer1-menu');
$footer_menu2_id = $menu_class->get_menu_id('plug-footer2-menu');

$footer_menus1 = wp_get_nav_menu_items($footer_menu1_id);
$footer_menus2 = wp_get_nav_menu_items($footer_menu2_id);

?>
</div>
</div>
<!-- content End -->


<?php wp_footer(); ?>


<!-- footer starts here sir -->

<style>
    @import url("https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap");

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        text-decoration: none;
    }

    :root {
        --main-color: #eb7923;
        --white-color: #ffffff;
        --green-color: #00524c;
    }

    img {
        max-width: 100%;
    }

    .container-all {
        width: 100% !important;
        max-width: 1600px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
        box-sizing: border-box !important;
    }

    .footer-top {
        padding: 40px;
    }

    /* Footer Style */
    .footer-area {
        background: var(--green-color);
        color: var(--white-color);
        transition: all 0.6s ease !important;
    }

    .footer-area:hover {
        border-top-left-radius: 120px;
        border-top-right-radius: 120px;
    }


    /* Top section links */
    .footer-link {
        color: var(--white-color);
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
    }


    /* Social icons */
    .footer-icon-link ion-icon {
        font-size: 22px;
        display: grid;
        place-items: center;
        color: var(--white-color);
    }

    /* Divider line */
    .footer-divider {
        border-bottom: 1px solid #ffffff;
        width: 100%;
    }

    /* Bottom section */


    .footer-desc {
        font-size: 14px;
        line-height: 1.4;
        margin-top: 70px;
        padding: 0px !important;
    }

    .footer-bottom {
        padding: 20px 40px !important;
    }

    .leftImage {
        height: 150px;
    }

    /* Images */
    .footer-logo,
    .footer-bottom-img {
        max-width: 100%;
    }

    /* Responsive Adjustments */

    @media (min-width: 2000px) {
        .footer-link {
            font-size: 18px;
        }

        footer.footer-area.bg-green.mt-5.pb-4 {
            max-width: 1600px;
            margin: auto;
        }
        
        .footer-inner-container {
            max-width: 1600px;
            margin: auto;
        }

    }

    @media (max-width: 764px) {
        .footer-desc {
            font-size: 14px;
            text-align: center !important;
        }

        .row.align-items-center.footer-top,
        .footer-bottom-container {
            text-align: center;
            gap: 10px;
        }

        .leftImage {
            height: auto;
        }

        .footer-desc {
            margin-top: 20px;
        }

        .footer-bootom-right {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }


    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


<footer class="footer-area bg-green mt-5 pb-4">
    <div class="footer-inner-container">

        <!-- ========== TOP SECTION ========== -->
        <div class="row align-items-center footer-top">
            <!-- Logo -->
            <div class="col-md-4 col-12 mb-3 mb-md-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo/footer-logo.png"
                    alt="chainthat Logo">
            </div>

            <!-- Menu + Icons -->
            <div class="col-md-8 col-12">
                <div
                    class="d-flex flex-wrap justify-content-md-end justify-content-center align-items-center gap-4 footer-link-container">

                    <a href="#" class="footer-link">Contact Us</a>
                    <a href="#" class="footer-link">Privacy Policy</a>

                    <a href="#" class="footer-icon-link ms-2">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    <a href="#" class="footer-icon-link">
                        <ion-icon name="logo-twitch"></ion-icon>
                    </a>

                </div>
            </div>
        </div>

        <!-- Line -->
        <div class="footer-divider"></div>

        <!-- ========== BOTTOM SECTION ========== -->
        <div class="row align-items-center footer-bottom pt-4   footer-bottom-container">

            <!-- Left Image -->
            <div class="col-md-6 col-12 mb-4 mb-md-0 leftImage">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/soc-badge.svg"
                    alt="footer badge">
            </div>

            <!-- Right Text -->
            <div class="col-md-6 col-12 text-md-end text-start pt-2 footer-bootom-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo/logo2.png"
                    alt="activate agility">


                <p class="footer-desc">
                    © ChainThat 2025. Registered Company 09841465 ChainThat Limited
                </p>
            </div>
        </div>
    </div>
    </div>
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>