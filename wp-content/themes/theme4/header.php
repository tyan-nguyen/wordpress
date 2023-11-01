<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
 <div class="container header__container">
  <?php 
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
  	<img src="<?php echo $image[0];?>" alt="">
  </a>

    <?php   
   /*  if ( function_exists( 'the_custom_logo' ) ) {
    	the_custom_logo();
    } */
    ?>
 <?php
  wp_nav_menu( array(
   'theme_location'  => 'menu-1',//location in functions
   'container'    => 'nav',//nav
   'container_class'  => 'menu',//nav
   'menu_class'    => 'menu__list',//ul
   //additional add in functions php
   'list_item_class'   => 'menu__item',//li
   'link_class'        => 'menu__link'//a
   
  ) );
 ?>
 </div>
</header>
