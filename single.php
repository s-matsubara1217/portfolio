<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <?php wp_head(); ?>
</head>

<body class="lower-works_d">
  <?php get_template_part('inc/hamburger'); ?>


  <div id="container">
    <?php get_template_part('inc/header'); ?>
    <!-- コンテンツ -->
    <main class="l-main" id="main">
      <div class="works">
        <div class="works__commonYellowLine commonYellowLine"></div>
        <div class="works__inner l-container-m">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="works__box anime -slideIn-b-40">
                <div class="works__head">
                  <div class="works__ttlHolder">
                    <h1 class="works__ttl">
                      <a href="<?php the_field('url') ?>" target="_blank" class="ro"><?php the_title(); ?></a>
                    </h1>
                    <span class="works__commonWorkStyle commonWorkStyle"><?php the_field('workstyle') ?></span>
                  </div>
                  <div class="works__url">
                    <a href="<?php the_field('url') ?>" class="ro" target="_blank"><?php the_field('url') ?></a>
                  </div>
                </div>
                <div class="works__body">
                  <div class="works__img">
                    <a href="<?php the_field('url') ?>" target="_blank">
                      <div class="img">
                        <?php
                        $img = get_field('img');
                        if (!empty($img)) : ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="イメージ" class="ofi" loading="lazy" />
                        <?php endif; ?>
                      </div>
                    </a>
                  </div>
                  <div class="works__txtArea">
                    <?php the_field('content'); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>


          <div class="works__commonBtn01 commonBtn01 -reverse anime -slideIn-b-40">
            <a href="works_l.html">
              <span class="eng">back to list</span>
              <span class="arrow">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/arrow_black.png" alt="イメージ" loading="lazy" height="16" />
              </span>
            </a>
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
