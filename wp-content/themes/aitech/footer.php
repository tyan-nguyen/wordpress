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
                    <h5 class="text-white mb-4"><?php echo get_option("footer_menu_1_heading") ?></h5>                    
                    <?php
                          wp_nav_menu( array(
                               'theme_location'  => 'menu-footer1',//location in functions
                               'container'    => 'div',//wrap
                               'container_class'  => 'footer-menu',//wrap class
                               'add_a_class' => 'btn btn-link',//class for a custom in function.php
                          ) );
                     ?>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4"><?php echo get_option("footer_menu_2_heading") ?></h5>
                    <?php
                          wp_nav_menu( array(
                               'theme_location'  => 'menu-footer2',//location in functions
                               'container'    => 'div',//wrap
                               'container_class'  => 'footer-menu',//wrap class
                               'add_a_class'     => 'btn btn-link',//class for a custom in function.php
                          ) );
                     ?>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <?php echo get_option('footer_copyright') ?>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                        
                    </div>
                    
                    <div class="col-md-6 text-center text-md-end">
                        <!-- <div class="footer-menu"> -->
                    	 <?php
                          wp_nav_menu( array(
                           'theme_location'  => 'menu-bottom',//location in functions
                           'container'    => 'div',//wrap
                           'container_class'  => 'bottom-menu',//wrap class                           
                          ) );
                         ?>
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