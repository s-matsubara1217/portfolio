<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <?php wp_head(); ?>
</head>

<body class="lower-about">
  <?php get_template_part('inc/hamburger'); ?>

  <div id="container">
    <?php get_template_part('inc/header'); ?>
    <!-- ページヘッダー（固有） -->
    <div class="pageHeader">
      <div class="pageHeader__commonYellowLine commonYellowLine"></div>
      <h1 class="pageHeader__ttl">
        <span class="eng split">About</span>
      </h1>
    </div>
    <!-- コンテンツ -->
    <main class="l-main" id="main">
      <!-- 導入 -->
      <section class="sec__intro">
        <div class="intro">
          <div class="intro__inner l-container-xl">
            <div class="intro__box">
              <div class="intro__box__inner anime -slideIn-b-40">
                <div class="imgArea">
                  <div class="img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/intro_img01.jpg" alt="イメージ" class="ofi" loading="lazy" />
                  </div>
                </div>
                <div class="txtArea">
                  <dl>
                    <dt>名前</dt>
                    <span class="colon">：</span>
                    <dd>松原奨</dd>
                  </dl>
                  <dl>
                    <dt>生年月日</dt>
                    <span class="colon">：</span>
                    <dd>1996年12月17日</dd>
                  </dl>
                  <dl>
                    <dt>出身地</dt>
                    <span class="colon">：</span>
                    <dd>兵庫県宝塚市</dd>
                  </dl>
                  <dl>
                    <dt>最終学歴</dt>
                    <span class="colon">：</span>
                    <dd>関西学院大学商学部</dd>
                  </dl>
                  <dl>
                    <dt>GitHub</dt>
                    <span class="colon">：</span>
                    <dd>
                      <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">https://github.com/s-matsubara1217</a>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 職務経歴 -->
      <section class="sec__commonSection01 anime -slideIn-b-40">
        <div class="commonSection01">
          <div class="commonSection01__inner l-container-xl">
            <div class="commonSection01__box">
              <div class="commonSection01__head">
                <div class="commonHead02">
                  <h2 class="ja">職務経歴</h2>
                </div>
              </div>
              <div class="commonSection01__body">
                <ul class="careerList">
                  <li class="careerList__item">
                    <div class="careerList__head">
                      <h3 class="careerList__term">株式会社一条工務店</h3>
                      <span class="careerList__job">営業</span>
                      <span class="careerList__date">2019年4月〜2020年4月</span>
                    </div>
                    <div class="careerList__body">
                      <p class="careerList__desc">
                        学生時代にスターバックスでアルバイトをしていた経験から、仕事を通して人と深い関係を築き、豊かになるお手伝いをしたい思い、入社を決意しました。注文住宅の営業として、どのようにすればお客様に幸せになっていただけるかを考えて取り組んできました。
                      </p>
                    </div>
                  </li>
                  <li class="careerList__item">
                    <div class="careerList__head">
                      <h3 class="careerList__term">株式会社グラウンド</h3>
                      <span class="careerList__job">マークアップエンジニア</span>
                      <span class="careerList__date">2020年11月〜2021年9月</span>
                    </div>
                    <div class="careerList__body">
                      <p class="careerList__desc">
                        「世の中のより多くの方たちに貢献したい」という想いからエンジニアを志望しました。オンラインプログラミングスクールでPHPやVue.jsを学習する中で、フロントエンドの開発に興味を持ちました。同社ホームページを見たところ、様々な業界かつ大規模なサイトを制作しており、多くの経験ができると思い入社を決意いたしました。
                      </p>
                    </div>
                  </li>
                  <li class="careerList__item">
                    <div class="careerList__head">
                      <h3 class="careerList__term">株式会社アイデム</h3>
                      <span class="careerList__job">マークアップエンジニア</span>
                      <span class="careerList__date">2021年10月〜2023年11月</span>
                    </div>
                    <div class="careerList__body">
                      <p class="careerList__desc">
                        CMS構築やプログラミングも経験したいという思いから入社を決意いたしました。多くの企業の採用サイトやコーポレートサイトを制作させていただくことで、コーディングのスキルを向上することができました。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 趣味 -->
      <section class="sec__commonSection01 anime -slideIn-b-40">
        <div class="commonSection01">
          <div class="commonSection01__inner l-container-xl">
            <div class="commonSection01__box">
              <div class="commonSection01__head">
                <div class="commonHead02">
                  <h2 class="ja">趣味</h2>
                </div>
              </div>
              <div class="commonSection01__body">
                <ul class="hobbyList">
                  <li class="hobbyList__item">
                    <div class="hobbyList__imgArea">
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/hobby_img01.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <div class="hobbyList__txtArea">
                      <h3 class="hobbyList__term">テニス</h3>
                      <p class="hobbyList__desc">
                        スクールに行ったり、友達と一緒にしたりと週に1-2回楽しんでおります。現在は30名ほどの社会人チームに所属しております。ワイワイしながら体を動かすことは人生で幸せな時間のうちの一つです。得意なショットはサーブとスマッシュです。写真は、大会で準優勝したときのものです。
                      </p>
                    </div>
                  </li>
                  <li class="hobbyList__item">
                    <div class="hobbyList__imgArea">
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/hobby_img02.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <div class="hobbyList__txtArea">
                      <h3 class="hobbyList__term">筋トレ</h3>
                      <p class="hobbyList__desc">
                        健康的なカラダづくりのために、週に3回ほど行っております。BIG3と言われるトレーニング種目をメインに、有酸素運動も取り入れながらやっております。理想の体型は、俳優のポール・カーミリアンです。今後はパーソナルトレーニングにも通い、より本格的なカラダづくりをしていきたいと考えております。
                      </p>
                    </div>
                  </li>
                  <li class="hobbyList__item">
                    <div class="hobbyList__imgArea">
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/hobby_img03.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <div class="hobbyList__txtArea">
                      <h3 class="hobbyList__term">銭湯・サウナ</h3>
                      <p class="hobbyList__desc">
                        リフレッシュのために週に1回は必ず行っています。10分間サウナ→水風呂→5分間外気浴を3セットしています。外気浴の時間が、人生の中で最も好きな時間のうちの1つです。特に好きな銭湯は、家の近くにある宝乃湯です。
                      </p>
                    </div>
                  </li>
                  <li class="hobbyList__item">
                    <div class="hobbyList__imgArea">
                      <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/hobby_img04.jpg" alt="イメージ" class="ofi" loading="lazy" />
                      </div>
                    </div>
                    <div class="hobbyList__txtArea">
                      <h3 class="hobbyList__term">旅行</h3>
                      <p class="hobbyList__desc">
                        国内旅行・海外旅行どちらも行きますが、特に海外旅行が好きです。これまでグアム・ハワイ・ニューヨーク・台湾・韓国に行きました。新しい文化や作品、人々に出会えるためとても好きで、中でもブロードウェイのミュージカルは人生が変わるほど大きな衝撃と感動を受けました。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 一問一答 -->
      <section class="sec__commonSection01 anime -slideIn-b-40">
        <div class="commonSection01">
          <div class="commonSection01__inner l-container-xl">
            <div class="commonSection01__box">
              <div class="commonSection01__head">
                <div class="commonHead02">
                  <h2 class="ja">一問一答</h2>
                </div>
              </div>
              <div class="commonSection01__body">
                <div class="qaList">
                  <dl class="qaList__item">
                    <dt class="qaList__question">
                      <span class="qaList__badge eng -yellow">Q</span>
                      <p class="qaList__question__txt">学生時代の部活は？</p>
                    </dt>
                    <dd class="qaList__answer">
                      <span class="qaList__badge eng -black">A</span>
                      <p class="qaList__answer__txt">野球部（小中高12年間）</p>
                    </dd>
                  </dl>
                  <dl class="qaList__item">
                    <dt class="qaList__question">
                      <span class="qaList__badge eng -yellow">Q</span>
                      <p class="qaList__question__txt">好きな本や映画は？</p>
                    </dt>
                    <dd class="qaList__answer">
                      <span class="qaList__badge eng -black">A</span>
                      <p class="qaList__answer__txt">
                        本：東野圭吾著　「時生」<br />
                        人生について考える機会になるところがとても好きで、最後の一行でこれまでにないほどの鳥肌が立ちました。<br />
                        映画：「マイ・インターン」<br />
                        自分にとって何が大切かを考えるきっかけを与えてくれた映画で、見ると自然と元気が湧いてくるのでとても好きです。
                      </p>
                    </dd>
                  </dl>
                  <dl class="qaList__item">
                    <dt class="qaList__question">
                      <span class="qaList__badge eng -yellow">Q</span>
                      <p class="qaList__question__txt">好きな言葉は？</p>
                    </dt>
                    <dd class="qaList__answer">
                      <span class="qaList__badge eng -black">A</span>
                      <p class="qaList__answer__txt">
                        「Less is More」<br />
                        私が目指す生き方の一つだからです。
                        多くのものに依存せず、本当に大切なものを大切にできるような人になれるよう心がけています。
                      </p>
                    </dd>
                  </dl>
                </div>
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
