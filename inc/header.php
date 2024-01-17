<!-- ヘッダー（共通） -->
<header class="header">
  <div class="header__inner">
    <div class="header__commonLogo commonLogo -black">
      <a href="<?php echo esc_url(home_url()); ?>" class="ro">
        <span class="eng">SHO MATSUBARA</span>
      </a>
    </div>
    <div class="header__links">
      <nav class="header__nav">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'place_global',
            'container' => false,
          )
        )
        ?>
      </nav>
      <div class="header__commonIcon commonIcon -black">
        <a href="https://github.com/s-matsubara1217" target="_blank" class="ro">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/icon_github_white.png" alt="GitHub アイコン" height="20" />
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
