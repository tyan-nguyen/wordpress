<?php
//add menu to theme
function my_theme_setup() {
    register_nav_menus( array(
        'menu-main' => esc_html__( 'Primary Menu', 'my_theme' ),
        'menu-footer1'  => esc_html__( 'Footer Menu 1', 'my_theme' ),
        'menu-footer2'  => esc_html__( 'Footer Menu 2', 'my_theme' ),
        'menu-bottom'  => esc_html__( 'Bottom Menu', 'my_theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

/*cho tuy chinh hinh dai dien cho post*/
add_theme_support( 'post-thumbnails' );

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);