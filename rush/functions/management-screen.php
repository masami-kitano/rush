<?php
/**
 * 管理画面設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  管理画面制御
**********************************/


/*********************************
*  ブロック設定
**********************************/

/*
 * 使用するブロックのみ表示
 */
add_filter( 'allowed_block_types_all', function( $allowed_block_types, $block_editor_context ) {
  $allowed_block_types = [

    // テキスト
    'core/paragraph',    // 段落
    'core/heading',      // 見出し
    'core/list',         // リスト
    // 'core/quote',        // 引用
    // 'core/code',         // コード
    // 'core/details',      // 詳細
    // 'core/preformatted', // 整形済みテキスト
    // 'core/pullquote',    // プルクオート
    'core/table',        // テーブル
    // 'core/verse',        // 詩
    // 'core/freeform',     // クラシック

    // メディア
    'core/image',      // 画像
    'core/gallery',    // ギャラリー
    // 'core/audio',      // 音声
    // 'core/cover',      // カバー
    'core/file',       // ファイル
    // 'core/media-text', // メディアとテキスト
    // 'core/video',      // 動画

    // デザイン
    'core/buttons',      // ボタン
    // 'core/columns',      // カラム
    // 'core/group',        // グループ / 横並び / 縦積み / グリッド
    // 'core/more',         // 続き
    // 'core/nextpage',     // ページ区切り
    // 'core/separator',    // 区切り
    'core/spacer',       // スペーサー

    // ウィジェット
    // 'core/archives',        // アーカイブ
    // 'core/calendar',        // カレンダー
    // 'core/categories',      // カテゴリー一覧
    'core/html',            // カスタムHTML
    // 'core/latest-comments', // 最新のコメント
    // 'core/latest-posts',    // 最新の投稿
    // 'core/page-list',       // 固定ページリスト
    // 'core/rss',             // RSS
    // 'core/search',          // 検索
    'core/shortcode',       // ショートコード
    // 'core/social-links',    // ソーシャルアイコン
    // 'core/tag-cloud',       // タグクラウド

    // テーマ
    // 'core/navigation',            // ナビゲーション
    // 'core/site-logo',             // サイトロゴ
    // 'core/site-title',            // サイトのタイトル
    // 'core/site-tagline',          // サイトのキャッチフレーズ
    // 'core/query',                 // クエリーループ / 投稿一覧
    // 'core/avatar',                // アバター
    // 'core/post-title',            // タイトル
    // 'core/post-excerpt',          // 抜粋
    // 'core/post-featured-image',   // 投稿のアイキャッチ画像
    // 'core/post-author',           // 投稿者
    // 'core/post-author-name',      // 作成者名
    // 'core/post-date',             // 日付
    // 'core/post-date-modified',    // 変更日
    // 'core/post-terms',            // カテゴリー / タグ
    // 'core/post-navigation-link',  // 次の投稿 / 前の投稿
    // 'core/read-more',             // 続きを読む
    // 'core/comments',              // コメント
    // 'core/post-comments-form',    // 投稿コメントフォーム
    // 'core/loginout',              // ログイン/ログアウト
    // 'core/term-description',      // タームの説明
    // 'core/query-title',           // アーカイブタイトル / 検索結果のタイトル
    // 'core/post-author-biography', // 作成者のプロフィール情報

    // 埋め込み
    'core/embed',

    // 同期パターン
    // 'core/block', // パターン

    // Contact Form 7
    'contact-form-7/contact-form-selector',

    // Snow Monkey Forms
    'snow-monkey-forms/snow-monkey-form',       // ページにフォームを埋め込む
    'snow-monkey-forms/item',                   // group用
    'snow-monkey-forms/control-checkboxes',     // チェックボックス
    'snow-monkey-forms/control-email',          // email
    'snow-monkey-forms/control-url',            // URL
    'snow-monkey-forms/control-textarea',       // テキストエリア
    'snow-monkey-forms/control-text',           // テキスト
    'snow-monkey-forms/control-tel',            // Tel
    'snow-monkey-forms/control-select',         // セレクトボックス
    'snow-monkey-forms/control-radio-buttons',  // ラジオボタン
    'snow-monkey-forms/control-file',           // ファイル
  ];
  return $allowed_block_types;
}, 10, 2 );


/*
 * 「埋め込み」ブロックの表示制御
 */
function mytheme_admin_enqueue() {
  wp_enqueue_style( 'block-embed-style', THEME_FILE_URI . '/assets-wp/block-embed-style.css');
}
add_action( 'admin_enqueue_scripts', 'mytheme_admin_enqueue' );


/*********************************
*  外観＞メニュー
**********************************/
// 外観＞メニューを使わない場合はごっそり削除

/*
 * 外観＞メニュー の機能を有効化とメニューの位置設定
 */
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menus(
    [
      // 例 'メニューの位置を示す固有名称' => 'このメニューの位置の名称'
      'global-nav'    => 'グローバルメニュー', // 不要な場合削除
      'footer-nav'    => 'フッターメニュー', // 不要な場合削除
      'sub-nav-about' => 'サブメニュー' // 不要な場合削除
    ],
  );
}


/*
 * wp_nav_menuが出力した不要なidとclassを削除
 * ※グローバルメニューのliのclassで必要なものは除外
 * ※「CSS class (オプション)」で使用するclass名を下記に記載しておくこと
 */
add_filter( 'nav_menu_css_class', 'wp_navtag_remove', 100, 1 );
add_filter( 'nav_menu_item_id', 'wp_navtag_remove', 100, 1 );
add_filter( 'page_css_class', 'wp_navtag_remove', 100, 1 );
function wp_navtag_remove( $var ) {
  return is_array( $var ) ? array_intersect( $var,
    [
      // 削除対象から除外したいclass名を追加する
      'current-menu-item',
      'menu-item',
      'menu-item-has-children',
      'home',
      '_sp_',
    ]
  ) : '';
}


/*
 * カスタムリンクでショートコードを使えるようにする
 */
add_filter( 'nav_menu_link_attributes', 'enable_link_shortcodes', 10, 3 );
function enable_link_shortcodes( $atts, $item, $args ) {
  $atts[ 'href' ] = do_shortcode( $atts[ 'href' ] );
  return $atts;
}


/*
 * カスタムリンクで [site_url] ショートコードを使用している場合に、自動補完されるhttp://、またはhttps://の文字列を取り除く
 */
add_action( 'wp_update_nav_menu_item', 'remove_http_str', 10, 3 );
function remove_http_str( $menu_id, $menu_item_db_id, $args ) {
  if ( 'custom' === $args[ 'menu-item-type' ] ) {
    if ( strpos( $args[ 'menu-item-url' ], '[site_url]') !== false ) {
      update_post_meta( $menu_item_db_id, '_menu_item_url', str_replace( array( 'http://', 'https://' ), '', esc_url_raw( $args[ 'menu-item-url' ] ) ) );
    }
  }
}
