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
  <div class="c-subpage-header">
    <div class="l-container">
      <span class="c-subpage-header__label">Contact</span>
      <h1 class="c-subpage-header__title">お問い合わせ</h1>
    </div>
  </div>

  <!-- ============================================================ -->
  <!-- 本文                                                         -->
  <!-- ============================================================ -->
  <section class="p-contact">
    <div class="p-contact__inner l-container">

      <p class="p-contact__lead">
        Web制作のご依頼・ご相談はこちらから。<br class="u-pc-only">お気軽にご連絡ください。<br>
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
