<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <?php wp_head(); ?>
</head>

<body class="lower-works_l">
  <?php get_template_part('inc/hamburger'); ?>


  <div id="container">
    <?php get_template_part('inc/header'); ?>
    <!-- ページヘッダー（固有） -->
    <div class="pageHeader">
      <div class="pageHeader__commonYellowLine commonYellowLine"></div>
      <h1 class="pageHeader__ttl">
        <span class="eng split">Works</span>
      </h1>
    </div>
    <!-- コンテンツ -->
    <main class="l-main" id="main">
      <div class="works">
        <div class="works__inner l-container-m">
          <!-- ページャー トップ -->
          <div class="works__countPager countPager -top anime -slideIn-b-40">
            <div class="result_total">
              <?php
              $count_posts = wp_count_posts();
              $posts = $count_posts->publish;
              ?>
              <span class="result_total_all"><?php echo $posts; ?></span>
              <span class="result_total_txt">件</span>
              <span class="result_total_current">1～20件を表示</span>
            </div>
            <div class="pagination -medium">
              <ul>
                <li class="prev arrow"><a href="">≪</a></li>
                <li class="prev arrow"><a href="">&lt;</a></li>
                <li class="number current"><em>1</em></li>
                <li class="number"><a href="">2</a></li>
                <li class="number"><a href="">3</a></li>
                <li class="number"><a href="">4</a></li>
                <li class="number"><a href="">5</a></li>
                <li class="next arrow"><a href="">&gt;</a></li>
                <li class="next arrow"><a href="">≫</a></li>
              </ul>
            </div>
          </div>
          <!-- リスト -->
          <ul class="works__commonWorksList commonWorksList">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query(array(
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => 20, // 表示件数
              'orderby'     => 'date',
              'order' => 'DESC'
            ));
            if ($the_query->have_posts()) : ?>
              <?php
              while ($the_query->have_posts()) : $the_query->the_post();
              ?>
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
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <!-- pagenation -->
          <div class="pagenation">
            <?php
            if ($the_query->max_num_pages > 1) {
              echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%/',
                'current' => max(1, $paged),
                'mid_size' => 1,
                'total' => $the_query->max_num_pages
              ));
            }
            wp_reset_postdata(); ?>
          </div>
          <!-- ページャー ボトム -->
          <div class="works__countPager countPager -bottom anime -slideIn-b-40">
            <div class="pagination -large">
              <ul>
                <li class="prev arrow"><a href="">≪</a></li>
                <li class="prev arrow"><a href="">&lt;</a></li>
                <li class="number current"><em>1</em></li>
                <li class="number"><a href="">2</a></li>
                <li class="number"><a href="">3</a></li>
                <li class="number"><a href="">4</a></li>
                <li class="number"><a href="">5</a></li>
                <li class="next arrow"><a href="">&gt;</a></li>
                <li class="next arrow"><a href="">≫</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php get_template_part('inc/footer'); ?>
  </div>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>

</html>
