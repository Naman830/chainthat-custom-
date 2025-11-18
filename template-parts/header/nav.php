<?php

/**
 * Header Navigation Tempalte
 *
 */
?>
<?php

$menu_class = AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id =  $menu_class->get_menu_id('plug-header-menu');

$header_jew_1_id =  $menu_class->get_menu_id('plug-jew1');
$header_jew_2_id =  $menu_class->get_menu_id('plug-jew2');
$header_jew_3_id =  $menu_class->get_menu_id('plug-jew3');
$header_jew_4_id =  $menu_class->get_menu_id('plug-jew4');

// $header_dis_1_id =  $menu_class->get_menu_id('plug-dis1');
// $header_dis_2_id =  $menu_class->get_menu_id('plug-dis2');
// $header_dis_3_id =  $menu_class->get_menu_id('plug-dis3');
// $header_dis_4_id =  $menu_class->get_menu_id('plug-dis4');


// $header_bag_1_id =  $menu_class->get_menu_id('plug-bag1');
// $header_bag_2_id =  $menu_class->get_menu_id('plug-bag2');
// $header_bag_3_id =  $menu_class->get_menu_id('plug-bag3');
// $header_bag_4_id =  $menu_class->get_menu_id('plug-bag4');

// $header_lts_1_id =  $menu_class->get_menu_id('plug-lts1');
// $header_lts_2_id =  $menu_class->get_menu_id('plug-lts2');
// $header_lts_3_id =  $menu_class->get_menu_id('plug-lts3');
// $header_lts_4_id =  $menu_class->get_menu_id('plug-lts4');


// $header_watch_1_id =  $menu_class->get_menu_id('plug-watch1');
// $header_watch_2_id =  $menu_class->get_menu_id('plug-watch2');
// $header_watch_3_id =  $menu_class->get_menu_id('plug-watch3');
// $header_watch_4_id =  $menu_class->get_menu_id('plug-watch4');


// $header_bread_1_id =  $menu_class->get_menu_id('plug-bread1');
// $header_bread_2_id =  $menu_class->get_menu_id('plug-bread2');
// $header_bread_3_id =  $menu_class->get_menu_id('plug-bread3');
// $header_bread_4_id =  $menu_class->get_menu_id('plug-bread4');

// $header_clear_1_id =  $menu_class->get_menu_id('plug-clear1');
// $header_clear_2_id =  $menu_class->get_menu_id('plug-clear2');
// $header_clear_3_id =  $menu_class->get_menu_id('plug-clear3');
// $header_clear_4_id =  $menu_class->get_menu_id('plug-clear4');



// $header_menus = wp_get_nav_menu_items($header_menu_id);

// $header_jew_1 = wp_get_nav_menu_items($header_jew_1_id);
// $header_jew_2 = wp_get_nav_menu_items($header_jew_2_id);
// $header_jew_3 = wp_get_nav_menu_items($header_jew_3_id);
// $header_jew_4 = wp_get_nav_menu_items($header_jew_4_id);

// $header_dis_1 = wp_get_nav_menu_items($header_dis_1_id);
// $header_dis_2 = wp_get_nav_menu_items($header_dis_2_id);
// $header_dis_3 = wp_get_nav_menu_items($header_dis_3_id);
// $header_dis_4 = wp_get_nav_menu_items($header_dis_4_id);


// $header_bag_1 = wp_get_nav_menu_items($header_bag_1_id);
// $header_bag_2 = wp_get_nav_menu_items($header_bag_2_id);
// $header_bag_3 = wp_get_nav_menu_items($header_bag_3_id);
// $header_bag_4 = wp_get_nav_menu_items($header_bag_4_id);

// $header_lts_1 = wp_get_nav_menu_items($header_lts_1_id);
// $header_lts_2 = wp_get_nav_menu_items($header_lts_2_id);
// $header_lts_3 = wp_get_nav_menu_items($header_lts_3_id);
// $header_lts_4 = wp_get_nav_menu_items($header_lts_4_id);

// $header_watch_1 = wp_get_nav_menu_items($header_watch_1_id);
// $header_watch_2 = wp_get_nav_menu_items($header_watch_2_id);
// $header_watch_3 = wp_get_nav_menu_items($header_watch_3_id);
// $header_watch_4 = wp_get_nav_menu_items($header_watch_4_id);


// $header_bread_1 = wp_get_nav_menu_items($header_bread_1_id);
// $header_bread_2 = wp_get_nav_menu_items($header_bread_2_id);
// $header_bread_3 = wp_get_nav_menu_items($header_bread_3_id);
// $header_bread_4 = wp_get_nav_menu_items($header_bread_4_id);


// $header_clear_1 = wp_get_nav_menu_items($header_clear_1_id);
// $header_clear_2 = wp_get_nav_menu_items($header_clear_2_id);
// $header_clear_3 = wp_get_nav_menu_items($header_clear_3_id);
// $header_clear_4 = wp_get_nav_menu_items($header_clear_4_id);





// echo '<pre>';
//   print_r( $header_submenus );
//   echo '</pre>';

