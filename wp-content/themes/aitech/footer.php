<?php 
$heading1 = get_field('footer_menu_1_heading');
$heading2 = get_field('footer_menu2_title');


?>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white">AI<span class="text-primary">.</span>Tech</h1>
                    </a>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4"><?php echo $heading1; ?></h5>
                    
                    <?php
                          wp_nav_menu( array(
                               'theme_location'  => 'menu-footer1',//location in functions
                               'container'    => 'div',//nav
                               'container_class'  => 'footer-menu',//nav
                                'add_a_class'     => 'btn btn-link',
                               //'menu_class'    => 'menu__list',//ul
                               //additional add in functions php
                               /* 'list_item_class'   => 'menu__item',//li
                               'link_class'        => 'menu__link'//a */
                          ) );
                     ?>
                    
                    <!-- <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a> -->
                    
                    
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4"><?php echo $heading2; ?></h5>
                    
                    <?php
                          wp_nav_menu( array(
                               'theme_location'  => 'menu-footer2',//location in functions
                               'container'    => 'div',//nav
                               'container_class'  => 'footer-menu',//nav
                                'add_a_class'     => 'btn btn-link',
                               //'menu_class'    => 'menu__list',//ul
                               //additional add in functions php
                               /* 'list_item_class'   => 'menu__item',//li
                               'link_class'        => 'menu__link'//a */
                          ) );
                     ?>
                     
                   <!--  <a class="btn btn-link" href="">Robotic Automation</a>
                    <a class="btn btn-link" href="">Machine learning</a>
                    <a class="btn btn-link" href="">Predictive Analysis</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a> -->
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                        
                    </div>
                    
                    <div class="col-md-6 text-center text-md-end">
                        <!-- <div class="footer-menu"> -->
                        	 <?php
                              wp_nav_menu( array(
                               'theme_location'  => 'menu-bottom',//location in functions
                               'container'    => 'div',//nav
                               'container_class'  => 'bottom-menu',//nav
                               //'menu_class'    => 'menu__list',//ul
                               //additional add in functions php
                               //'list_item_class'   => 'menu__item',//li
                               //'link_class'        => 'menu__link'//a
                               
                              ) );
                             ?>
                            <!-- <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a> -->
                        <!-- </div> -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
</body>

</html>