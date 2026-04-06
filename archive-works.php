<?php get_header(); ?>

<main class="l-main">

  <div class="l-container">

    <section class="p-works">

      <div class="p-works__header">
        <span class="p-works__label">Works</span>
        <h1 class="p-works__heading">制作実績</h1>
      </div>

      <?php if (have_posts()) : ?>

        <ul class="p-works__grid">
          <?php while (have_posts()) : the_post(); ?>
            <li class="p-works__item">
              <a href="<?php the_permalink(); ?>" class="p-works__link">

                <div class="p-works__thumb">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'p-works__img', 'loading' => 'lazy']); ?>
                  <?php else : ?>
                    <div class="p-works__img-placeholder"></div>
                  <?php endif; ?>
                  <div class="p-works__overlay">
                    <span class="p-works__overlay-text">View</span>
                  </div>
                </div>

                <div class="p-works__meta">
                  <?php
                  $cats = get_the_terms(get_the_ID(), 'works-cat');
                  if ($cats && !is_wp_error($cats)) : ?>
                    <div class="p-works__tags">
                      <?php foreach ($cats as $cat) : ?>
                        <span class="p-works__tag"><?php echo esc_html($cat->name); ?></span>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                  <h2 class="p-works__title"><?php the_title(); ?></h2>
                  <?php
                  $skills = get_field('works_skills');
                  if ($skills) :
                    $max     = 8;
                    $display = array_slice($skills, 0, $max);
                    $rest    = count($skills) - $max;
                  ?>
                    <ul class="p-works__skills">
                      <?php foreach ($display as $skill) : ?>
                        <li class="p-works__skill"><?php echo esc_html($skill); ?></li>
                      <?php endforeach; ?>
                      <?php if ($rest > 0) : ?>
                        <li class="p-works__skill p-works__skill--more">+<?php echo $rest; ?></li>
                      <?php endif; ?>
                    </ul>
                  <?php endif; ?>
                </div>

              </a>
            </li>
          <?php endwhile; ?>
        </ul>

        <div class="p-works__pagination">
          <?php
          the_posts_pagination([
            'mid_size'  => 2,
            'prev_text' => '←',
            'next_text' => '→',
          ]);
          ?>
        </div>

      <?php else : ?>

        <p class="p-works__empty">現在準備中です。</p>

      <?php endif; ?>

    </section>

  </div>

</main>

<?php get_footer(); ?>
