<?php
/**
 *
 * single template
 *
 */
get_header();
?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>

      <main>
        <h1><?php the_title(); ?></h1>
        <div>
          <?php the_content(); ?>
        </div>
      </main>

<?php
  endwhile;
endif;
?>

<?php
get_footer();
