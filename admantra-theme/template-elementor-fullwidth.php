<?php
/**
 * Template Name: Elementor Full Width (Admantra)
 * Description: Clean full-width canvas with Admantra header and footer, perfect for Elementor pages.
 *
 * @package Admantra
 */

get_header(); ?>

<main class="w-full pt-20">
  <?php
  while ( have_posts() ) :
      the_post();
      the_content();
  endwhile;
  ?>
</main>

<?php get_footer(); ?>
