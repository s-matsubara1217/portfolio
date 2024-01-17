<?php
function my_enqueue_scripts()
{
  $uri = esc_url(get_template_directory_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('script_js', $uri . '/js/script.js', array(), '1.1', true);
  wp_enqueue_style('common_styles', $uri . '/css/style.css', []);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// ヘッダー、フッター、ハンバーガーのカスタムメニュー
register_nav_menus(
  array(
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ',
    'place_hamburger' => 'ハンバーガー',
  )
);
