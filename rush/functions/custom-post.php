<?php
/**
 * カスタムポスト設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  カスタムポストの作成
**********************************/
/**
 * $post_name, $post_label を記載すること
 * 'public', 'hierarchical', 'rewrite', 'has_archive', 'menu-icon', 'menu_position', 'supports' は環境に合わせて必ず確認すること
 * それ以外の項目は適宜変更
 * dashicons: https://developer.wordpress.org/resource/dashicons/#admin-post
 */

function create_post_type() {

  $post_name  = 'works'; // ★カスタムポストのスラッグを入力
  $post_label = '施工事例'; // ★カスタムポストのラベルを入力

  register_post_type(
    $post_name, [
      'labels' => [
        'name'              => $post_label,
        'singular_name'     => $post_name,
        'all_items'         => $post_label.'一覧',
        'add_new_item'      => '新しい'.$post_label,
        'search_items'      => $post_label.'の検索',
        'not_found'         => $post_label.'が見つかりません。',
      ],
      'description'         => '',
      'public'              => true,  // ★公開するかどうか
      'capability_type'     => 'post',
      'hierarchical'        => false, // ★階層化させる
      'rewrite'             => true,  // ★パーマリンク構造の変更する場合
      'has_archive'         => true,  // ★アーカイブ機能
      'exclude_from_search' => false, // 検索対象から除外するか
      'menu_icon'           => 'dashicons-admin-post', // ★アイコンを変更
      'menu_position'       => 5,     // ★管理画面上での配置場所
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest'        => true,  // 「Gutenberg」を有効
      'supports' => [
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ],
    ]
  );
}
add_action( 'init', 'create_post_type' );
