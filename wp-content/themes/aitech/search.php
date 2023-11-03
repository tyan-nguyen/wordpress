<?php
    /* Custom search form */
    get_header();
?>

 <!-- Hero Start -->
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Tìm kiếm</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Search</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img.png" alt="" style="max-height: 300px;">
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
    
<?php
/* wp_reset_query();
global $wp_query; */
$total_results = $wp_query->found_posts;

//echo $total_results;
?>
<!-- Case Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        
        <div class="row g-4">
        <div class="search-outside">
        <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"  style="width:100%;">
                        <div class="input-group" style="max-width: 600px;margin:0 auto;">
                        
                            <input type="search" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <input type="hidden" name="post_type" value="post" />
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
      </div> 
      <div class="col-lg-12 text-center">
      Kết quả tìm kiếm cho từ khóa "<?= get_search_query() ?>": <?= $total_results ?> kết quả.
      </div>             
                    
        <?php 
        if ( $wp_query->have_posts() ) {
            while ( $wp_query->have_posts() ) {
                $wp_query->the_post();
                $postThumb = get_the_post_thumbnail( null, 'post_thumbnail', array( 'class' => 'img-fluid' ) );
                if($postThumb == null){
                    $postThumb = '<img class="img-fluid" src="'.get_stylesheet_directory_uri().'/assets/img/project-1.jpg" alt="">';
                }
                ?>
                    
              <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <!-- <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/project-1.jpg" alt="">-->
                    <?php echo $postThumb; ?>
                    <a class="case-overlay text-decoration-none" href="<?php the_permalink(); ?>">
                        <small>Robotic Automation</small>
                        <h5 class="lh-base text-white mb-3"><?php the_title(); ?>
                        </h5>
                        <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>      
       <?php
        }
        ?>
        
        <?php } else { ?>
        
                <div class="col-lg-12 text-center">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="mb-4">Kết quả không tìm thấy!</h1>
                    <p class="mb-4">Chúng tôi rất tiếc kết quả bạn tìm không tìm thấy trên website. Bạn có thể thực hiện tìm kiếm lại bằng từ khóa khác hoặc ghé thăm trang chủ của chúng tôi.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo esc_url( home_url( '/' ) ); ?>">Ghé thăm trang chủ</a>
                </div>
            
        <?php } ?>
            
        </div>
    </div>
</div>
<!-- Case End -->
 
<?php get_footer() ?>