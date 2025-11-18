<?php
// Header Navigation Template (cleaned & simplified)
$menu_class = AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('plug-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
?>
<nav class="navbar header-navbar navbar-expand-lg ">
    <div class="container-fluid header-container g-0" style="padding-left: 0;gap: 0;">
        <a class="navbar-brand header-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                // fallback text logo
                bloginfo('name');
            }
            ?>
        </a>

        <button class="navbar-toggler header-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteHeaderMenu" aria-controls="siteHeaderMenu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-textdomain'); ?>">
            <span class="header-toggler-icon">☰</span>
        </button>

        <div class="collapse navbar-collapse" id="siteHeaderMenu">
            <?php if (!empty($header_menus) && is_array($header_menus)) : ?>
                <ul class="navbar-nav header-nav ms-auto">
                    <?php
                    foreach ($header_menus as $menu_item) {
                        if (!$menu_item->menu_item_parent) {
                            // find child items
                            $child_items = array_filter($header_menus, function ($it) use ($menu_item) {
                                return intval($it->menu_item_parent) === intval($menu_item->ID);
                            });

                            $has_children = !empty($child_items);
                    ?>
                            <li class="nav-item <?php echo $has_children ? 'dropdown' : ''; ?>">
                                <?php if ($has_children) : ?>
                                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url); ?>" id="menu-item-<?php echo intval($menu_item->ID); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-item-<?php echo intval($menu_item->ID); ?>">
                                        <?php foreach ($child_items as $child): ?>
                                            <li><a class="dropdown-item" href="<?php echo esc_url($child->url); ?>"><?php echo esc_html($child->title); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                    <?php
                        } // end if parent
                    } // end foreach
                    ?>
                </ul>
            <?php else : ?>
                <?php
                // Fallback: WordPress menu if the custom menu variable is empty
                wp_nav_menu(array(
                    'theme_location' => 'plug-header-menu',
                    'container'      => '',
                    'menu_class'     => 'navbar-nav header-nav ms-auto',
                    'fallback_cb'    => false
                ));
                ?>
            <?php endif; ?>
        </div>
    </div>
</nav>