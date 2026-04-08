<?php
/**
 * Template Name: お問い合わせ
 */
get_header();
?>

<main class="l-main">

  <!-- ============================================================ -->
  <!-- ページヘッダー                                               -->
  <!-- ============================================================ -->
  <div class="p-page-header">
    <div class="l-container">
      <span class="p-page-header__label">Contact</span>
      <h1 class="p-page-header__title">お問い合わせ</h1>
    </div>
  </div>

  <!-- ============================================================ -->
  <!-- 本文                                                         -->
  <!-- ============================================================ -->
  <section class="p-contact">
    <div class="p-contact__inner l-container">

      <p class="p-contact__lead">
        お仕事のご依頼・採用に関するお問い合わせは以下のフォームからお気軽にご連絡ください。<br>
        通常2〜3営業日以内にご返信いたします。
      </p>

      <div class="p-contact__form">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
