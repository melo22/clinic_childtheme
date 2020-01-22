<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く

function copy_function($content) {
	echo '<p class="add_copy">theme created <a href="https://melloblo.com" target="_blank">melloblo</a></p>';
return;
}
add_filter( 'wp_footer', 'copy_function',1 );