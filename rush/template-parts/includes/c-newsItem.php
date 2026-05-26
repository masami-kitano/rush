<?php
/**
 * ニュースアイテム
 *
 * 参照元: frontpage.php
 *
 */

$post_id = $args['post_id'];
?>
<li class="c-newsItem">
  <time class="c-newsItem__time" datetime="<?= get_the_date('Y-m-d', $post_id); ?>"><?= get_the_date('Y.m.d', $post_id); ?></time>
  <div class="c-newsItem__title"><?= esc_html(get_the_title($post_id)); ?></div>
</li>
