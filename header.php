<?php

/**
 * Header Template
 *
 */
?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap");

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        text-decoration: none;
            /* outline: 1px solid red; */
    }

    body{
            overflow: hidden;

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



    /* ======================= */
    .navbar {
        min-height: 90px;
        background-color: var(--white-color);
        postion: fixed;
        z-index: 1000;
        padding: 0px 20px !important;
    }

    .navbar-logo a img {
        max-width: 222px;
    }

    /* Dropdown Base */
    .menu-items ul li {
        position: relative;
    }

    /* Hide submenu initially */
    .menu-items ul li .submenu {
        position: absolute;
        top: 100%;
        left: 0;
        background: var(--white-color);
        padding: 15px 0;
        list-style: none;
        width: auto;
        min-width: 10rem;
        max-wdth: 1000px;
        border: 1px solid var(--main-color);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.25s ease;
        z-index: 999;
    }

    .menu-items ul #dropdown-active .submenu {
        min-width: 380px;
    }

    /* Submenu links */
    .menu-items ul li .submenu li a {
        padding: 10px 20px;
        display: block;
        color: var(--green-color);

        font-size: 1.1rem;
        font-weight: 600;
        text-transform: capitalize;
        text-decoration: none;
        line-height: 1em;
        letter-spacing: -0.2px;
        color: var(--green-color);
        transition: 0.4s ease;
    }

    .menu-items ul li .submenu li a:hover {
        color: var(--main-color);
    }

    /* Show submenu on hover */
    .menu-items ul li:hover>.submenu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .menu-items ul {
        list-style: none;
    }

    .menu-items ul {
        gap: 30px;
        margin: 0px;
        padding: 0px;
    }

    .menu-items ul li a {
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: capitalize;
        text-decoration: none;
        line-height: 1em;
        letter-spacing: -0.2px;
        color: var(--green-color);

        transition: 0.4s ease;
    }

    .arrowTag {
        gap: 8px;
        display: flex;
    }

    .menu-items ul li a:hover {
        color: var(--main-color)
    }


    .cta-btn {
        text-transform: uppercase;
        padding: 15px 25px;
        transition: 0.4s all ease;
        text-decoration: none;
        border-radius: 60px;
        color: var(--white-color);
        background-color: var(--main-color);
        font-size: 12px;
        font-weight: 400;
        text-transform: capitalize;
        line-height: 1em;
        letter-spacing: -0.2px;
    }

    .cta-btn:hover {
        color: var(--white-color);
        background-color: var(--green-color);
    }

    /* HIDE hamburger at desktop */
    .mobile-toggle {
        display: none;
        font-size: 32px;
        font-weight: 700;
        cursor: pointer;
        color: var(--green-color);
    }

    /* Default hide close icon */
    .close-icon {
        display: none;
    }

    /* MOBILE VIEW */
    /* Smooth menu animation */


    @media (min-width: 2000px) {
        .menu-items ul li a {
            font-size: 1.3rem;
        }

        .cta-btn {
            font-size: 14px;
        }
    }
    
    @media (max-width: 1360px) {
        .menu-items ul li a {
            font-size: 1rem !important;
        }
    }
    
    @media(max-width: 1200px) {
        .menu-items ul {
            gap: 20px;
            margin: 0px;
            padding: 0px;
        }

        .menu-items ul li a {
            font-size: 14px !important;
        }
    }

    @media(max-width:1060px) {
        .menu-items {
            display: block !important;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-10px);
            transition: all .35s ease;

            position: absolute;
            top: 90px;
            left: 1%;
            width: calc(100% - 2%);
            background: var(--white-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 20px;
            border-radius: 15px;
            border: 1px solid var(--main-color);
        }

        .menu-items.active {
            max-height: 700px;
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-toggle {
            display: grid;
            place-items: center;
        }

        /* Mobile menu vertical */
        .menu-items ul {
            flex-direction: column;
            align-items: flex-start !important;
        }

        /* Remove CTA */
        .navbar-cta {
            display: none;
        }

        .menu-items ul li a {
            font-size: 16px;
        }

        .menu-items ul #dropdown-active .submenu {
            max-width: 100%;
            width: 100%;
            font-size: 16px;
            display: block;
        }

        .menu-items ul li .submenu li a {
            padding: 8px 12px;
            font-size: 16px;
        }

        /* Toggle icons */
        .mobile-toggle.active .menu-icon {
            display: none;
        }

        .mobile-toggle.active .close-icon {
            display: block;
        }


    }

</style>


<!-- ========================================================================================== -->
<!-- ========================================================================================== -->
<!-- ========================================================================================== -->
<!-- ========================================================================================== -->



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- HEADER START -->
<header id="main-header">
    <nav class="navbar" id="site-navbar" aria-label="Main Navigation">
        <div class="container-all d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <div class="navbar-logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo/logo.png"
                        alt="chainthat Logo">
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
                            <li><a href="#">Beyond Policy Adminstration (BPA)</a></li>
                            <li><a href="#">Beyond Multinational Prgram (BMPA)</a></li>
                            <li><a href="#">Beyond Insurance Accounting(BIA)</a></li>
                        </ul>
                    </li>

                    <!-- About Us -->
                    <li class="dropdown">
                        <a href="#" class="arrowTag">About Us <ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="submenu">
                            <li><a href="#">Leadership</a></li>
                            <li><a href="#">Partner</a></li>
                        </ul>
                    </li>

                    <!-- Solutions -->
                    <li class="dropdown">
                        <a href="#" class="arrowTag">Solutions <ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="submenu">
                            <li><a href="#">Mutuals</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </li>

                    <!-- Single Items -->
                    <li><a href="#" class="arrowTag">News & Insights</a></li>
                    <li><a href="#" class="arrowTag">Careers</a></li>
                    <li><a href="#" class="arrowTag">Contact Us</a></li>

                </ul>
            </div>


            <!-- CTA -->
            <div class="navbar-cta">
                <a href="#" class="cta-btn">BOOK A DEMO</a>
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