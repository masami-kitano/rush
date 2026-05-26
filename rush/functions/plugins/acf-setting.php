<?php
/**
 * ACF設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  ACF設定 [Advanced Custom Fields PRO]
**********************************/

/*
 * テキストエリアのカスタムフィールドでショートコードを使用できるようにする
 */
function my_acf_format_value( $value, $post_id, $field ) {
  // run do_shortcode on all textarea values
  $value = do_shortcode( $value );
  // return
  return $value;
}
add_filter('acf/format_value/type=text', 'my_acf_format_value', 10, 3);
add_filter( 'acf/format_value/type=textarea', 'my_acf_format_value', 10, 3 );


/*
 * オプションページ設定
 */
if ( function_exists( 'acf_add_options_page' ) ) {

  // オプション設定
  acf_add_options_page( array(
    'page_title'  => 'オプション設定',
    'menu_title'  => 'オプション設定',
    'menu_slug'   => 'general-settings',
    'capability'  => 'edit_pages', // 普段は「edit_posts」にしている。範囲が「管理者」「編集者」「投稿者」「寄稿者」まで。edit_pagesは「管理者」「編集者」まで
    'parent_slug' => '',
    'position'    => 4.5,
    'redirect'    => true, // 親ページをサブメニューに含む場合は false
  ));

  // 共通設定
  // acf_add_options_sub_page( array(
  //   'page_title'  => '共通設定',
  //   'menu_title'  => '共通設定',
  //   'menu_slug'   => 'general-settings-common',
  //   'capability'  => 'edit_pages',
  //   'parent_slug' => 'general-settings', //親ページのスラッグ
  //   'position'    => false,
  // ));
}
