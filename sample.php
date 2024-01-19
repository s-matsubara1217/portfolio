<ul class="works__commonWorksList commonWorksList">
  <?php
  $arg = array(
    'post_type' => 'post', //postは通常の投稿の場合(省略可)、カスタム投稿の時は投稿タイプのスラッグ名を指定する
    'posts_per_page' => -1, //表示記事件数(-1で全件表示)
    'orderby' => 'date', //並び順
    'order' => 'DESC' //降順(日付の新しい順)
  );
  $posts = new WP_Query($arg);
  ?>
  <?php if ($posts->have_posts()) :
    while ($posts->have_posts()) : $posts->the_post(); ?>
      <li class="commonWorksList__item anime -slideIn-b-40">
        <a href="<?php the_permalink(); ?>">
          <div class="imgArea">
            <div class="badge">
              <span class="eng">Pick<br />Up</span>
            </div>
            <div class="img">
              <?php
              $img = get_field('img');
              if (!empty($img)) : ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="イメージ" class="ofi" loading="lazy" />
              <?php endif; ?>
            </div>
          </div>
          <span class="commonWorkStyle"><?php the_field('workstyle') ?></span>
        </a>
      </li>
    <?php endwhile;
    wp_reset_query();
  else : ?>
    <p>記事がありません</p>
  <?php endif; ?>
</ul>
