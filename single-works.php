<?php get_header(); ?>

<main class="l-main">

  <div class="l-container">

    <?php while (have_posts()) : the_post(); ?>

      <article class="p-works-single">

        <!-- ヘッダー -->
        <header class="p-works-single__header">
          <span class="p-works-single__label">Works</span>
          <h1 class="p-works-single__title"><?php the_title(); ?></h1>
        </header>

        <!-- メイン画像 -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="p-works-single__thumb">
            <?php the_post_thumbnail('full', ['loading' => 'eager']); ?>
          </div>
        <?php endif; ?>

        <!-- コンテンツ + サイドバー -->
        <div class="p-works-single__layout">

          <!-- 本文 -->
          <div class="p-works-single__body">

            <?php
            $challenge  = get_field('works_challenge');
            $devlog     = get_field('works_devlog');
            $reflection = get_field('works_reflection');
            $result     = get_field('works_result');
            $has_log    = $challenge || $devlog || $reflection || $result;
            ?>

            <?php if ($has_log) : ?>
              <div class="p-works-single__log">

                <?php if ($challenge) : ?>
                  <div class="p-works-single__log-section">
                    <h2 class="p-works-single__log-heading">課題・背景</h2>
                    <p class="p-works-single__log-text"><?php echo nl2br(esc_html($challenge)); ?></p>
                  </div>
                <?php endif; ?>

                <?php if ($devlog) : ?>
                  <div class="p-works-single__log-section">
                    <h2 class="p-works-single__log-heading">設計・実装のポイント</h2>
                    <p class="p-works-single__log-text"><?php echo nl2br(esc_html($devlog)); ?></p>
                  </div>
                <?php endif; ?>

                <?php if ($result) : ?>
                  <div class="p-works-single__log-section">
                    <h2 class="p-works-single__log-heading">成果・数値</h2>
                    <p class="p-works-single__log-text"><?php echo nl2br(esc_html($result)); ?></p>
                  </div>
                <?php endif; ?>

                <?php if ($reflection) : ?>
                  <div class="p-works-single__log-section">
                    <h2 class="p-works-single__log-heading">振り返り・学び</h2>
                    <p class="p-works-single__log-text"><?php echo nl2br(esc_html($reflection)); ?></p>
                  </div>
                <?php endif; ?>

              </div>
            <?php endif; ?>

            <?php if (trim(wp_strip_all_tags(get_the_content()))) : ?>
              <div class="p-works-single__detail">
                <h2 class="p-works-single__detail-heading">詳細</h2>
                <?php the_content(); ?>
              </div>
            <?php endif; ?>

          </div>

          <!-- サイドバー（プロジェクト情報） -->
          <aside class="p-works-single__sidebar">

            <dl class="p-works-single__info">

              <?php
              $cats = get_the_terms(get_the_ID(), 'works-cat');
              if ($cats && !is_wp_error($cats)) :
                $cat_names = wp_list_pluck($cats, 'name');
              ?>
                <div class="p-works-single__info-row">
                  <dt class="p-works-single__info-label">Category</dt>
                  <dd class="p-works-single__info-value"><?php echo esc_html(implode(' / ', $cat_names)); ?></dd>
                </div>
              <?php endif; ?>

              <?php if (get_field('works_client')) : ?>
                <div class="p-works-single__info-row">
                  <dt class="p-works-single__info-label">Client</dt>
                  <dd class="p-works-single__info-value"><?php echo esc_html(get_field('works_client')); ?></dd>
                </div>
              <?php endif; ?>

              <?php if (get_field('works_period')) : ?>
                <div class="p-works-single__info-row">
                  <dt class="p-works-single__info-label">Period</dt>
                  <dd class="p-works-single__info-value"><?php echo esc_html(get_field('works_period')); ?></dd>
                </div>
              <?php endif; ?>

              <?php if (get_field('works_role')) : ?>
                <div class="p-works-single__info-row">
                  <dt class="p-works-single__info-label">Role</dt>
                  <dd class="p-works-single__info-value"><?php echo esc_html(get_field('works_role')); ?></dd>
                </div>
              <?php endif; ?>

              <?php
              $skills = get_field('works_skills');
              if ($skills) :
              ?>
                <div class="p-works-single__info-row">
                  <dt class="p-works-single__info-label">Skills</dt>
                  <dd class="p-works-single__info-value">
                    <ul class="p-works-single__skills">
                      <?php foreach ($skills as $skill) : ?>
                        <li class="p-works-single__skill"><?php echo esc_html($skill); ?></li>
                      <?php endforeach; ?>
                    </ul>
                  </dd>
                </div>
              <?php endif; ?>

            </dl>

            <?php
            $is_private = get_field('works_is_private');
            $site_url   = get_field('works_url');
            $github_url = get_field('works_github');
            ?>

            <?php if (!$is_private && $site_url) : ?>
              <a href="<?php echo esc_url($site_url); ?>" target="_blank" rel="noopener noreferrer" class="p-works-single__url">
                サイトを見る
              </a>
            <?php endif; ?>

            <?php if ($github_url) : ?>
              <a href="<?php echo esc_url($github_url); ?>" target="_blank" rel="noopener noreferrer" class="p-works-single__url p-works-single__url--github">
                GitHub
              </a>
            <?php endif; ?>

          </aside>

        </div>

        <!-- 前後ナビ -->
        <nav class="p-works-single__nav" aria-label="前後の制作実績">
          <?php
          $prev = get_previous_post();
          $next = get_next_post();
          ?>

          <?php if ($prev) : ?>
            <a href="<?php echo esc_url(get_permalink($prev)); ?>" class="p-works-single__nav-prev">
              <span class="p-works-single__nav-dir">← Prev</span>
              <span class="p-works-single__nav-title"><?php echo esc_html(get_the_title($prev)); ?></span>
            </a>
          <?php else : ?>
            <div></div>
          <?php endif; ?>

          <?php if ($next) : ?>
            <a href="<?php echo esc_url(get_permalink($next)); ?>" class="p-works-single__nav-next">
              <span class="p-works-single__nav-dir">Next →</span>
              <span class="p-works-single__nav-title"><?php echo esc_html(get_the_title($next)); ?></span>
            </a>
          <?php endif; ?>

        </nav>

        <!-- 一覧に戻る -->
        <div class="p-works-single__back">
          <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="c-btn c-btn--secondary">
            制作実績一覧へ戻る
          </a>
        </div>

      </article>

    <?php endwhile; ?>

  </div>

</main>

<?php get_footer(); ?>
