<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=1024" />
  <script>
    var metalist = document.getElementsByTagName("meta");
    var ua = navigator.userAgent;
    for (var i = 0; i < metalist.length; i++) {
      var name = metalist[i].getAttribute("name");
      if (name && name.toLowerCase() === "viewport") {
        if (ua.indexOf("iPhone") > 0 || (ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0)) {
          metalist[i].setAttribute("content", "width=device-width");
          break;
        }
      }
    }
  </script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>SHO MATSUBARA | ポートフォリオサイト</title>

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <meta name="robots" content="noindex" />
  <meta name="robots" content="nofollow" />
  <meta name="robots" content="noarchive" />

  <!-- SNS -->

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet" />

  <!-- styles -->
  <!-- 共通 -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="lower-works_l">
  <!-- ハンバーガーメニュー（共通） -->
  <div class="hamburger">
    <div class="hamburger__menu">
      <div class="hamburger__menu__inner">
        <div class="hamburger__menu__wrap">
          <div class="hamburger__commonLogo commonLogo -black">
            <a href="index.html" class="ro">
              <span class="eng">SHO MATSUBARA</span>
            </a>
          </div>
          <div class="hamburger__commonIcon commonIcon -black">
            <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">
              <img src="img/common/icon_github_white.png" alt="GitHub アイコン" height="20" />
            </a>
          </div>
        </div>
        <nav class="hamburger__nav">
          <ul class="hamburger__nav__list">
            <li class="hamburger__nav__list__item">
              <a href="index.html" class="ro">
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
    <!-- ヘッダー（共通） -->
    <header class="header">
      <div class="header__inner">
        <div class="header__commonLogo commonLogo -black">
          <a href="index.html" class="ro">
            <span class="eng">SHO MATSUBARA</span>
          </a>
        </div>
        <div class="header__links">
          <nav class="header__nav">
            <ul class="header__nav__list">
              <li class="header__nav__list__item">
                <a href="about.html" class="ro">
                  <div class="eng">About</div>
                </a>
              </li>
              <li class="header__nav__list__item">
                <a href="works_l.html" class="ro">
                  <div class="eng">Works</div>
                </a>
              </li>
            </ul>
          </nav>
          <div class="header__commonIcon commonIcon -black">
            <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">
              <img src="img/common/icon_github_white.png" alt="GitHub アイコン" height="20" />
            </a>
          </div>
        </div>
        <div class="header__hamburger -hamburger">
          <div class="btn">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
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
              <span class="result_total_all">999</span>
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
            <li class="commonWorksList__item anime -slideIn-b-40">
              <a href="works_d.html">
                <div class="imgArea">
                  <div class="badge">
                    <span class="eng">Pick<br />Up</span>
                  </div>
                  <div class="img">
                    <img src="img/index/works_img01.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img02.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img03.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img04.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img05.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img06.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img07.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img08.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img09.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img01.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img02.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img03.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img04.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img05.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img06.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img07.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img08.jpg" alt="イメージ" class="ofi" loading="lazy" />
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
                    <img src="img/index/works_img09.jpg" alt="イメージ" class="ofi" loading="lazy" />
                  </div>
                </div>
                <span class="commonWorkStyle">クライアントワーク</span>
              </a>
            </li>
          </ul>
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
    <!-- フッター（共通） -->
    <footer class="footer">
      <div class="footer__inner l-container-xl">
        <span class="pagetop">
          <a href="#container" class="ro">
            <img src="img/common/pagetop.png" alt="ページトップ" height="28" />
          </a>
        </span>
        <div class="footer__body">
          <div class="footer__body__left">
            <div class="footer__commonLogo commonLogo -white">
              <a href="index.html" class="ro">
                <span class="eng">SHO MATSUBARA</span>
              </a>
            </div>
            <div class="footer__commonIcon commonIcon -white">
              <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">
                <img src="img/common/icon_github_black.png" alt="GitHub アイコン" height="20" />
              </a>
            </div>
          </div>
          <div class="footer__body__right">
            <nav class="footer__nav">
              <ul class="footer__nav__list">
                <li class="footer__nav__list__item">
                  <a href="about.html" class="ro">
                    <span class="eng">About</span>
                  </a>
                </li>
                <li class="footer__nav__list__item">
                  <a href="works_l.html" class="ro">
                    <span class="eng">Works</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="footer__cr">
          <span class="eng">&copy; SHO MATSUBARA All rights reserved.</span>
        </div>
      </div>
    </footer>
  </div>

  <!-- JavaScript -->
  <!-- 共通 -->
  <script src="js/vendor/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
