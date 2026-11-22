<?php
/**
 * The main template file
 *
 * @package Admantra
 */

get_header(); ?>

<main class="w-full pt-28 pb-20 max-w-7xl mx-auto px-6 lg:px-12">
  <?php
  if ( have_posts() ) :
      while ( have_posts() ) :
          the_post();
          the_content();
      endwhile;
  else :
      echo '<p class="text-center text-on-surface-variant">' . esc_html__( 'No content found.', 'admantra' ) . '</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
