<?php
/**
 *
 * Template Name: 〇〇〇〇テンプレート
 * Template Post Type: post, page
 *
 * ※post, page, カスタムポスト名で絞り込み可能
 */
get_header();
?>
<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>
<?php the_content(); ?>
<?php
  endwhile;
endif;
?>
<?php
get_footer();
