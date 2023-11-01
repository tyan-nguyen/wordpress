<?php
//docs: https://freetuts.net/cach-tao-theme-wordpress-5781.html

// Thêm các chức năng và tính năng cho Theme của bạn ở đây
function my_theme_setup() {
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'my_theme' ),
        'footer'  => esc_html__( 'Footer Menu', 'my_theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'my_theme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'my_theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'my_theme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'my_theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'my_theme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'my_theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'my_theme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'my_theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}


add_action( 'widgets_init', 'my_theme_widgets_init' );


/** chua biet lam gi */
function my_theme_shortcode( $atts, $content = null ) {
    return '<div class="my-theme-shortcode">' . $content . '</div>';
}
add_shortcode( 'my-theme-shortcode', 'my_theme_shortcode' );

/*cho tuy chinh hinh dai dien cho post*/
add_theme_support( 'post-thumbnails' );


/*trang cau hinh theme*/

function my_theme_options_page() {
    add_theme_page(
        'My Theme Options',   // Tên trang
        'Theme Options 11',      // Tên menu
        'manage_options',     // Quyền truy cập
        'my-theme-options',   // ID của trang
        'my_theme_options'    // Hàm hiển thị nội dung trang
    );
}
add_action( 'admin_menu', 'my_theme_options_page' );
 
function my_theme_options() {
    echo '<h1>Welcome to Theme Options Page</h1>';
}

/*trang cau hinh theme*/



?>