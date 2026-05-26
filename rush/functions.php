<?php
/*********************************
*  変数・定数設定
**********************************/
get_template_part( 'functions/definitions' );


/*********************************
*  テーマ設定 (機能追加・削除)
**********************************/
get_template_part( 'functions/themes' );


/*********************************
*  取得・判定
**********************************/
get_template_part( 'functions/utilities' );


/*********************************
*  カスタムポスト(リライトルール)
**********************************/
get_template_part( 'functions/custom', 'post' );


/*********************************
*  カスタムタクソノミー(リライトルール)
**********************************/
get_template_part( 'functions/custom', 'taxonomy' );


/*********************************
*  投稿に関する設定(リライトルール)
**********************************/
// get_template_part( 'functions/post', 'options' );


/*********************************
*  管理画面制御
**********************************/
// get_template_part( 'functions/management', 'screen' );


/*********************************
*  プラグイン
**********************************/
/*
 * ACF設定 [Advanced Custom Fields PRO]
 */
// get_template_part( 'functions/plugins/acf', 'setting' );


/*********************************
*  ショートコード
**********************************/
get_template_part( 'functions/shortcodes' );


/*********************************
*  css, js, Google Fonts
**********************************/
get_template_part( 'functions/styles', 'scripts' );


/*********************************
*  テンプレート情報取得
**********************************/
get_template_part( 'functions/wp', 'template-info' );
