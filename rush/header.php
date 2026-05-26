<?php
/**
 *
 * header template
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php if ( is_single() ) : ?>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php else: ?>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php endif; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <?php get_template_part( 'template-parts/components/favicons' ); ?>
    <?php get_template_part( 'template-parts/components/links' ); ?>
    <?php wp_head(); ?>
  </head>

  <body<?= get_my_body_class() ? ' class="'.get_my_body_class().'"' : body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php if ( is_page( 'mission' ) ) : ?>
      <header class="c-header"><a class="c-header__link" href="../">top</a></header>
    <?php endif; ?>
