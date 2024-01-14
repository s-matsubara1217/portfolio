<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <?php wp_head(); ?>
</head>

<body class="front-page">
  <!-- ローディング -->
  <div id="loading">
    <div class="loading__inner">
      <div class="loading__txt eng">
        <span>N</span>
        <span>O</span>
        <span>W</span>
        <span>&nbsp;</span>
        <span>L</span>
        <span>O</span>
        <span>A</span>
        <span>D</span>
        <span>I</span>
        <span>N</span>
        <span>G</span>
      </div>
    </div>
  </div>

  <!-- ハンバーガーメニュー（共通） -->
  <div class="hamburger">
    <div class="hamburger__menu">
      <div class="hamburger__menu__inner">
        <div class="hamburger__menu__wrap">
          <div class="hamburger__commonLogo commonLogo -black">
            <a href="/" class="ro">
              <span class="eng">SHO MATSUBARA</span>
            </a>
          </div>
          <div class="hamburger__commonIcon commonIcon -black">
            <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icon_github_white.png" alt="GitHub アイコン" height="20" />
            </a>
          </div>
        </div>
        <nav class="hamburger__nav">
          <ul class="hamburger__nav__list">
            <li class="hamburger__nav__list__item">
              <a href="/" class="ro">
                <div class="eng">Top</div>
              </a>
            </li>
            <li class="hamburger__nav__list__item">
              <a href="about.html" class="ro">
                <div class="eng">About</div>
              </a>
            </li>
            <li class="hamburger__nav__list__item">
              <a href="works_l.html" class="ro">
                <div class="eng">Works</div>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="hamburger__menu__close">
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="container">
    <?php get_template_part('inc/header'); ?>
    <!-- メインビジュアル -->
    <div class="mainVisual">
      <div class="mainVisual__commonYellowLine commonYellowLine"></div>
      <div class="mainVisual__hero">
        <div class="mainVisual__hero__human">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/mv__hero.png" alt="人物イメージ" height="502" />
        </div>
        <div class="mainVisual__hero__pc">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/mv_pc.png" alt="パソコン イメージ" height="209" />
        </div>
      </div>
      <h1 class="mainVisual__copy">
        <div class="mainVisual__copy__fill">
          <span class="eng split">Front-end Engineer</span>
        </div>
        <div class="mainVisual__copy__border">
          <span class="eng split">SHO MATSUBARA</span>
        </div>
      </h1>
    </div>
    <!-- コンテンツ -->
    <main class="main" id="main">
      <!-- About -->
      <section id="SEC_ABOUT" class="sec__about">
        <div class="about">
          <div class="about__inner l-container-s">
            <div class="about__head">
              <div class="commonHead01 -white">
                <h2 class="eng split anime -for-zoomIn">About</h2>
              </div>
            </div>
            <div class="about__body">
              <p class="desc anime -slideIn-b-40">
                私の仕事におけるモットーは、Mastery for Service （奉仕のための練達）です。<br class="u-pcOnly" />仕事を通して、一緒に働く方やクライアント、ユーザーなど、多くの方に豊かになっていただきたいと考えております。それを実現するために日々、自身のスキルを磨いております。<br class="u-pcOnly" />また、一緒に働いていて「働きやすい」と思ってもらえるように常日頃から意識しております。
              </p>
              <div class="about__commonBtn01 commonBtn01 -white anime -slideIn-b-40">
                <a href="about.html">
                  <span class="eng">view more</span>
                  <span class="arrow">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/arrow_white.png" alt="イメージ" loading="lazy" height="16" />
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Skills -->
      <section id="SEC_SKILLS" class="sec__skills">
        <div class="skills">
          <div class="skills__inner l-container-m">
            <div class="skills__head">
              <div class="commonHead01 -black">
                <h2 class="eng split anime -for-zoomIn">Skills</h2>
              </div>
            </div>
            <div class="skills__body">
              <ul class="skills__list">
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo01.png" alt="ロゴイメージ" height="72" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">HTML</p>
                    <p class="desc">
                      基本的な構築に加え、アクセシビリティ向上やWebセマンティクスを理解し、ページの意味を明確に表現できます。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo02.png" alt="ロゴイメージ" height="72" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">CSS</p>
                    <p class="desc">
                      基本のスタイリングやレイアウトはもちろん、デザインの一貫性やレスポンシブ対応にも自信があります。PC用のデザインのみでSPのスタイリングができます。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo03.png" alt="ロゴイメージ" height="54" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">SCSS</p>
                    <p class="desc">
                      ミックスインや制御構文を活用し、複雑なスタイリングとメンテナンス可能なコードを実現できます。普段は、BEM
                      / FLOCSSを活用して構築しております。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo04.png" alt="ロゴイメージ" height="64" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">JavaScript</p>
                    <p class="desc">
                      基本的な構文は習得済みです。実務では、DOM操作・スライダーなどのアニメーション・インタラクティブな機能などを実装しておりました。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo05.png" alt="ロゴイメージ" height="24" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">jQuery</p>
                    <p class="desc">
                      JavaScript同様、基本的な構文は理解しております。実務では、簡単なDOM操作などに用いておりました。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo06.png" alt="ロゴイメージ" height="60" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">Vue.js</p>
                    <p class="desc">
                      基本的な内容は一通り学習して、シンプルな構造のアプリケーション作成ができます。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo07.png" alt="ロゴイメージ" height="28" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">Nuxt.js</p>
                    <p class="desc">
                      Vue.js同様、基本的な内容は一通り学習して、シンプルな構造のアプリケーション作成ができます。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo08.png" alt="ロゴイメージ" height="62" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">React</p>
                    <p class="desc">
                      今後、大規模なWebサービスや、スマホアプリの開発に携わりたいため、現在勉強中です。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo09.png" alt="ロゴイメージ" height="62" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">Photoshop</p>
                    <p class="desc">
                      コーディングに必要な基本的な操作は習得済みです。実務では、PCデザインのみの提供であったため、必要に応じてSPデザインを作成しておりました。また、簡単な画像編集ができます。
                    </p>
                  </div>
                </li>
                <li class="skills__list__item anime -slideIn-b-40">
                  <div class="imgArea">
                    <div class="img">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/skills_logo10.png" alt="ロゴイメージ" height="64" loading="lazy" />
                    </div>
                  </div>
                  <div class="txtArea">
                    <p class="term">Figma</p>
                    <p class="desc">
                      コーディングに必要な操作は習得済みです。加えて、デイトラでWebデザインについて学習し、バナーやWebサイトのデザインの作成経験があります。このポートフォリオサイトもFigmaを用いて自身でデザインいたしました。
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Works -->
      <section id="SEC_WORKS" class="sec__works">
        <div class="works">
          <div class="works__commonYellowLine commonYellowLine"></div>
          <div class="works__inner l-container-m">
            <div class="works__head">
              <div class="commonHead01 -black">
                <h2 class="eng split anime -for-zoomIn">Works</h2>
              </div>
            </div>
            <div class="works__body">
              <ul class="commonWorksList">
                <!-- [!] SPは最大3件表示 -->
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img01.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">自主制作</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img02.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img03.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img04.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img05.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img06.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img07.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img08.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
                <li class="commonWorksList__item anime -slideIn-b-40">
                  <a href="works_d.html">
                    <div class="imgArea">
                      <div class="badge">
                        <span class="eng">Pick<br />Up</span>
                      </div>
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/index/works_img09.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <span class="commonWorkStyle">クライアントワーク</span>
                  </a>
                </li>
              </ul>
              <div class="works__commonBtn01 commonBtn01 -black anime -slideIn-b-40">
                <a href="works_l.html">
                  <span class="eng">view more</span>
                  <span class="arrow">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/arrow_black.png" alt="イメージ" loading="lazy" height="16" />
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_template_part('inc/footer'); ?>
  </div>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>

</html>
