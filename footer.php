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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


<footer class="footer-area bg-green mt-5">
    <div class="footer-inner-container">

        <!-- ========== TOP SECTION ========== -->
        <div class="row align-items-center footer-top">
            <!-- Logo -->
            <div class="col-md-4 col-12 mb-3 mb-md-0 footer-logo-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo/footer-logo.png"
                    alt="chainthat Logo">
            </div>

            <!-- Menu + Icons -->
            <div class="col-md-8 col-12">
                <div
                    class="d-flex flex-wrap justify-content-md-end justify-content-center align-items-center gap-4 footer-link-container">
                    <div class="name-footer-container">
                        <a href="#" class="footer-link">Contact Us</a>
                        <a href="#" class="footer-link">Privacy Policy</a>
                    </div>
                    <div class="icon-footer">
                        <a href="#" class="footer-icon-link ms-2" style="width: 16px">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                        <a href="#" class="footer-icon-link ms-2" style="width: 16px">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icons/twitter.png"
                                alt="twitter ">
                        </a>
                    </div>


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