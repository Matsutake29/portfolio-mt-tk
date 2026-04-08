  <footer class="l-footer">
    <div class="l-footer__inner">

      <div class="l-footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__logo-link" aria-label="MATSUO DW - ホームへ">
          <?php include get_template_directory() . '/assets/img/common/logo-white.svg'; ?>
        </a>
      </div>

      <nav class="l-footer__nav" aria-label="フッターナビゲーション">
        <ul class="l-footer__nav-list">
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('works/')); ?>" class="l-footer__nav-link">Works</a>
          </li>
          <li class="l-footer__nav-item">
            <a href="<?php echo esc_url(home_url('profile/')); ?>" class="l-footer__nav-link">Profile</a>
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
        &copy; <?php echo date('Y'); ?> MATSUO DW All Rights Reserved.
      </p>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
