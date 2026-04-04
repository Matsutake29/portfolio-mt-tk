  <footer class="l-footer">
    <div class="l-footer__inner">

      <div class="l-footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__logo-link">
          <!-- TODO: フッターロゴのパスとalt・サイズを変更 -->
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-white.svg"
            alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
            width="200"
            height="40"
            loading="lazy"
          >
        </a>
      </div>

      <!-- TODO: フッターナビゲーションを案件ごとに変更 -->
      <nav class="l-footer__nav" aria-label="フッターナビゲーション">
        <ul class="l-footer__nav-list">
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('company/')); ?>" class="l-footer__nav-link">Company</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('works/')); ?>" class="l-footer__nav-link">Works</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('news/')); ?>" class="l-footer__nav-link">News</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('contact/')); ?>" class="l-footer__nav-link">Contact</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('privacy/')); ?>" class="l-footer__nav-link">プライバシーポリシー</a>
          </li>
        </ul>
      </nav>

      <p class="l-footer__copyright">
        <!-- TODO: 著作権表記を変更 -->
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.
      </p>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
