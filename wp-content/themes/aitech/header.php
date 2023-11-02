<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aitech
 */

$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

$menuID = $menuLocations['menu-main']; // Get the *primary* menu ID

$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

//var_dump($primaryNav);

//echo array_count_values(array_column($primaryNav, 'menu_item_parent'))['67']; // outputs: 2

//echo array_count_values(array_map('intval', array_column($primaryNav, 'menu_item_parent')))['67'];

function searchArr($array, $key, $value)
{
    $results = array();
    
    if (is_array($array)) {
        foreach ($array as $arrItem) {            
            if (isset($arrItem->$key) && $arrItem->$key == $value) {
                $results[] = $arrItem;
            }
            
            /* foreach ($array as $subarray) {
                $results = array_merge($results, $arrItem);
            } */
        }
    }
    
    return $results;
}

//var_dump(searchArr($primaryNav, 'menu_item_parent', '68'));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI.Tech - Artificial Intelligence HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	
    <!-- Favicon -->
    <!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png" rel="icon"> -->
		<link href="<?php echo get_site_icon_url(); ?>" rel="icon">
		
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-white">AI<span class="text-dark">.</span>Tech</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    	<?php /* ?>
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="project.html" class="nav-item nav-link">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <!-- <a href="team.html" class="dropdown-item active">Our Team</a>-->
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="faq.html" class="dropdown-item">FAQs</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <?php */ ?>
                        
                        <?php 
                        //just use for 1 level subitem
                        foreach ($primaryNav as $menuItem){
                            if($menuItem->menu_item_parent == '0'):
                            $listChild = searchArr($primaryNav, 'menu_item_parent', $menuItem->object_id);
                            if($listChild == null){
                        ?>
                        <a href="<?= $menuItem->url ?>" class="nav-item nav-link"><?= $menuItem->title ?></a>
                        <?php 
                            } else {
                                
                        ?>
                        <div class="nav-item dropdown">
                            <a href="<?= $menuItem->url ?>" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><?= $menuItem->title ?></a>
                             <div class="dropdown-menu bg-light mt-2">
                             <?php 
                             foreach ($listChild as $child){
                             ?>
                             <a href="<?= $child->url ?>" class="dropdown-item"><?= $child->title ?></a>
                             <?php } ?>
                             </div>
                        </div>
                        <?php
                            }
                            endif;
                        }
                        ?>
                    </div>
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


   
    
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                	<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"  style="width:100%;">
                        <div class="input-group" style="max-width: 600px;margin:0 auto;">
                        
                            <input type="search" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <input type="hidden" name="post_type" value="post" />
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->