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


/**
 * ページネーション
 */
function wp_pagination()
{
  global $wp_query;
  $big = 99999999;
  $page_format = paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'prev_next'    => True,
    'prev_text'    => __('&lt;'),
    'next_text'    => __('&gt;'),
    'type'  => 'array'
  ));
  if (is_array($page_format)) {
    echo '<div class="pager"><ul class="pager_list">';
    foreach ($page_format as $page) {
      echo "<li class='pager_item'>$page</li>";
    }
  } else {
    echo '<div class="pager"><ul class="pager_list"><li class="pager_item current"><span class="current">1</span></li></ul></div>';
  }
  echo '</ul></div>';
  wp_reset_query();
}
