/*-------------------------------
  メインビジュアル パララックス
-------------------------------*/
window.addEventListener('DOMContentLoaded', function () {

  // 835px以上のみ適用
  const mediaQueryList = window.matchMedia('(min-width: 835px)');
  const listener = (event) => {
    // リサイズ時に行う処理
    if (event.matches) {
      // 835px以上
      const heroAreaList = Array.from(document.querySelectorAll('.heroArea'));
      const idName = 'scene';
      for (let i = 0; i <= heroAreaList.length - 1; i++) {
        heroAreaList[i].setAttribute("id", idName + (i));
        function parallaxMouse () {
          var scene = document.getElementById(idName+(i));
          var parallaxInstance = new Parallax(scene, {
              limitX: 100,
              limitY: 50,
          });
        }
        parallaxMouse();
      }
    } else {
      // 834px以下
    }
  };

  // リスナー登録
  mediaQueryList.addEventListener("change", listener);
  // 初期化処理
  listener(mediaQueryList);

});

/*-------------------------------
  メインビジュアル swiper
-------------------------------*/
const mv_swiper = new Swiper('.mainVisual__swiper', {
  loop: true,
  initialSlide: 2,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 6000,
    disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
    waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
  },
  pagination: {
    el: '.mainVisual__swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.mainVisual__swiper-button-next',
    prevEl: '.mainVisual__swiper-button-prev',
  },
});
mv_swiper.autoplay.stop();
window.addEventListener('load', function(){
  mv_swiper.autoplay.start();
});

/*-------------------------------
  最新の求人情報 swiper
-------------------------------*/
const newJobs_swiper = new Swiper('.newJobs__swiper', {
  // loop: true,
  speed: 600,
  slidesPerView: 3,
  direction: 'vertical',
  watchOverflow: true,
  allowTouchMove: false,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
    waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
  },
  navigation: {
    nextEl: '.newJobs__swiper-button-next',
    prevEl: '.newJobs__swiper-button-prev',
  },
  breakpoints: {
    835: {
      // slidesPerView: 2,
    }
  },
});
// newJobs_swiper.autoplay.stop();
