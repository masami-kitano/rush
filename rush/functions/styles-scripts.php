<?php
/**
 * CSSやJS、Google Fonts設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  css, js, Google Fonts
**********************************/

function add_style_script_files() {

  // WordPress 本体の jQuery を登録解除
  wp_deregister_script( 'jquery');

  // Google Fontsの読み込み
  wp_enqueue_style (
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
    array(),
    null,
    false
  );

  // main.css
  wp_enqueue_style (
    'main',
    THEME_FILE_URI . '/assets/css/main.css',
    array(),
    wp_date( 'YmdHis', filemtime( THEME_FILE_PATH . '/assets/css/main.css' ) ),
    false
  );

  // vendor.js
  wp_enqueue_script (
    'vendor',
    THEME_FILE_URI . '/assets/js/vendor.js',
    array(),
    wp_date( 'YmdHis', filemtime( THEME_FILE_PATH . '/assets/js/vendor.js' ) ),
    false
  );

  // main.js
  wp_enqueue_script (
    'main',
    THEME_FILE_URI . '/assets/js/main.js',
    array( 'vendor' ),
    wp_date( 'YmdHis', filemtime( THEME_FILE_PATH . '/assets/js/main.js' ) ),
    false
  );


  // wordpress用 管理者でログインしているユーザーのみ表示
  if ( current_user_can( 'administrator' ) ) {

    // wordpress.css
    wp_enqueue_style (
      'my-wp-style',
      THEME_FILE_URI . '/assets-wp/wordpress.css',
      array(),
      wp_date( 'YmdHis', filemtime( THEME_FILE_PATH . '/assets-wp/wordpress.css' ) ),
      false
    );

    // wordpress.js
    wp_enqueue_script (
      'my-wp-scripts',
      THEME_FILE_URI . '/assets-wp/wordpress.js',
      array(),
      '',
      true
    );
  }

}
add_action( 'wp_enqueue_scripts', 'add_style_script_files' );
