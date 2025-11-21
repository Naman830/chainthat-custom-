<?php

/**
 * Header Navigation Tempalte
 *
 */
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- HEADER START -->
<header id="main-header">
    <nav class="navbar" id="site-navbar" aria-label="Main Navigation">
        <div class="container-all d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <div class="navbar-logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo/logo.png"
                        alt="partner1">
                </a>
            </div>

            <!-- Menu -->
            <!-- Menu -->
            <div class="menu-items">
                <ul class="d-flex align-items-center justify-content-center">

                    <!-- Platform -->
                    <li class="dropdown" id="dropdown-active">
                        <a href="#" class="arrowTag">Platform <ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="submenu">
                            <li><a href="https://paleturquoise-aardvark-551228.hostingersite.com/platform/bpa/">Beyond
                                    Policy Adminstration (BPA)</a></li>
                            <li><a href="https://paleturquoise-aardvark-551228.hostingersite.com/platform/bmnp/">Beyond
                                    Multinational Prgram (BMPA)</a></li>
                            <li><a href="https://paleturquoise-aardvark-551228.hostingersite.com/platform/bia/">Beyond
                                    Insurance Accounting(BIA)</a></li>
                        </ul>
                    </li>

                    <!-- About Us -->
                    <li class="dropdown">
                        <a href="#" class="arrowTag">About Us <ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="submenu">
                            <li><a
                                    href="https://paleturquoise-aardvark-551228.hostingersite.com/about-us/#leadership">Leadership</a>
                            </li>
                            <li><a
                                    href="https://paleturquoise-aardvark-551228.hostingersite.com/our-partners/">Partner</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Solutions -->
                    <li class="dropdown">
                        <a href="#" class="arrowTag">Solutions <ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="submenu">
                            <li><a
                                    href="https://chainthat.com/solutions-managing-general-agents/solutions-managing-general-agents1-2/">Managing
                                    General Agents</a></li>
                            <li><a
                                    href="https://paleturquoise-aardvark-551228.hostingersite.com/solution/multinational-insurance/">Multinational
                                    Insurance</a></li>
                            <li><a
                                    href="https://paleturquoise-aardvark-551228.hostingersite.com/solution/mutuals/">Mutuals</a>
                            </li>
                            <li><a
                                    href="https://paleturquoise-aardvark-551228.hostingersite.com/solution/carriers/">Careers</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Single Items -->
                    <li><a href="https://paleturquoise-aardvark-551228.hostingersite.com/news-insights/#all-news"
                            class="arrowTag">News & Insights</a></li>
                    <li><a href="https://paleturquoise-aardvark-551228.hostingersite.com/career/"
                            class="arrowTag">Careers</a></li>
                    <li><a href="/contact-us"
                            class="arrowTag">Contact Us</a></li>

                </ul>
            </div>


            <!-- CTA -->
            <div class="navbar-cta">
                <a href="https://paleturquoise-aardvark-551228.hostingersite.com/contact-us/" class="cta-btn">BOOK A DEMO</a>
            </div>

            <!-- Hamburger -->
            <div class="mobile-toggle">
                <ion-icon class="menu-icon" name="menu-outline"></ion-icon>
                <ion-icon class="close-icon" name="close-outline"></ion-icon>
            </div>

        </div>
    </nav>
</header>


<!-- HEADER END -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    const toggle = document.querySelector('.mobile-toggle');
    const menu = document.querySelector('.menu-items');

    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
        menu.classList.toggle('active');
    });
</script>