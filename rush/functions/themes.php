<?php
/**
 * テーマ設定 (機能追加・削除)
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  テーマの設定 (状況に応じて要修正)
**********************************/

/*
 * テーマサポート機能の設定
 */
function custom_theme_setup() {

  /*
   * タイトルタグ（<title>）の出力.
   *
   * ※プラグインを使用する場合はこちらは不要
   */
  add_theme_support( 'title-tag' );


  /*
   * アイキャッチ表示
   */
  add_theme_support( 'post-thumbnails' );


  /*
   * 新しい画像サイズの追加
   * add_image_size( $name, $width, $height, $crop );
   * $name - 予約語( thumb, thumbnail, medium, large, post-thumbnail )
   * $width, $height - 9999にすると無制限 0にすると設定なし
   * $crop - (初期値)false 指定した縦または横の大きさでのリサイズ / true 指定した大きさでの切り抜き
   */
  // 固定ページのアイキャッチサイズ.
  // add_image_size( 'page_eyecatch', 1100, 610, true );

  // 記事一覧のサムネイルサイズ.
  // add_image_size( 'articles_thumbnail', 200, 150, true );

}
add_action( 'after_setup_theme', 'custom_theme_setup' );

//添付ファイルの表示設定のサイズ追加
function drollic_choose_sizes( $sizes ) {
  return array_merge( $sizes, array(
      'page_eyecatch' => __('好きな名前'),
      'articles_thumbnail' => __('好きな名前'),
  ) );
}
add_filter( 'image_size_names_choose', 'drollic_choose_sizes' );


/*
 * headにタグを追加
 *
 * ※GTM等の設定に使用する
 */
// function add_tag_head() {
//   get_template_part( 'template-parts/components/tag-head' );
// }
// add_action('wp_head', 'add_tag_head');


/*
 * body直後にタグを追加
 *
 * ※GTM等の設定に使用する
 */
// function add_tag_body_open() {
//   get_template_part( 'template-parts/components/tag-body-open' );
// }
// add_action('wp_body_open', 'add_tag_body_open');


/*
 * medium_large_size_w の自動生成オプション削除
 */
update_option( 'medium_large_size_w', 0 );


/*
 * 大きな画像を自動縮小する機能を無効化
 *
 * @since 5.3.0
 */
add_filter( 'big_image_size_threshold', '__return_zero', 10, 2 );


/*
 * Remove wp_lazy_loading. 自動で付与される img iframe の loading="lazy" を無効化
 *
 * ※javascript等で対応済みの場合に無効化にする
 * @since 5.5.0
 */
// add_filter( 'wp_lazy_loading_enabled', '__return_false' );


/*
 * Remove Core Sitemaps actions. 自動生成されるサイトマップを無効化
 *
 * ※プラグイン等で生成済みの場合に使用する
 * @since 5.5.0
 */
remove_action( 'init', 'wp_sitemaps_get_server' );



/*********************************
*  デフォルトの機能削除(セキュリティ対策込み)
**********************************/

/*
 * WordPressのバージョン非表示
 */
remove_action( 'wp_head', 'wp_generator' );


/*
 * rel="shortlink" 非表示
 */
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );


/*
 * Windows Live Writer からの投稿許可設定削除
 */
remove_action( 'wp_head', 'wlwmanifest_link' );


/*
 * 外部ツールからの投稿許可設定削除
 */
remove_action( 'wp_head', 'rsd_link' );


/*
 * 絵文字の DNS プリフェッチだけ削除(絵文字を使用しないなら削除して問題なし) ※速度が速くなる
 */
add_filter( 'emoji_svg_url', '__return_false' );


/*
 * HTTPレスポンスヘッダーの不要な記述削除
 */
remove_action( 'template_redirect', 'rest_output_link_header', 11 );


/*
 * WordPress、プラグイン全てのバージョンを削除
 */
function remove_cssjs_ver2( $src ) {
  if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
    $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );


/*
 * 絵文字用のJavaScriptとStyleSheetの削除
 */
// 管理画面絵文字削除
function disable_emoji() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );


/*
 * Embed 関連のタグを非表示
 */
remove_action( 'wp_head','rest_output_link_wp_head' ); // API リンクタグを非表示
remove_action( 'wp_head','wp_oembed_add_discovery_links' ); // 埋め込み用のディスカバリリンクの非表示
remove_action( 'wp_head','wp_oembed_add_host_js' ); // 埋め込み用の JavaScript の非表示


/*
 * 著者別アーカイブページを無効化
 */
function disable_author_archive() {
  if ( preg_match( '#/author/.+#', $_SERVER[ 'REQUEST_URI' ] ) ){
    wp_redirect( home_url() );
    exit;
  }
}
add_action( 'init', 'disable_author_archive' );


/*
 * ユーザーIDの取得制御
 */
function shut_author_query() {
  if ( ! is_user_logged_in() ) {

    if( preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']) ){
      wp_redirect(home_url());
      exit;
    }
  }
}
add_action('init', 'shut_author_query');



/*********************************
*  機能追加
**********************************/

/*
 * WebP、svgのアップロードを可能にする
 * ※セキュリティ面でアップロードが不要であれば消しておくこと
 */
function custom_mime_types( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );


/*
 * the_content() で自動付与される noopener noreferrer属性からサイト内リンクの時はnoreferrerを削除
 */
function remove_noreferrer( $the_content ) {
  // 現在のサイトのURLを取得
  $site_url = home_url();

  // aタグを抽出して処理
  if ( preg_match_all( '/<a[^>]+>/i', $the_content, $matches ) ) {
    foreach ( $matches[0] as $anchor ) {
      // href属性のURLを抽出
      if ( preg_match( '/href=["\']([^"\']+)["\']/', $anchor, $url_matches ) ) {
        $url = $url_matches[1];

        // サイト内のURLであれば noopener noreferrer の削除をスキップ
        if ( strpos( $url, $site_url ) !== false ) {
          continue;
        }
      }

      // noopener noreferrer を noopener に置換
      $new_anchor = str_replace( 'noopener noreferrer', 'noopener', $anchor );
      $new_anchor = str_replace( 'noreferrer noopener', 'noopener', $new_anchor );

      // 元のaタグを新しいaタグに置換
      $the_content = str_replace( $anchor, $new_anchor, $the_content );
    }
  }

  return $the_content;
}
add_filter( 'the_content', 'remove_noreferrer', 9999 );
