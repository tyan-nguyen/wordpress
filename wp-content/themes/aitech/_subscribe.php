<!-- Newsletter Start -->
<div class="container-fluid bg-primary newsletter py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/newsletter.png" alt="">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                <div class="position-relative w-100 mt-3 mb-2">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                        placeholder="Enter Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
                <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
                
                <?php echo do_shortcode('[contact-form-7 id="76c90ba" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->