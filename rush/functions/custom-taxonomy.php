<?php
/**
 * カスタムタクソノミー設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  カスタムタクソノミーの作成
**********************************/
/**
 * $taxonomy_name, $taxonomy_label, $add_post_name を記載すること
 * 'rewrite' は環境に合わせて必ず確認すること、特に変更がなければ削除する
 * それ以外の項目は適宜変更
 */

function create_custom_taxonomy() {

  $taxonomy_name  = 'works_tag'; // カスタムタクソノミーのスラッグを入力
  $taxonomy_label = 'タグ'; // カスタムタクソノミーのラベルを入力
  $add_post_name  = 'works'; // 反映する投稿またはカスタムポストを入力

  register_taxonomy(
    $taxonomy_name,
    $add_post_name,
    array(
      'label'                        => $taxonomy_label,
      'singular_label'               => $taxonomy_label,
      'labels' => array(
        'all_items'                  => $taxonomy_label.'一覧',
        'add_new_item'               => $taxonomy_label.'を追加',
        'update_item'                => $taxonomy_label.'を更新',
        'edit_item'                  => $taxonomy_label.'の編集',
        'new_item_name'              => $taxonomy_label.'の名前',
        'view_item'                  => $taxonomy_label.'を表示',
        'search_items'               => $taxonomy_label.'を検索',
        'separate_items_with_commas' => $taxonomy_label.'をコンマで区切ってください',
        'add_or_remove_items'        => $taxonomy_label.'の追加または削除',
        'not_found'                  => $taxonomy_label.'は見つかりませんでした。',
        'not_found_in_trash'         => 'ゴミ箱に'.$taxonomy_label.'はありませんでした。',
        'choose_from_most_used'      => 'よく使われている'.$taxonomy_label.'から選択',
        'popular_items'              => '人気の'.$taxonomy_label,
      ),
      'public'            => true,
      // 'update_count_callback' => '_update_post_term_count', //カスタム分類をタグのように使いたい場合は必ず追加する。そうしないと、一度に入力したコンマ区切りの複数の項目が、別々の値ではなく一つの値として保存されてしまう
      'show_ui'           => true,
      //'show_tagcloud'     => true, // タグクラウドを利用するかどうか
      'show_in_nav_menus' => true,
      'show_in_quick_edit'=> true, // クイック編集に表示するかどうかの設定
      'show_admin_column' => true, // 一覧にカラムを表示されるかどうか
      'hierarchical'      => true, // ture でカテゴリーのような階層形式
      'query_var'         => true,
      'rewrite'           => array( 'with_front' => false ),
      // 'rewrite'           => array( 'slug' => 'photo/tag', 'with_front' => false ), // スラッグを変更する場合の参考のため記載、不要なら削除
      'show_in_rest'      => true, // 5系から出てきた新エディタ「Gutenberg」にて投稿で表示する
    )
  );


  $taxonomy_name  = 'works_category'; // カスタムタクソノミーのスラッグを入力
  $taxonomy_label = 'カテゴリー'; // カスタムタクソノミーのラベルを入力
  $add_post_name  = 'works'; // 反映する投稿またはカスタムポストを入力

  register_taxonomy(
    $taxonomy_name,
    $add_post_name,
    array(
      'label'                        => $taxonomy_label,
      'singular_label'               => $taxonomy_label,
      'labels' => array(
        'all_items'                  => $taxonomy_label.'一覧',
        'add_new_item'               => $taxonomy_label.'を追加',
        'update_item'                => $taxonomy_label.'を更新',
        'edit_item'                  => $taxonomy_label.'の編集',
        'new_item_name'              => $taxonomy_label.'の名前',
        'view_item'                  => $taxonomy_label.'を表示',
        'search_items'               => $taxonomy_label.'を検索',
        'separate_items_with_commas' => $taxonomy_label.'をコンマで区切ってください',
        'add_or_remove_items'        => $taxonomy_label.'の追加または削除',
        'not_found'                  => $taxonomy_label.'は見つかりませんでした。',
        'not_found_in_trash'         => 'ゴミ箱に'.$taxonomy_label.'はありませんでした。',
        'choose_from_most_used'      => 'よく使われている'.$taxonomy_label.'から選択',
        'popular_items'              => '人気の'.$taxonomy_label,
      ),
      'public'            => true,
      // 'update_count_callback' => '_update_post_term_count', //カスタム分類をタグのように使いたい場合は必ず追加する。そうしないと、一度に入力したコンマ区切りの複数の項目が、別々の値ではなく一つの値として保存されてしまう
      'show_ui'           => true,
      //'show_tagcloud'     => true, // タグクラウドを利用するかどうか
      'show_in_nav_menus' => true,
      'show_in_quick_edit'=> true, // クイック編集に表示するかどうかの設定
      'show_admin_column' => true, // 一覧にカラムを表示されるかどうか
      'hierarchical'      => true, // ture でカテゴリーのような階層形式
      'query_var'         => true,
      'rewrite'           => array( 'with_front' => false ),
      // 'rewrite'           => array( 'slug' => 'qa/category', 'with_front' => false ), // スラッグを変更する場合の参考のため記載、不要なら削
      'show_in_rest'      => true, // 5系から出てきた新エディタ「Gutenberg」にて投稿で表示する
    )
  );
}
add_action( 'init', 'create_custom_taxonomy' );
