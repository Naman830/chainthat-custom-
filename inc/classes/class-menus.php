<?php 


namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;


class Menus {
    use Singleton;

    protected function __construct() {
        // wp_die('hello');

        // load classes.
        $this->setup_hooks();
    }


    protected function setup_hooks() {
        // action and  filters.
        
        // enqueue styles and 
        add_action('init', [$this, 'register_menus']);
   
    }

    public function register_menus() {
        register_nav_menus(
            [
              'plug-header-menu' => esc_html__( 'Header Menu', 'plug' ),
              'plug-footer1-menu' => esc_html__( 'Footer Menu 1', 'plug' ),
              'plug-footer2-menu' => esc_html__( 'Footer Menu 2', 'plug' ),
              'plug-topbarleft-menu' => esc_html__( 'Topbar Left', 'plug' ),
              'plug-jew1' => esc_html__( 'Jewellery Boxes 1', 'plug' ),
              'plug-jew2' => esc_html__( 'Jewellery Boxes 2', 'plug' ),
              'plug-jew3' => esc_html__( 'Jewellery Boxes 3', 'plug' ),
              'plug-jew4' => esc_html__( 'Jewellery Boxes 4', 'plug' ),
              'plug-dis1' => esc_html__( 'Display & Storage 1', 'plug' ),
              'plug-dis2' => esc_html__( 'Display & Storage 2', 'plug' ),
              'plug-dis3' => esc_html__( 'Display & Storage 3', 'plug' ),
              'plug-dis4' => esc_html__( 'Display & Storage 4', 'plug' ),
              'plug-bag1' => esc_html__( 'Bags & Pouches 1', 'plug' ),
              'plug-bag2' => esc_html__( 'Bags & Pouches 2', 'plug' ),
              'plug-bag3' => esc_html__( 'Bags & Pouches 3', 'plug' ),
              'plug-bag4' => esc_html__( 'Bags & Pouches 4', 'plug' ),
              'plug-lts1' => esc_html__( 'Labels, Tags & Sundries 1', 'plug' ),
              'plug-lts2' => esc_html__( 'Labels, Tags & Sundries 2', 'plug' ),
              'plug-lts3' => esc_html__( 'Labels, Tags & Sundries 3', 'plug' ),
              'plug-lts4' => esc_html__( 'Labels, Tags & Sundries 4', 'plug' ),
              'plug-watch1' => esc_html__( 'Watches 1', 'plug' ),
              'plug-watch2' => esc_html__( 'Watches 2', 'plug' ),
              'plug-watch3' => esc_html__( 'Watches 3', 'plug' ),
              'plug-watch4' => esc_html__( 'Watches 4', 'plug' ),
              'plug-bread1' => esc_html__( 'Bread 1', 'plug' ),
              'plug-bread2' => esc_html__( 'Bread 2', 'plug' ),
              'plug-bread3' => esc_html__( 'Bread 3', 'plug' ),
              'plug-bread4' => esc_html__( 'Bread 4', 'plug' ),
              'plug-clear1' => esc_html__( 'Clearence 1', 'plug' ),
              'plug-clear2' => esc_html__( 'Clearence 2', 'plug' ),
              'plug-clear3' => esc_html__( 'Clearence 3', 'plug' ),
              'plug-clear4' => esc_html__( 'Clearence 4', 'plug' ),
            ]
           );
    }

 public function get_menu_id( $location ) {

    $locations = get_nav_menu_locations();

    // avoid undefined index warning
    if ( isset( $locations[$location] ) ) {
        return $locations[$location];
    }

    return '';
}



    public function get_child_menu_items( $menu_array, $parent_id ) {

		$child_menus = [];

		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {

			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}

		return $child_menus;
	}

}