<?php

// ============================================================
// Theme Setup
// ============================================================
function theme_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

  // グローバルナビゲーション
  register_nav_menus([
    'global-nav' => 'グローバルナビゲーション',
    'footer-nav' => 'フッターナビゲーション',
  ]);
}
add_action('after_setup_theme', 'theme_setup');


// ============================================================
// Enqueue Scripts & Styles
// ============================================================
function theme_enqueue() {
  // CSS
  wp_enqueue_style(
    'theme-main',
    get_template_directory_uri() . '/assets/css/style.min.css',
    [],
    filemtime(get_template_directory() . '/assets/css/style.min.css')
  );

  // JS
  wp_enqueue_script(
    'theme-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );

  // スライダーが必要な案件のみ有効化
  // wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  // wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
}
add_action('wp_enqueue_scripts', 'theme_enqueue');


// ============================================================
// Custom Post Types
// ============================================================

// お知らせ（news）
function register_post_type_news() {
  register_post_type('news', [
    'labels' => [
      'name'          => 'お知らせ',
      'singular_name' => 'お知らせ',
      'add_new_item'  => 'お知らせを追加',
      'edit_item'     => 'お知らせを編集',
    ],
    'public'       => true,
    'has_archive'  => true,
    'show_in_rest' => true,
    'menu_icon'    => 'dashicons-megaphone',
    'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite'      => ['slug' => 'news'],
  ]);
}
add_action('init', 'register_post_type_news');

// 実績・事例（works）TODO: 不要な場合は削除
function register_post_type_works() {
  register_post_type('works', [
    'labels' => [
      'name'          => '実績・事例',
      'singular_name' => '実績・事例',
      'add_new_item'  => '実績・事例を追加',
      'edit_item'     => '実績・事例を編集',
    ],
    'public'       => true,
    'has_archive'  => true,
    'show_in_rest' => true,
    'menu_icon'    => 'dashicons-portfolio',
    'supports'     => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite'      => ['slug' => 'works'],
  ]);
}
add_action('init', 'register_post_type_works');


// ============================================================
// Taxonomies
// ============================================================

// お知らせカテゴリー TODO: 不要な場合は削除
function register_taxonomy_news_cat() {
  register_taxonomy('news-cat', 'news', [
    'labels' => [
      'name'          => 'お知らせカテゴリー',
      'singular_name' => 'カテゴリー',
    ],
    'hierarchical'  => true,
    'show_in_rest'  => true,
    'rewrite'       => ['slug' => 'news-cat'],
  ]);
}
add_action('init', 'register_taxonomy_news_cat');

// 実績カテゴリー TODO: 不要な場合は削除
function register_taxonomy_works_cat() {
  register_taxonomy('works-cat', 'works', [
    'labels' => [
      'name'          => '実績カテゴリー',
      'singular_name' => 'カテゴリー',
    ],
    'hierarchical'  => true,
    'show_in_rest'  => true,
    'rewrite'       => ['slug' => 'works-cat'],
  ]);
}
add_action('init', 'register_taxonomy_works_cat');


// ============================================================
// Query Customize
// ============================================================
function theme_pre_get_posts($query) {
  if (is_admin() || !$query->is_main_query()) return;

  if (is_post_type_archive('news') || is_tax('news-cat')) {
    $query->set('posts_per_page', 12);
  }

  if (is_post_type_archive('works') || is_tax('works-cat')) {
    $query->set('posts_per_page', 12);
  }
}
add_action('pre_get_posts', 'theme_pre_get_posts');


// ============================================================
// Utility
// ============================================================

// 抜粋の文字数
function theme_excerpt_length() {
  return 80;
}
add_filter('excerpt_length', 'theme_excerpt_length');

// 抜粋の末尾
function theme_excerpt_more() {
  return '...';
}
add_filter('excerpt_more', 'theme_excerpt_more');
