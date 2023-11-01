<?php
/*
 Template Name: Home Page
 */
get_header();
?>
<main>
  <?php get_template_part('content','banner'); ?>
  <?php get_template_part('content', 'about-header'); ?>
  <?php get_template_part('content', 'about-feauture1'); ?>
</main>

<?php
get_footer();