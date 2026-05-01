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

      <div class="l-footer__social">
        <p class="l-footer__social-label">Find me on</p>
        <ul class="l-footer__social-list">
          <li class="l-footer__social-item">
            <a href="https://x.com/Matsutake_prgrm" target="_blank" rel="noopener noreferrer" class="l-footer__social-link" aria-label="Twitter (X)">
              <?php include get_template_directory() . '/assets/img/common/sns/twitter.svg'; ?>
            </a>
          </li>
          <li class="l-footer__social-item">
            <a href="https://zenn.dev/matsutake_prgrm" target="_blank" rel="noopener noreferrer" class="l-footer__social-link" aria-label="Zenn">
              <?php include get_template_directory() . '/assets/img/common/sns/zenn.svg'; ?>
            </a>
          </li>
          <li class="l-footer__social-item">
            <a href="https://github.com/Matsutake29" target="_blank" rel="noopener noreferrer" class="l-footer__social-link" aria-label="GitHub">
              <?php include get_template_directory() . '/assets/img/common/sns/github.svg'; ?>
            </a>
          </li>
        </ul>
      </div>

      <div class="l-footer__hub">
        <a href="https://mt-tk.com" target="_blank" rel="noopener noreferrer" class="l-footer__hub-link">
          ← MATSUO DW Home (mt-tk.com)
        </a>
      </div>

      <p class="l-footer__copyright">
        &copy; <?php echo date('Y'); ?> MATSUO DW All Rights Reserved.
      </p>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
