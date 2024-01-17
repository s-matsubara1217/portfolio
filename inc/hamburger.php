<!-- ハンバーガーメニュー（共通） -->
<div class="hamburger">
  <div class="hamburger__menu">
    <div class="hamburger__menu__inner">
      <div class="hamburger__menu__wrap">
        <div class="hamburger__commonLogo commonLogo -black">
          <a href="<?php echo esc_url(home_url()); ?>" class="ro">
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
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'place_hamburger',
            'container' => false,
          )
        )
        ?>
      </nav>
    </div>
  </div>
  <div class="hamburger__menu__close">
    <span></span>
    <span></span>
  </div>
</div>
