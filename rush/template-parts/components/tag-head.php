<?php
/**
 * headタグにタグを追加
 *
 * 参照元: header.php
 *
 * wp_head()部分に追加
 *
 */
?>
<?php
// 本番かつWPにログインしていない
if ( ! is_user_logged_in() && PROD_DOMAIN == $_SERVER[ 'SERVER_NAME' ] ) : ?>
<!-- Google Tag Manager -->
<script></script>
<!-- End Google Tag Manager -->
<?php endif;
