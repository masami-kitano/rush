<?php
/**
 * 投稿設定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  投稿設定
**********************************/

/*
 * メインクエリ設定
 */
function custom_query( $query ) {
  // 管理画面なら何もしない
  if ( is_admin() || ! $query->is_main_query() )
    return;
}
add_action( 'pre_get_posts', 'custom_query' );


/*********************************
*  リライト ルール追加
**********************************/

/**
 * 参考のため、不要なら削除
 */
// add_rewrite_rule( 'photo/tag/([^/]+)/?$', 'index.php?photo_tag=$matches[1]', 'top' );
// add_rewrite_rule( 'qa/category/([^/]+)/?$', 'index.php?qa_category=$matches[1]', 'top' );
