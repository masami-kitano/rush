<?php
/**
 * bodyタグ直後にタグを追加
 *
 * 参照元: header.php
 *
 */
?>
<?php
// 本番かつWPにログインしていない
if ( ! is_user_logged_in() && PROD_DOMAIN == $_SERVER[ 'SERVER_NAME' ] ) : ?>
<!-- Google Tag Manager (noscript) -->
<noscript></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif;
