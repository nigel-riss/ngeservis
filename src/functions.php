<?php

    function nge_theme_setup() {
        //Menu support
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        ));
    }

    add_action('after_setup_theme', 'nge_theme_setup');

    function wpdocs_special_nav_class( $classes, $item ) {
        if (in_array('current-menu-item', $classes)) {
            $classes[] = "main-menu__item--active";
        }
        $classes[] = "main-menu__item";

        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );

?>