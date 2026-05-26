<?php
/**
 * ショートコード設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  ショートコード
**********************************/

/*
 * [site_url] サイトアドレスへのパス
 */
add_shortcode( 'site_url', 'my_site_url' );
function my_site_url( $atts ) {
  return home_url();
}


/*
 * [theme_url] テーマディレクトリへのパス
 */
add_shortcode( 'theme_url', 'my_theme_url' );
function my_theme_url( $atts ) {
  return get_theme_file_uri();
}


/*
 * [uploads_url] アップロードディレクトリへのパス
 */
add_shortcode( 'uploads_url', 'my_uploads_url' );
function my_uploads_url( $atts ) {
  $array = wp_upload_dir();
  return $array[ 'baseurl' ];
}


/*
 * 上記ショートコードを使用する際に、本文内でショートコードとして認識する形に変換
 */
function replace_shortcode( $contents ) {
  $wp_upload_dir = wp_upload_dir();
  $patterns = array(
    '/\[site_url\]/',
    '/\[theme_url\]/',
    '/\[uploads_url\]/',
  );
  $replacements = array(
    home_url(),
    get_template_directory_uri(),
    $wp_upload_dir[ 'baseurl' ],
  );
  return preg_replace( $patterns, $replacements, $contents );
}


/*
 * phpファイルを読み込むショートコード
 * [call_php file='/template-parts/xxxxxx']
 * ※拡張子不要
 */
add_shortcode( 'call_php', 'call_php_Include' );
function call_php_Include( $params = array() ) {
  extract( shortcode_atts( array( 'file' => 'default' ), $params ) );
  ob_start();
  include( get_stylesheet_directory() . "/$file.php" );
  return ob_get_clean();
}


/*
 * get_template_partでファイルを読み込むショートコード
 * [get_template_part slug='/template-parts/xxxxxx' name='' args='']
 */
add_shortcode( 'get_template_part', 'template_include' );
function template_include( $params = array() ) {
  extract( shortcode_atts( array(
    'slug' => 'default',
    'name' => '',
    'args' => '',
  ), $params ) );
  ob_start();
  get_template_part( $slug, $name, $args );
  $html = ob_get_contents();
  ob_end_clean();

  return $html;
}


/*
 * config.phpのsiteinfo設定を読み込むショートコード
 * [siteinfo info='xxx' key='xxx']
 */
add_shortcode( 'siteinfo', 'my_siteinfo' );
function my_siteinfo( $atts, $content = null ) {
  extract( shortcode_atts( array(
    'info'   => '',
    'key'    => '',
  ), $atts ) );

  return siteinfo( $info, $key );
}


/*
 * 非表示にするショートコード（囲みショートコード）
 * [hide_content] {内容} [/hide_content]
 *
 * 引数 (省略可)
 *   $atts:
 *     comment - true: 非表示部分もhtmlコメントアウトとして表示,
 *               false: 非表示（デフォルト）,
 *               文字列入力: htmlコメントアウトの中に入力したメッセージを出力
 *     escape  - true: HTMLで特別な意味を持つ文字（&、<、>、"、'）をエスケープ（エンコード）する
 *               false: そのまま出力（デフォルト）,
 *   $content: 囲み内のコンテンツ
 *
 *   [hide_content comment="true" escape"true"] {内容} [/hide_content]
 *
 * 戻り値
 *   htmlタグ
 */
add_shortcode( 'hide_content', 'set_hide_content' );
function set_hide_content( $atts = '', $content = null ) {
  extract( shortcode_atts( array(
    'comment' => '',
    'escape'  => '',
  ), $atts ) );

  $contents = $escape == 'true' ? esc_html( $content ) : $content;
  $output = $comment == 'true' ? '<!-- ' . $contents . ' -->' : ( ! ( $comment == 'false' || empty( $comment ) ) ? '<!-- ' . esc_attr( $comment ) . ' -->' : '' );

  return $output;
}


/*
 * ショートコードの出力ができないhtmlタグの属性でショートコードを使用できるように設定
 */
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );
function my_wp_kses_allowed_html( $tags, $context ) {
  $tags[ 'img' ][ 'srcset' ] = true;
  $tags[ 'img' ][ 'data-src' ] = true;
	$tags[ 'source' ][ 'src' ] = true;
	$tags[ 'source' ][ 'srcset' ] = true;
  $tags[ 'source' ][ 'data-srcset' ] = true;
  return $tags;
}
