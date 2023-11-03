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


add_filter('acf/settings/remove_wp_meta_box', '__return_false');

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

//call global varible by post id in page "Global Custom Fields"
//use: echo global_custom_field("amazon_id");
function global_custom_field($key) {
    $output = get_post_meta(138, $key, true); //138 is post id of page
    echo $output;
}
//add global varible shortcode
//use [global_custom_field key="amazon_id"]
function gcf_func($atts) {
    extract(shortcode_atts(array(
        'key' => 'amazon_id'  // default value if none supplied
    ), $atts));
    return global_custom_field($key);
}
add_shortcode('global_custom_field', 'gcf_func');



//Custom field for Theme Settings
if(get_option('show_edit_global_page')=='yes'):
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
    add_options_page('Global Custom Fields', 'Global Fields', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
    ?>
    <div class='wrap'>
    <h2>Global fields</h2>
    <form method="post" action="options.php">
    <?php wp_nonce_field('update-options') ?>

    <p><strong>Menu Footer 1 heading:</strong><br />
    <input type="text" name="footer_menu_1_heading" size="45" value="<?php echo get_option('footer_menu_1_heading'); ?>" /></p>

    <p><strong>Menu Footer 2 heading:</strong><br />
    <input type="text" name="footer_menu_2_heading" size="45" value="<?php echo get_option('footer_menu_2_heading'); ?>" /></p>
    
    <p><strong>Footer copyright content:</strong><br />
    <textarea name="footer_copyright" cols="100" rows="3"><?php echo get_option('footer_copyright'); ?></textarea></p>

    <p><input type="submit" name="Submit" value="Update Options" /></p>

    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="footer_menu_1_heading,footer_menu_2_heading,footer_copyright" />

    </form>
    </div>
    <?php
}
endif;
////Custom field for Theme Settings