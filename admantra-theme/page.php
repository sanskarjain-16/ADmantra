<?php
/**
 * The template for displaying all pages
 *
 * @package Admantra
 */

get_header(); ?>

<main class="w-full pt-24 pb-20">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); ?>
