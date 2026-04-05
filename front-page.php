<?php get_header(); ?>

<main class="l-main">

  <!-- ============================================================ -->
  <!-- FV（ファーストビュー）                                        -->
  <!-- ============================================================ -->
  <section class="p-top-fv">
    <div class="p-top-fv__inner l-container">

      <div class="p-top-fv__body">

        <div class="p-top-fv__content">
          <span class="p-top-fv__label">Web Coder / WordPress Developer</span>
          <h1 class="p-top-fv__heading">
            デザインの意図を、コードに宿す。
          </h1>
          <div class="p-top-fv__name">
            <span class="p-top-fv__name-ja">松尾 赳治</span>
            <span class="p-top-fv__name-en">Takeharu Matsuo</span>
          </div>
          <div class="p-top-fv__btns">
            <a href="<?php echo esc_url(home_url('works/')); ?>" class="c-btn c-btn--lg">制作実績を見る</a>
            <a href="<?php echo esc_url(home_url('contact/')); ?>" class="c-btn c-btn--secondary c-btn--lg">お問い合わせ</a>
          </div>
        </div>

        <div class="p-top-fv__visual" aria-hidden="true">
          <div class="p-top-fv__terminal">
            <div class="p-top-fv__terminal-bar">
              <span class="p-top-fv__terminal-dot p-top-fv__terminal-dot--red"></span>
              <span class="p-top-fv__terminal-dot p-top-fv__terminal-dot--yellow"></span>
              <span class="p-top-fv__terminal-dot p-top-fv__terminal-dot--green"></span>
              <span class="p-top-fv__terminal-title">portfolio.php — bash</span>
            </div>
            <div class="p-top-fv__terminal-body">
              <div class="p-top-fv__terminal-scroll">
                <?php
                $code_lines = [
                  ['t' => 'comment', 'c' => '/* === FLOCSS: Project Layer === */'],
                  ['t' => 'sel',     'c' => '.p-top-fv {'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;min-height: 100svh;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;display: flex;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;align-items: center;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;background: $color-bg;'],
                  ['t' => 'brace',   'c' => '}'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '// WordPress: WP_Query'],
                  ['t' => 'php',     'c' => '$works = new WP_Query(['],
                  ['t' => 'php',     'c' => "&nbsp;&nbsp;'post_type' =&gt; 'works',"],
                  ['t' => 'php',     'c' => "&nbsp;&nbsp;'posts_per_page' =&gt; 6,"],
                  ['t' => 'php',     'c' => ']);'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '&lt;!-- HTML: BEM Structure --&gt;'],
                  ['t' => 'tag',     'c' => '&lt;section class="p-top-fv"&gt;'],
                  ['t' => 'tag',     'c' => '&nbsp;&nbsp;&lt;div class="l-container"&gt;'],
                  ['t' => 'tag',     'c' => '&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1 class="__heading"&gt;'],
                  ['t' => 'str',     'c' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;デザインの意図を、'],
                  ['t' => 'str',     'c' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;コードに宿す。'],
                  ['t' => 'tag',     'c' => '&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;'],
                  ['t' => 'tag',     'c' => '&nbsp;&nbsp;&lt;/div&gt;'],
                  ['t' => 'tag',     'c' => '&lt;/section&gt;'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '// JS: IntersectionObserver'],
                  ['t' => 'js',      'c' => 'const observer = new'],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;IntersectionObserver('],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;(entries) =&gt; {'],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;&nbsp;&nbsp;entries.forEach(e =&gt; {'],
                  ['t' => 'js',      'c' => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (e.isIntersecting) {"],
                  ['t' => 'js',      'c' => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;el.classList.add('is-show');"],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}'],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;&nbsp;&nbsp;});'],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;}, { threshold: 0.2 }'],
                  ['t' => 'js',      'c' => ');'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '/* === Layout: Header === */'],
                  ['t' => 'sel',     'c' => '.l-header {'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;position: fixed;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;top: 0; left: 0;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;width: 100%;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;z-index: $z-header;'],
                  ['t' => 'brace',   'c' => '}'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '// PHP: Template Tags'],
                  ['t' => 'php',     'c' => '&lt;?php get_header(); ?&gt;'],
                  ['t' => 'php',     'c' => '&lt;?php get_template_part('],
                  ['t' => 'php',     'c' => "&nbsp;&nbsp;'template-parts/card'"],
                  ['t' => 'php',     'c' => '); ?&gt;'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '/* === Component: Button === */'],
                  ['t' => 'sel',     'c' => '.c-btn {'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;display: inline-flex;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;padding: 14px 32px;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;font-weight: 600;'],
                  ['t' => 'prop',    'c' => '&nbsp;&nbsp;transition: all 0.3s ease;'],
                  ['t' => 'brace',   'c' => '}'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                  ['t' => 'comment', 'c' => '// JS: Hamburger Menu'],
                  ['t' => 'js',      'c' => 'const btn = document.querySelector('],
                  ['t' => 'js',      'c' => "&nbsp;&nbsp;'.l-header__hamburger'"],
                  ['t' => 'js',      'c' => ');'],
                  ['t' => 'js',      'c' => "btn.addEventListener('click', () => {"],
                  ['t' => 'js',      'c' => '&nbsp;&nbsp;document.body.classList'],
                  ['t' => 'js',      'c' => "&nbsp;&nbsp;&nbsp;&nbsp;.toggle('is-menu-open');"],
                  ['t' => 'js',      'c' => '});'],
                  ['t' => 'blank',   'c' => '&nbsp;'],
                ];
                // シームレスループ用に2回出力
                for ($loop = 0; $loop < 2; $loop++) :
                  foreach ($code_lines as $line) :
                ?>
                <span class="p-top-fv__cl p-top-fv__cl--<?php echo esc_attr($line['t']); ?>"><?php echo $line['c']; ?></span>
                <?php
                  endforeach;
                endfor;
                ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="p-top-fv__scroll" aria-hidden="true">
      <span class="p-top-fv__scroll-line"></span>
      <span class="p-top-fv__scroll-text">Scroll</span>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Works（制作実績）                                             -->
  <!-- ============================================================ -->
  <section class="p-top-works">
    <div class="p-top-works__inner l-container">

      <div class="p-top-works__header">
        <span class="p-top-works__label">Works</span>
        <h2 class="p-top-works__heading">制作実績</h2>
      </div>

      <?php
      $works_query = new WP_Query([
        'post_type'      => 'works',
        'posts_per_page' => 6,
        'post_status'    => 'publish',
      ]);
      ?>

      <?php if ($works_query->have_posts()) : ?>
        <ul class="p-top-works__list">
          <?php while ($works_query->have_posts()) : $works_query->the_post(); ?>
            <li class="p-top-works__item">
              <a href="<?php the_permalink(); ?>" class="p-top-works__link">
                <div class="p-top-works__thumb">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'p-top-works__img', 'loading' => 'lazy']); ?>
                  <?php else : ?>
                    <div class="p-top-works__img-placeholder"></div>
                  <?php endif; ?>
                  <div class="p-top-works__overlay">
                    <span class="p-top-works__overlay-text">View</span>
                  </div>
                </div>
                <div class="p-top-works__meta">
                  <h3 class="p-top-works__title"><?php the_title(); ?></h3>
                  <?php if (get_the_excerpt()) : ?>
                    <p class="p-top-works__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                  <?php endif; ?>
                </div>
              </a>
            </li>
          <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <div class="p-top-works__footer">
          <a href="<?php echo esc_url(home_url('works/')); ?>" class="c-btn c-btn--secondary">実績をすべて見る</a>
        </div>

      <?php else : ?>
        <p class="p-top-works__empty">現在準備中です。</p>
      <?php endif; ?>

    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Skills（使用技術）                                            -->
  <!-- ============================================================ -->
  <section class="p-top-skills">
    <div class="p-top-skills__inner l-container">

      <div class="p-top-skills__header">
        <span class="p-top-skills__label">Skills</span>
        <h2 class="p-top-skills__heading">スキル・使用技術</h2>
      </div>

      <div class="p-top-skills__grid">

        <div class="p-top-skills__category">
          <h3 class="p-top-skills__category-title">Markup &amp; Style</h3>
          <ul class="p-top-skills__list">
            <li class="p-top-skills__tag p-top-skills__tag--primary">HTML5</li>
            <li class="p-top-skills__tag p-top-skills__tag--primary">CSS3</li>
            <li class="p-top-skills__tag p-top-skills__tag--primary">SCSS / Sass</li>
            <li class="p-top-skills__tag p-top-skills__tag--primary">FLOCSS</li>
            <li class="p-top-skills__tag">BEM</li>
          </ul>
        </div>

        <div class="p-top-skills__category">
          <h3 class="p-top-skills__category-title">Programming</h3>
          <ul class="p-top-skills__list">
            <li class="p-top-skills__tag p-top-skills__tag--primary">PHP</li>
            <li class="p-top-skills__tag p-top-skills__tag--primary">JavaScript</li>
            <li class="p-top-skills__tag">jQuery</li>
            <li class="p-top-skills__tag">TypeScript</li>
          </ul>
        </div>

        <div class="p-top-skills__category">
          <h3 class="p-top-skills__category-title">CMS &amp; Framework</h3>
          <ul class="p-top-skills__list">
            <li class="p-top-skills__tag p-top-skills__tag--primary">WordPress</li>
            <li class="p-top-skills__tag">Webflow</li>
            <li class="p-top-skills__tag">Shopify</li>
          </ul>
        </div>

        <div class="p-top-skills__category">
          <h3 class="p-top-skills__category-title">Design &amp; Prototype</h3>
          <ul class="p-top-skills__list">
            <li class="p-top-skills__tag p-top-skills__tag--primary">Figma</li>
            <li class="p-top-skills__tag">Adobe XD</li>
            <li class="p-top-skills__tag">Illustrator</li>
            <li class="p-top-skills__tag">Photoshop</li>
          </ul>
        </div>

        <div class="p-top-skills__category">
          <h3 class="p-top-skills__category-title">Tools &amp; Workflow</h3>
          <ul class="p-top-skills__list">
            <li class="p-top-skills__tag p-top-skills__tag--primary">Git / GitHub</li>
            <li class="p-top-skills__tag p-top-skills__tag--primary">VS Code</li>
            <li class="p-top-skills__tag">Notion</li>
            <li class="p-top-skills__tag">Slack</li>
          </ul>
        </div>

        <div class="p-top-skills__category">
          <h3 class="p-top-skills__category-title">Other</h3>
          <ul class="p-top-skills__list">
            <li class="p-top-skills__tag">SEO基礎</li>
            <li class="p-top-skills__tag">GA4</li>
            <li class="p-top-skills__tag">Web制作ディレクション</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- About                                                        -->
  <!-- ============================================================ -->
  <section class="p-top-about">
    <div class="p-top-about__inner l-container">

      <div class="p-top-about__layout">

        <div class="p-top-about__image-col">
          <div class="p-top-about__image-wrap">
            <img
              src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/top/about-avatar.png"
              alt="松尾 赳治のアバターイラスト"
              width="480"
              height="480"
              loading="lazy"
              class="p-top-about__image"
            >
          </div>
        </div>

        <div class="p-top-about__content">
          <div class="p-top-about__header">
            <span class="p-top-about__label">About</span>
            <h2 class="p-top-about__heading">自己紹介</h2>
          </div>

          <p class="p-top-about__name-en">Takeharu Matsuo</p>
          <p class="p-top-about__name-ja">松尾 赳治</p>

          <div class="p-top-about__text">
            <p>フリーランスのWebコーダー・WordPressデベロッパーとして活動しています。HTML / CSS / SCSSを中心に、WordPressを使ったサイト制作を得意としています。</p>
            <p>「デザインの意図をコードで正確に再現する」ことをモットーに、保守性と再現性を意識した実装を心がけています。</p>
          </div>

          <dl class="p-top-about__info">
            <div class="p-top-about__info-row">
              <dt class="p-top-about__info-label">拠点</dt>
              <dd class="p-top-about__info-value">愛知県</dd>
            </div>
            <div class="p-top-about__info-row">
              <dt class="p-top-about__info-label">得意分野</dt>
              <dd class="p-top-about__info-value">WordPress / FLOCSS / レスポンシブ実装</dd>
            </div>
            <div class="p-top-about__info-row">
              <dt class="p-top-about__info-label">対応業務</dt>
              <dd class="p-top-about__info-value">コーディング / テーマ開発 / 保守運用</dd>
            </div>
          </dl>

          <a href="<?php echo esc_url(home_url('profile/')); ?>" class="c-btn c-btn--secondary">プロフィール詳細</a>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- Contact（CTA）                                               -->
  <!-- ============================================================ -->
  <section class="p-top-contact">
    <div class="p-top-contact__inner l-container">
      <span class="p-top-contact__label">Contact</span>
      <h2 class="p-top-contact__heading">お仕事のご依頼・<br>ご相談はお気軽に</h2>
      <p class="p-top-contact__text">
        コーディング・WordPress制作のご依頼、<br>
        お見積もり・ご相談はお気軽にお問い合わせください。
      </p>
      <a href="<?php echo esc_url(home_url('contact/')); ?>" class="c-btn c-btn--lg p-top-contact__btn">
        お問い合わせ
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
