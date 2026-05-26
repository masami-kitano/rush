<?php
/**
 * ページ情報の表示：WPログイン時のみ
 *
 * 参照元: functions.php
 *
 */
function display_template_info() {
  if (current_user_can('administrator')) {
    global $template;
    $template_theme_name = basename(dirname($template));
    $template_file_name = basename($template, '.php');
    $template_file_path = str_replace(ABSPATH . 'wp-content/themes', '', $template);

    // 現在のテンプレートファイルを取得
    $current_template = basename($template);

    // テンプレートファイルが子テーマ内にある場合、親テーマのディレクトリも取得する
    $template_dir = get_template_directory() . '/' . $current_template;
    $parent_template_dir = get_stylesheet_directory() . '/' . $current_template;

    // インクルードされているファイルを取得
    $included_files = get_included_files();

    // 現在のテンプレートファイルが含まれているかチェック
    $included_in_template = false;
    foreach ($included_files as $file) {
      if ($file === $template_dir || $file === $parent_template_dir) {
        $included_in_template = true;
        break;
      }
    }

    // もし現在のテンプレートファイルがインクルードされている場合
    if ($included_in_template) {
      // 自作のインクルードファイルのリストを初期化
      $custom_includes = array();

      // インクルードされているファイルをチェックし、自作のインクルードファイルを抽出
      foreach ($included_files as $file) {
        // テンプレートファイルと一致しないファイルのみを抽出
        if ($file !== $template_dir && $file !== $parent_template_dir) {
          // 自作のインクルードファイルをチェック
          if (strpos($file, get_template_directory()) !== false || strpos($file, get_stylesheet_directory()) !== false) {
            // "functions"フォルダ内のファイルを除外
            if (strpos($file, '/functions/') === false) {
              // テーマフォルダの下からの表示に変更
              $custom_includes[] = str_replace(ABSPATH . 'wp-content/themes', '', $file);
            }
          }
        }
      }

      // インクルードされている自作のファイルを表示する
      $included_files_output = "<p>次のファイルもインクルードされています</p>";
      $included_files_output .= "<ul>";

      foreach ($custom_includes as $file) {
        $included_files_output .= "<li>$file</li>";
      }

      $included_files_output .= "</ul>";

      echo '<div class="wp-template-info">';
      echo '<div class="wp-template-info-inner">';
      echo '<p class="wp-template-info-accordion">テンプレート: ' . $template_file_name . '.php</p>';
      echo '<div class="wp-template-info-detail">';
      echo '<p>テンプレートパス: ' . $template_file_path . '</p>';
      echo '<p>テーマ: ' . $template_theme_name . '</p>';
      echo '<p>スラッグ: ' . siteinfo( 'SITE', 'CURRENT_PAGE' )[0] . '</p>';
      echo '<p>親: ' . siteinfo( 'SITE', 'CURRENT_PAGE' )[1] . '</p>';
      echo $included_files_output;
      echo '</div>';
      echo '<div class="wp-template-info-close js-wpinfo-close">×</div>';
      echo '</div>';
      echo '</div>';
    }
  }
}
add_action( 'wp_footer', 'display_template_info' ); // テンプレート情報をフッターに表示
