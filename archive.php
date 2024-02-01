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
          <!-- リスト -->
          <ul class="works__commonWorksList commonWorksList">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 18,
              'paged' => $paged,
              'ignore_sticky_posts' => 1,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>
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
                    <div class="styleHolder">
                      <span class="commonWorkStyle"><?php the_field('workstyle') ?></span>
                      <span class="commonJobStyle"><?php the_field('job') ?></span>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>

          <!-- ページャー ボトム -->
          <div class="works__countPager countPager -bottom anime -slideIn-b-40">
            <div class="pagination -large">
              <?php
              if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                  'base' => get_pagenum_link() .  '%_%',
                  'format' => 'page/%#%/',
                  'current' => $paged,
                  'total' => $the_query->max_num_pages,
                  'prev_text' => '&lt;',
                  'next_text' => '&gt;'
                ));
              }
              ?>
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
