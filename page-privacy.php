<?php
/**
 * Template Name: プライバシーポリシー
 */
get_header();
?>

<main class="l-main">

  <!-- ============================================================ -->
  <!-- ページヘッダー                                               -->
  <!-- ============================================================ -->
  <div class="p-page-header">
    <div class="l-container">
      <span class="p-page-header__label">Privacy Policy</span>
      <h1 class="p-page-header__title">プライバシーポリシー</h1>
    </div>
  </div>

  <!-- ============================================================ -->
  <!-- 本文                                                         -->
  <!-- ============================================================ -->
  <section class="p-privacy">
    <div class="p-privacy__inner l-container">
      <?php while (have_posts()) : the_post(); ?>
        <div class="p-privacy__content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
