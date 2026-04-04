<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- TODO: Google Fonts のURLを案件ごとに変更 -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=..." rel="stylesheet"> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header class="l-header">
    <div class="l-header__inner">

      <h1 class="l-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-link">
          <!-- TODO: ロゴ画像のパスとalt・サイズを変更 -->
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg"
            alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
            width="200"
            height="40"
            loading="eager"
          >
        </a>
      </h1>

      <nav class="l-header__nav" aria-label="グローバルナビゲーション">
        <!-- TODO: ナビゲーション項目を _client.md を参照して変更 -->
        <ul class="l-header__nav-list">
          <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__nav-link<?php echo is_front_page() ? ' is-active' : ''; ?>">Home</a>
          </li>
          <!-- TODO: 以下のナビ項目を案件のページ構成に合わせて追加・変更・削除 -->
          <!-- 固定ページの例 -->
          <!-- <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('ページスラッグ/')); ?>" class="l-header__nav-link<?php echo is_page('ページスラッグ') ? ' is-active' : ''; ?>">ページ名</a>
          </li> -->
          <!-- カスタム投稿タイプの例 -->
          <!-- <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('投稿タイプスラッグ/')); ?>" class="l-header__nav-link<?php echo is_post_type_archive('投稿タイプスラッグ') ? ' is-active' : ''; ?>">ページ名</a>
          </li> -->
        </ul>
      </nav>

      <div class="l-header__cta">
        <!-- TODO: CTAボタンのリンク先とテキストを変更 -->
        <a href="<?php echo esc_url(home_url('contact/')); ?>" class="l-header__cta-btn c-btn">
          お問い合わせ
        </a>
      </div>

      <!-- ハンバーガーボタン -->
      <button class="l-header__hamburger" aria-label="メニューを開く" aria-expanded="false" aria-controls="sp-nav">
        <span class="l-header__hamburger-bar"></span>
        <span class="l-header__hamburger-bar"></span>
        <span class="l-header__hamburger-bar"></span>
      </button>

    </div>

    <!-- SPナビゲーション -->
    <nav class="l-sp-nav" id="sp-nav" aria-label="モバイルナビゲーション" aria-hidden="true">
      <ul class="l-sp-nav__list">
        <li class="l-sp-nav__item">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-sp-nav__link<?php echo is_front_page() ? ' is-active' : ''; ?>">Home</a>
        </li>
        <!-- TODO: PCナビと同じ項目を追加・変更・削除 -->
        <!-- 固定ページの例 -->
        <!-- <li class="l-sp-nav__item">
          <a href="<?php echo esc_url(home_url('ページスラッグ/')); ?>" class="l-sp-nav__link<?php echo is_page('ページスラッグ') ? ' is-active' : ''; ?>">ページ名</a>
        </li> -->
        <!-- カスタム投稿タイプの例 -->
        <!-- <li class="l-sp-nav__item">
          <a href="<?php echo esc_url(home_url('投稿タイプスラッグ/')); ?>" class="l-sp-nav__link<?php echo is_post_type_archive('投稿タイプスラッグ') ? ' is-active' : ''; ?>">ページ名</a>
        </li> -->
      </ul>
    </nav>

  </header>
