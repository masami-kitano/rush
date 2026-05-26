<?php
/**
 * 取得・判定
 *
 * 参照元: functions.php
 *
 */

/*********************************
*  取得・判定
**********************************/

/*
 * トップページ判定(表示設定がどの状態にも対応)
 */
function get_my_top_page() {
  // TOPページ判定
  if ( is_front_page() ) {
    //「最新の投稿」 or 「ホームページ」を指定された固定ページ
    $top_page_flag = true;
  } elseif ( is_home() ) {
    if ( get_queried_object() === null ) {
      //「投稿ページ」だけ指定されている場合のトップページ
      $top_page_flag = true;
    } else {
      //「投稿ページ」に指定されたページ
      $top_page_flag = false;
    }
  } else {
    $top_page_flag = false;
  }
  return $top_page_flag;
}


/*
 * 固定ページを判別して、bodyにスラッグ名を追加
 */
function get_my_body_class() {
  $my_body_class = '';
  $top_page_flag = get_my_top_page();
  if ( $top_page_flag ) {
    $my_body_class = 'home';
  } else {
    if ( is_single() ) {
      $my_body_class = 'single '.$posttype_name = esc_html( get_post_type_object( get_post_type() )->name );
    } elseif ( is_search() ) {
      $my_body_class = 'search';
    } elseif ( is_page() ) {
      $page = get_page( get_the_ID() );
      $my_body_class = 'page-'.$page->post_name;
    } elseif ( is_category() ) {
      $category = get_the_category();
      $my_body_class = 'category '.$category[0]->category_nicename;
    } elseif ( is_tag() ) {
      $tag = get_the_tags();
      $my_body_class = 'tag '.$tag[0]->tag_nicename;
    } elseif ( is_tax() ) {
      $my_body_class = 'taxonomy';
    } elseif ( is_archive() ) {
      $my_body_class = 'archive';
    }
  }
  return $my_body_class;
}


/*
 * タイトル取得
 */
function get_page_title() {

  //アーカイブページじゃない場合、 false を返す
  if ( !is_archive() ) {
    if ( is_front_page() ) {
      return get_bloginfo( 'name' );
    } elseif ( is_404() ) {
      return 'ページが見つかりません';
      //検索結果ページなら
    } elseif ( is_search() ) {
      if ( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        return '検索キーワードが未入力です'; // 検索キーワードが未入力の場合のテキストを指定
      } else {
        return '“'.$_GET['s'] .'”の検索結果'; // 検索キーワードと該当件数を表示
      }
    } else {
      return get_the_title();
    }
  }

  //日付アーカイブページなら
  if ( is_date() ) {
    if ( is_year() ) {
      $date_name = get_query_var('year').'年';
    } elseif ( is_month() ) {
      $date_name = get_query_var('year').'年'.get_query_var('monthnum').'月';
    }else{
      $date_name = get_query_var('year').'年'.get_query_var('monthnum').'月'.get_query_var('day').'日';
    }

    //日付アーカイブページかつ、投稿タイプアーカイブページでもある場合
    if ( is_post_type_archive() ) {
      return $date_name.'の'.post_type_archive_title( '', false );
    }
    return $date_name;
  }

  //投稿タイプのアーカイブページなら
  if ( is_post_type_archive() ) {
    return post_type_archive_title( '', false );
  }

  //投稿者アーカイブページなら
  if ( is_author() ) {
    return '投稿者'.get_queried_object()->data->display_name;
  }

  //投稿カテゴリーページなら
  if ( is_category() || is_tag() ) {
    return single_term_title( '', false );
  }

  //それ以外(カテゴリ・タグ・タクソノミーアーカイブページ)
  return single_term_title( '', false );
}


/*
 * 現在ページのスラッグ情報取得
 */
function get_current_page() {
  $parent = '';
  $current = '';
  if ( is_archive() ) {
    $current        = get_post_type();
    if ( is_author() ) {
      $current      = 'writer';
      $parent       = 'post';
    }
    if ( is_post_type_archive( 'post' ) ) {
      $current      = 'post';
    }
    if ( is_category() || is_tag() || is_tax() ) {
      $term_object  = get_queried_object();
      $current      = $term_object->slug;
      $parent       = $term_object->taxonomy;
    }
  } elseif ( is_search() ) {
    $current        = 'search';
  } elseif ( is_single() ) {
    $parent         = get_post_type();
    $current        = 'single';
    // さらに分岐する場合に使用する
    // if ( get_post_type() == 'news') {
    //   $parent       = 'news';
    //   $current      = 'news';
    // }
  } elseif ( is_page() ) {
    $page           = get_post();
    $current        = $page->post_name;
    global $post;
    if ( $post->ancestors ) {
      $root         = $post->ancestors[ count( $post->ancestors ) - 1];
      $root_post    = get_post( $root );
      $parent       = esc_attr( $root_post->post_name );
    }
  }
  return array( $current, $parent );
}


/*
 * アーカイブページで現在のカテゴリー・タグ・タームを取得する
 */
function get_current_term() {

  $id;
  $tax_slug;

  if ( is_category() ) {
    $tax_slug   = 'category';
    $id         = get_query_var( 'cat' );
  } elseif ( is_tag() ) {
    $tax_slug   = 'post_tag';
    $id         = get_query_var( 'tag_id' );
  } elseif ( is_tax() ) {
    $tax_slug   = get_query_var( 'taxonomy' );
    $term_slug  = get_query_var( 'term' );
    $term       = get_term_by( 'slug', $term_slug, $tax_slug );
    $id         = $term->term_id;
  }

  return get_term( $id, $tax_slug );
}


/*
 * 親ページがあるかどうかの判定
 */
function get_parent_slug() {
  global $post;
  if ( isset( $post->post_parent ) ) {
    $post_data = get_post( $post->post_parent );
    return $post_data->post_name;
  }
}


/*
 * webp画像の存在有無を取得
 */
function get_webp_exists( $post_webp_url ) {
  $post_webp_path = str_replace( WP_CONTENT_URL, WP_CONTENT_DIR, $post_webp_url );
  if ( file_exists( $post_webp_path ) ) {
    $webp_flag = true;
  } else {
    $webp_flag = false;
  }
  return $webp_flag;
}


/*
 * 現在のURLを返す
 */
function get_current_url() {
  $http = is_ssl() ? 'https://' : 'http://';
  $url = $http . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ];

  return $url;
}


/*
 * 指定した桁でゼロ埋めする
 * set_zero_padding( $number, $digits )
 * $digits は桁数を記入。01にしたいなら2桁の2を入力
 */
function set_zero_padding( $number, $digits = 2 ) {
  $zero_padding = sprintf( '%0'. $digits .'d', $number);

  return $zero_padding;
}
