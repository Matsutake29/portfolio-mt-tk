<?php
/**
 * Template Name: プロフィール
 */
get_header();
?>

<main class="l-main">

  <!-- ============================================================ -->
  <!-- ページヘッダー                                               -->
  <!-- ============================================================ -->
  <div class="c-subpage-header">
    <div class="l-container">
      <span class="c-subpage-header__label">Profile</span>
      <h1 class="c-subpage-header__title">プロフィール</h1>
    </div>
  </div>

  <!-- ============================================================ -->
  <!-- Intro（自己紹介）                                            -->
  <!-- ============================================================ -->
  <section class="p-profile-intro">
    <div class="p-profile-intro__inner l-container">
      <div class="p-profile-intro__layout">

        <div class="p-profile-intro__image-col">
          <div class="p-profile-intro__image-wrap">
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/about-avatar.png"
              alt="松尾 赳治のアバターイラスト"
              width="480"
              height="480"
              loading="eager"
              class="p-profile-intro__image"
            >
          </div>
        </div>

        <div class="p-profile-intro__content">
          <div class="p-profile-intro__header">
            <span class="p-profile-intro__label">About</span>
            <h2 class="p-profile-intro__heading">自己紹介</h2>
          </div>

          <p class="p-profile-intro__name-en">Takeharu Matsuo</p>
          <p class="p-profile-intro__name-ja">松尾 赳治</p>

          <p class="p-profile-intro__catch">チームで触れる、保守性の高いコードを。</p>

          <div class="p-profile-intro__text">
            <p>フリーランスのWebコーダーとして活動しています。WordPressを使ったサイト制作・テーマ開発を得意とし、制作会社・デザイナーとの業務委託で多数の案件に携わってきました。</p>
            <p>FLOCSSによるCSS設計と、デザインカンプへの忠実な再現を強みとしています。「自分だけが読めるコード」ではなく、チームで触れる保守性の高い実装を意識しています。コーポレートサイト・LP・WordPressテーマ開発を中心に、スピードと品質を両立した納品を続けています。</p>
          </div>

          <dl class="p-profile-intro__info">
            <div class="p-profile-intro__info-row">
              <dt class="p-profile-intro__info-label">Location</dt>
              <dd class="p-profile-intro__info-value">愛知県</dd>
            </div>
            <div class="p-profile-intro__info-row">
              <dt class="p-profile-intro__info-label">Works</dt>
              <dd class="p-profile-intro__info-value">コーディング / WordPressテーマ開発 / 保守運用</dd>
            </div>
          </dl>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Philosophy（制作への想い）                                   -->
  <!-- ============================================================ -->
  <section class="p-profile-philosophy">
    <div class="p-profile-philosophy__inner l-container">

      <div class="p-profile-philosophy__header">
        <span class="p-profile-philosophy__label">Philosophy</span>
        <h2 class="p-profile-philosophy__heading">制作への想い</h2>
      </div>

      <div class="p-profile-philosophy__grid">

        <div class="p-profile-philosophy__item">
          <p class="p-profile-philosophy__number">01</p>
          <h3 class="p-profile-philosophy__item-heading">保守性へのこだわり</h3>
          <p class="p-profile-philosophy__item-text">コードは書いた瞬間だけでなく、その後も誰かが触るものです。FLOCSSによる設計・BEMの命名規則・クラス名のフル記述を徹底し、担当者が変わっても迷わず修正できる実装を心がけています。「読みやすいコード」は、チームへの敬意だと思っています。</p>
        </div>

        <div class="p-profile-philosophy__item">
          <p class="p-profile-philosophy__number">02</p>
          <h3 class="p-profile-philosophy__item-heading">デザイナーとの協業</h3>
          <p class="p-profile-philosophy__item-text">デザインカンプを「ただ再現する」のではなく、その背景にある意図を読み取ることを大切にしています。Figmaでのデザイン確認・余白の意図・インタラクションの想定を把握した上でコードに落とし込み、デザイナーが描いたビジョンをそのままブラウザで表現します。</p>
        </div>

        <div class="p-profile-philosophy__item">
          <p class="p-profile-philosophy__number">03</p>
          <h3 class="p-profile-philosophy__item-heading">丁寧なコミュニケーション</h3>
          <p class="p-profile-philosophy__item-text">制作の品質は、コードだけでなくやり取りの質にも左右されます。不明点は早めに確認・進捗は定期的に共有・懸念点は先出しする。こうした報告・連絡・相談の習慣が、修正の往復を減らし、納品後の満足度につながると考えています。</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Skills（スキル詳細）                                        -->
  <!-- ============================================================ -->
  <section class="p-profile-skills">
    <div class="p-profile-skills__inner l-container">

      <div class="p-profile-skills__header">
        <span class="p-profile-skills__label">Skills</span>
        <h2 class="p-profile-skills__heading">スキル・使用技術</h2>
      </div>

      <div class="p-profile-skills__grid">

        <div class="p-profile-skills__category">
          <h3 class="p-profile-skills__category-title">Markup &amp; Style</h3>
          <ul class="p-profile-skills__list">
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">HTML</li>
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">CSS</li>
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">SCSS / Sass</li>
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">FLOCSS</li>
            <li class="p-profile-skills__tag">BEM</li>
          </ul>
        </div>

        <div class="p-profile-skills__category">
          <h3 class="p-profile-skills__category-title">Programming</h3>
          <ul class="p-profile-skills__list">
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">PHP</li>
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">JavaScript</li>
            <li class="p-profile-skills__tag">jQuery</li>
          </ul>
        </div>

        <div class="p-profile-skills__category">
          <h3 class="p-profile-skills__category-title">CMS &amp; Framework</h3>
          <ul class="p-profile-skills__list">
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">WordPress</li>
            <li class="p-profile-skills__tag">Studio</li>
          </ul>
        </div>

        <div class="p-profile-skills__category">
          <h3 class="p-profile-skills__category-title">Design &amp; Prototype</h3>
          <ul class="p-profile-skills__list">
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">Figma</li>
            <li class="p-profile-skills__tag">Adobe XD</li>
            <li class="p-profile-skills__tag">Illustrator</li>
            <li class="p-profile-skills__tag">Photoshop</li>
          </ul>
        </div>

        <div class="p-profile-skills__category">
          <h3 class="p-profile-skills__category-title">Tools &amp; Workflow</h3>
          <ul class="p-profile-skills__list">
            <li class="p-profile-skills__tag p-profile-skills__tag--primary">Git / GitHub</li>
            <li class="p-profile-skills__tag">MAMP</li>
            <li class="p-profile-skills__tag">Notion</li>
            <li class="p-profile-skills__tag">Slack</li>
            <li class="p-profile-skills__tag">Discord</li>
          </ul>
        </div>

        <div class="p-profile-skills__category">
          <h3 class="p-profile-skills__category-title">Other</h3>
          <ul class="p-profile-skills__list">
            <li class="p-profile-skills__tag">SEO</li>
            <li class="p-profile-skills__tag">GA4</li>
            <li class="p-profile-skills__tag">サーバー設定</li>
            <li class="p-profile-skills__tag">工程・進行管理</li>
          </ul>
        </div>

      </div>

      <!-- 得意な案件タイプ -->
      <div class="p-profile-skills__works-type">
        <h3 class="p-profile-skills__works-type-heading">Works Type</h3>
        <div class="p-profile-skills__works-type-grid">

          <div class="p-profile-skills__works-type-item">
            <p class="p-profile-skills__works-type-name">コーポレートサイト</p>
            <p class="p-profile-skills__works-type-desc">企業・サービスの信頼感を伝えるサイト制作。デザインカンプの忠実な再現と保守性の高い実装が得意です。</p>
          </div>

          <div class="p-profile-skills__works-type-item">
            <p class="p-profile-skills__works-type-name">ランディングページ</p>
            <p class="p-profile-skills__works-type-desc">訴求力の高いLPのコーディング。アニメーション実装・表示速度の最適化も対応します。</p>
          </div>

          <div class="p-profile-skills__works-type-item">
            <p class="p-profile-skills__works-type-name">WordPressテーマ開発</p>
            <p class="p-profile-skills__works-type-desc">カスタム投稿・ACFを活用したテーマ開発。運用しやすい管理画面設計にも対応します。</p>
          </div>

          <div class="p-profile-skills__works-type-item">
            <p class="p-profile-skills__works-type-name">保守・運用サポート</p>
            <p class="p-profile-skills__works-type-desc">既存サイトの修正・機能追加・WordPress更新対応。長期的な継続サポートも歓迎です。</p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Career（実績・経歴）                                         -->
  <!-- ============================================================ -->
  <section class="p-profile-career">
    <div class="p-profile-career__inner l-container">

      <div class="p-profile-career__header">
        <span class="p-profile-career__label">Career</span>
        <h2 class="p-profile-career__heading">実績・経歴</h2>
      </div>

      <!-- 実績数値 -->
      <div class="p-profile-career__stats">
        <div class="p-profile-career__stat">
          <p class="p-profile-career__stat-number">30<span>件以上</span></p>
          <p class="p-profile-career__stat-label">累計制作案件数</p>
        </div>
        <div class="p-profile-career__stat">
          <p class="p-profile-career__stat-number">2<span>年以上</span></p>
          <p class="p-profile-career__stat-label">フリーランス歴</p>
        </div>
      </div>

      <!-- 経歴テキスト -->
      <div class="p-profile-career__history">
        <h3 class="p-profile-career__history-heading">History</h3>
        <p class="p-profile-career__history-text">2024年にフリーランスとして独立。制作会社・デザイナーとの業務委託を中心に、コーポレートサイト・LP・WordPressテーマ開発など多様な案件に携わっています。現在も新しいご依頼・パートナーシップを積極的に受け付けています。</p>
      </div>

    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Contact CTA                                                  -->
  <!-- ============================================================ -->
  <section class="p-top-contact">
    <div class="p-top-contact__inner l-container">
      <span class="p-top-contact__label">Contact</span>
      <h2 class="p-top-contact__heading">お仕事のご依頼・ご相談</h2>
      <p class="p-top-contact__text">制作会社様・デザイナー様からのご依頼をお待ちしています。<br>お気軽にお問い合わせください。</p>
      <a href="<?php echo esc_url(home_url('contact/')); ?>" class="c-btn c-btn--lg">お問い合わせはこちら</a>
    </div>
  </section>

</main>

<?php get_footer();
