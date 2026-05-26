<?php
/**
 *
 * page template
 *
 */
get_header();
?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>
  <main class="bg-beige overflow-hidden">
    <?php the_content(); ?>
  </main>

<?php
  endwhile;
endif;
?>

<?php
get_footer();
