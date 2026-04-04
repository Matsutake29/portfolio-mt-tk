<?php
// パンくずリスト（構造化データ付き）
// Home > [アーカイブ名] > 現在のページ名 の最大3階層
?>

<nav class="c-breadcrumb" aria-label="パンくずリスト">
  <ol class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">

    <?php // 1階層目: Home ?>
    <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="c-breadcrumb__link" itemprop="item">
        <span itemprop="name">Home</span>
      </a>
      <meta itemprop="position" content="1">
    </li>

    <?php if (is_singular()) : ?>
      <?php
      // カスタム投稿の場合はアーカイブページを2階層目に表示
      $post_type = get_post_type();
      $post_type_obj = get_post_type_object($post_type);
      $archive_link = get_post_type_archive_link($post_type);

      if ($post_type !== 'post' && $post_type !== 'page' && $archive_link) :
      ?>
        <?php // 2階層目: アーカイブページ ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="<?php echo esc_url($archive_link); ?>" class="c-breadcrumb__link" itemprop="item">
            <span itemprop="name"><?php echo esc_html($post_type_obj->labels->name); ?></span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <?php // 3階層目: 現在の記事タイトル ?>
        <li class="c-breadcrumb__item c-breadcrumb__item--current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="c-breadcrumb__current" itemprop="name"><?php the_title(); ?></span>
          <meta itemprop="position" content="3">
        </li>

      <?php else : ?>
        <?php // 固定ページ・通常投稿: 2階層目に現在のページ名 ?>
        <li class="c-breadcrumb__item c-breadcrumb__item--current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="c-breadcrumb__current" itemprop="name"><?php the_title(); ?></span>
          <meta itemprop="position" content="2">
        </li>
      <?php endif; ?>

    <?php elseif (is_post_type_archive()) : ?>
      <?php // アーカイブページ: 2階層目にアーカイブ名 ?>
      <li class="c-breadcrumb__item c-breadcrumb__item--current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span class="c-breadcrumb__current" itemprop="name"><?php post_type_archive_title(); ?></span>
        <meta itemprop="position" content="2">
      </li>

    <?php endif; ?>

  </ol>
</nav>
