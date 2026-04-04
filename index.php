<?php get_header(); ?>

<main class="l-main">
  <div class="l-container">

    <?php if (have_posts()) : ?>
      <div class="p-archive">
        <?php while (have_posts()) : the_post(); ?>
          <article class="p-archive__item">
            <a href="<?php the_permalink(); ?>" class="p-archive__link">
              <?php if (has_post_thumbnail()) : ?>
                <div class="p-archive__thumb">
                  <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
                </div>
              <?php endif; ?>
              <div class="p-archive__body">
                <time class="p-archive__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y.m.d'); ?>
                </time>
                <h2 class="p-archive__title"><?php the_title(); ?></h2>
              </div>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
      <?php get_template_part('template-parts/pagination'); ?>
    <?php else : ?>
      <p>投稿がありません。</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
