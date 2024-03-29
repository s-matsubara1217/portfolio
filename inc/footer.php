<!-- フッター（共通） -->
<footer class="footer">
  <div class="footer__inner l-container-xl">
    <span class="pagetop">
      <a href="#container" class="ro">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/pagetop.png" alt="ページトップ" height="28" />
      </a>
    </span>
    <div class="footer__body">
      <div class="footer__body__left">
        <div class="footer__commonLogo commonLogo -white">
          <a href="<?php echo esc_url(home_url()); ?>" class="ro">
            <span class="eng">SHO MATSUBARA</span>
          </a>
        </div>
        <div class="footer__commonIcon commonIcon -white">
          <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icon_github_black.png" alt="GitHub アイコン" height="20" />
          </a>
        </div>
      </div>
      <div class="footer__body__right">
        <nav class="footer__nav">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'place_footer',
              'container' => false,
            )
          )
          ?>
        </nav>
      </div>
    </div>
    <div class="footer__cr">
      <span class="eng">&copy; SHO MATSUBARA All rights reserved.</span>
    </div>
  </div>
</footer>
