<?php
/**
 * 施工事例 - アイテム取得
 *
 * 参照元: frontpage.php
 *
 */

$post_id = $args['post_id'];
$terms = get_the_category($post_id);

// カスタムタクソノミーの取得
$work_tags = get_the_terms($post_id, 'works_tag');
$work_categories = get_the_terms($post_id, 'works_category');

// アイキャッチ画像の取得
$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
?>
<li>
  <a class="c-card" href="<?= get_permalink($post_id); ?>">
    <div class="c-card__category">
      <?php if ($work_categories): ?>
        <?php foreach ($work_categories as $index => $category): ?>
          <?= esc_html($category->name); ?><?= $index < count($work_categories) - 1 ? '／' : ''; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="c-card__inner">
      <?php if ($thumbnail_url): ?>
        <div class="c-card__imageWrap"><img class="c-card__image" src="<?= esc_url($thumbnail_url); ?>" alt="" width="280" height="280" decoding="async" loading="lazy"></div>
      <?php endif; ?>
      <div class="c-card__body">
        <div class="c-card__tag">
          <?php if ($work_tags): ?>
            <?php foreach ($work_tags as $index => $tag): ?>
              <?= esc_html($tag->name); ?><?= $index < count($work_tags) - 1 ? '・' : ''; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div class="c-card__title"><?= get_the_title($post_id); ?></div>
      </div>
    </div>
  </a>
</li>
