<?php
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