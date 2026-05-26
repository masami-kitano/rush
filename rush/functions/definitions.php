<?php
/**
 * 変数・定数設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  定数設定
**********************************/

// テーマディレクトリまでのURL、絶対パス(サーバーの全ルート)を取得 ※末尾にスラッシュなし
define( 'THEME_FILE_URI', get_theme_file_uri() );   // URLを取得
define( 'THEME_FILE_PATH', get_theme_file_path() ); // 絶対パスを取得


/*********************************
*  カスタム定数設定
**********************************/

// 環境情報
define( 'PROD_DOMAIN', 'https://rush.monster/' ); // 本番ドメイン
define( 'TEST_DOMAIN', 'https://dev.rush.monster/' ); // テストドメイン（環境に応じて）

// テーマカラー
define( 'THEME_COLOR', '#fff' );

// デフォルト投稿の rewrite_slug
define( 'POST_REWRITE_SLUG', 'news' );
// デフォルト投稿アーカイブの名称
define( 'POST_ARCHIVE_NAME', 'News (一覧)' );


/*********************************
*  ユーザー定義関数
**********************************/

// サイト共通の情報を siteinfo( 'SITE', 'DOMAIN' ) で出力
function siteinfo( $info, $key ) {

  $siteinfo = [
    'SITE' => [
      'CURRENT_DOMAIN'      => $_SERVER[ 'SERVER_NAME' ],
      'CURRENT_PAGE'        => get_current_page(),
    ],
    // 'SNS' => [
    //   'INSTAGRAM'       => 'https://www.instagram.com/〇〇〇〇/',
    //   'FACEBOOK'        => 'https://www.facebook.com/〇〇〇〇/',
    // ],
  ];

  return $siteinfo[ $info ][ $key ];
}