?>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">
      <?php

      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      }

      ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 30px;">

      <?php

      if (! empty($header_menus) && is_array($header_menus)) {

      ?>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <?php

          foreach ($header_menus as $menu_item) {
            if (!$menu_item->menu_item_parent) {

              $child_menu_item = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);

              $has_children = ! empty($child_menu_item) && is_array($child_menu_item);

          ?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo esc_html__($menu_item->title); ?> <img src="<?php echo get_template_directory_uri() . '/assets/images/home/icons/arrow-down.png' ?>" alt="user" style="width: 15px;">
                </a>

                <?php if ($menu_item->ID == 72) { ?>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_jew_1)) {
                        foreach ($header_jew_1 as $header_jew_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_jew_1_item->url); ?>">
                            <?php echo esc_html__($header_jew_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_jew_2)) {
                        foreach ($header_jew_2 as $header_jew_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_jew_2_item->url); ?>">
                            <?php echo esc_html__($header_jew_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_jew_3)) {
                        foreach ($header_jew_3 as $header_jew_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_jew_3_item->url); ?>">
                            <?php echo esc_html__($header_jew_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_jew_4)) {
                        foreach ($header_jew_4 as $header_jew_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_jew_4_item->url); ?>">
                            <?php echo esc_html__($header_jew_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>

                <!-- display & storage -->
                <?php if ($menu_item->ID == 73) { ?>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_dis_1)) {
                        foreach ($header_dis_1 as $header_dis_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_dis_1_item->url); ?>">
                            <?php echo esc_html__($header_dis_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_dis_2)) {
                        foreach ($header_dis_2 as $header_dis_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_dis_2_item->url); ?>">
                            <?php echo esc_html__($header_dis_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_dis_3)) {
                        foreach ($header_dis_3 as $header_dis_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_dis_3_item->url); ?>">
                            <?php echo esc_html__($header_dis_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_dis_4)) {
                        foreach ($header_dis_4 as $header_dis_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_dis_4_item->url); ?>">
                            <?php echo esc_html__($header_dis_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>


                <?php if ($menu_item->ID == 74) { ?>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_bag_1)) {
                        foreach ($header_bag_1 as $header_bag_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bag_1_item->url); ?>">
                            <?php echo esc_html__($header_bag_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_bag_2)) {
                        foreach ($header_bag_2 as $header_bag_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bag_2_item->url); ?>">
                            <?php echo esc_html__($header_bag_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_bag_3)) {
                        foreach ($header_bag_3 as $header_bag_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bag_3_item->url); ?>">
                            <?php echo esc_html__($header_bag_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_bag_4)) {
                        foreach ($header_bag_4 as $header_bag_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bag_4_item->url); ?>">
                            <?php echo esc_html__($header_bag_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>


                <?php if ($menu_item->ID == 174) { ?>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_lts_1)) {
                        foreach ($header_lts_1 as $header_lts_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_lts_1_item->url); ?>">
                            <?php echo esc_html__($header_lts_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_lts_2)) {
                        foreach ($header_lts_2 as $header_lts_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_lts_2_item->url); ?>">
                            <?php echo esc_html__($header_lts_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_lts_3)) {
                        foreach ($header_lts_3 as $header_lts_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_lts_3_item->url); ?>">
                            <?php echo esc_html__($header_lts_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_lts_4)) {
                        foreach ($header_lts_4 as $header_lts_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_lts_4_item->url); ?>">
                            <?php echo esc_html__($header_lts_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>


                <?php if ($menu_item->ID == 78) { ?>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_watch_1)) {
                        foreach ($header_watch_1 as $header_watch_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_watch_1_item->url); ?>">
                            <?php echo esc_html__($header_watch_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_watch_2)) {
                        foreach ($header_watch_2 as $header_watch_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_watch_2_item->url); ?>">
                            <?php echo esc_html__($header_watch_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_watch_3)) {
                        foreach ($header_watch_3 as $header_watch_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_watch_3_item->url); ?>">
                            <?php echo esc_html__($header_watch_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_watch_4)) {
                        foreach ($header_watch_4 as $header_watch_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_watch_4_item->url); ?>">
                            <?php echo esc_html__($header_watch_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>

                <?php if ($menu_item->ID == 79) { ?>


                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_bread_1)) {
                        foreach ($header_bread_1 as $header_bread_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bread_1_item->url); ?>">
                            <?php echo esc_html__($header_bread_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_bread_2)) {
                        foreach ($header_bread_2 as $header_bread_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bread_2_item->url); ?>">
                            <?php echo esc_html__($header_bread_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_bread_3)) {
                        foreach ($header_bread_3 as $header_bread_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bread_3_item->url); ?>">
                            <?php echo esc_html__($header_bread_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_bread_4)) {
                        foreach ($header_bread_4 as $header_bread_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_bread_4_item->url); ?>">
                            <?php echo esc_html__($header_bread_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>



                <?php if ($menu_item->ID == 80) { ?>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_clear_1)) {
                        foreach ($header_clear_1 as $header_clear_1_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_clear_1_item->url); ?>">
                            <?php echo esc_html__($header_clear_1_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_clear_2)) {
                        foreach ($header_clear_2 as $header_clear_2_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_clear_2_item->url); ?>">
                            <?php echo esc_html__($header_clear_2_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3 dropdown-column">
                      <?php
                      if (! empty($header_clear_3)) {
                        foreach ($header_clear_3 as $header_clear_3_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_clear_3_item->url); ?>">
                            <?php echo esc_html__($header_clear_3_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                      if (! empty($header_clear_4)) {
                        foreach ($header_clear_4 as $header_clear_4_item) {
                      ?>
                          <a class="dropdown-item" href="<?php echo esc_url($header_clear_4_item->url); ?>">
                            <?php echo esc_html__($header_clear_4_item->title); ?>
                          </a>
                      <?php
                        }
                      }

                      ?>
                    </div>
                  </ul>
                <?php } ?>

              </li>





          <?php   }
          }

          ?>

        </ul>


      <?php

      }

      ?>
    </div>
  </div>
</nav>

<?php

// wp_nav_menu(
//   array(
//     'theme_location' => 'plug-header-menu',
//     'container_class' => 'navbar-nav'
//   )
// ); 
?>


<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->