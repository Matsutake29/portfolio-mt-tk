## プロジェクト概要

FLOCSSベースのカスタム WordPress テーマ。SCSS + Vanilla JS で構築。
案件開始時にこのテンプレートをコピーしてリネームし、`.ai/_project.md` を参照しながら実装する。

追加パーツが必要な場合は `/Webサイト制作 テンプレート/_parts/` から持ってくる。

## ディレクトリ構造

```
wp-theme-flocss-base/
├── .github/
│   └── copilot-instructions.md
├── .vscode/
│   └── settings.json          # Live Sass Compiler設定
├── assets/
│   ├── css/
│   │   └── style.min.css      # コンパイル済みCSS（コミット対象）
│   ├── img/                   # 画像ファイル（ページ別フォルダで管理）
│   │   ├── top/               # トップページの画像
│   │   └── {page}/            # 各ページの画像（ページスラッグ名）
│   ├── js/
│   │   └── main.js
│   └── scss/
│       ├── style.scss         # エントリーポイント
│       ├── foundation/        # reset / variables / mixins / base
│       ├── layout/            # header / footer
│       └── object/
│           ├── component/     # btn / breadcrumb / pagination
│           ├── project/       # ページ固有スタイル
│           └── utility/
├── template-parts/
│   ├── breadcrumb.php         # パンくずリスト（構造化データ付き）
│   └── pagination.php
├── .ai/
│   └── _client.md             # クライアント固有情報（要確認）
├── style.css                  # WordPressテーマ識別ファイル
├── front-page.php
├── header.php
├── footer.php
├── index.php
└── functions.php
```

### 案件に応じて _parts/ から追加するファイル

| ファイル | 用途 |
|---------|------|
| `archive-news.php` | お知らせ一覧 |
| `single-news.php` | お知らせ詳細 |
| `archive-works.php` | 実績一覧 |
| `single-works.php` | 実績詳細 |
| `page-company.php` | 会社概要 |
| `page-contact.php` | お問い合わせ（CF7使用） |

## 画像ファイルの命名規則・配置ルール

### フォルダ構成

- **ページ単位**でフォルダを作成する（セクション単位のフォルダは作らない）
- ファイル名にセクション情報が入るので、フォルダで二重管理しない

```
assets/img/
├── top/        # トップページ
└── {page}/     # 各ページ（スラッグ名をそのまま使う）
```

### ファイル命名規則

**`{ページ}-{セクション}_{名前}.{拡張子}`**

- `{ページ}` と `{セクション}` は `-`（ハイフン）でつなぐ
- `{セクション}` と `{名前}` は `_`（アンダースコア）でつなぐ

```
top-hero_bg.webp          # トップ / hero / 背景
top-works_site01.webp     # トップ / works / 差し替え前提の汎用名
website-hero_bg.webp      # /website/ / hero / 背景
support-plan_img01.webp   # /support/ / plan / 差し替え前提の汎用名
```

### 名前のつけ方

| ケース | 名前の例 | 理由 |
|--------|---------|------|
| 固定素材（差し替えない） | `bg`, `illustration`, `icon` | 役割が明確 |
| 差し替え前提の素材 | `site01`, `img01`, `photo01` | 汎用名にして入れ替えしやすく |
| 固有名詞は避ける | `site01` ◯ / `pet-noyado` △ | 後から内容が変わったときにファイル名と中身がズレる |

### 形式

- 新規追加画像は **WebP** を優先
- SVGはそのままSVG（アイコン・ロゴ等）

### PHPでの記述例

```php
<img
  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/top/top-hero_bg.webp"
  alt=""
  width="1440"
  height="800"
  loading="lazy"
>
```

## SCSS設計（FLOCSS）

### エントリーポイント

`assets/scss/style.scss` → コンパイル先: `assets/css/style.min.css`（Live Sass Compiler使用）

### 構成

```
foundation/
  _reset.scss       # リセットCSS
  _variables.scss   # 変数定義（案件ごとに変更）
  _mixins.scss      # mixin定義
  _base.scss        # 基本スタイル・共通レイアウト

layout/
  _header.scss      # .l-header / .l-sp-nav
  _footer.scss      # .l-footer

object/
  component/        # .c-* 汎用部品
  project/          # .p-* ページ固有（ページ別フォルダで管理）
    top/            # トップページ用
      _index.scss   # @forwardまとめ
      _hero.scss
      _...scss
    website/        # HP制作詳細ページ用（例）
      _index.scss
    contact/        # お問い合わせページ用（例）
      _index.scss
  utility/          # .u-* ユーティリティ
```

**style.scssでのページ別読み込み：**
```scss
// Object / Project（ページごとに1行追加）
@use 'object/project/top' as *;
@use 'object/project/website' as *;
@use 'object/project/contact' as *;
```

### クラス命名規則（BEM + FLOCSS）

```
.l-  → Layout（例: .l-header, .l-container）
.p-  → Project・ページ固有（例: .p-top-hero, .p-website-mv）
.c-  → Component・汎用部品（例: .c-btn, .c-breadcrumb）
.u-  → Utility（例: .u-hidden）
```

要素: `__`、モディファイア: `--`、状態: `is-` で表現

**Projectクラスの命名規則：`p-{ページ名}-{セクション名}__{要素}`**

```
p-top-hero__title        # トップページ > Heroセクション > タイトル
p-top-reasons__card      # トップページ > 選ばれる理由 > カード
p-website-mv__title      # HP制作ページ > メインビジュアル > タイトル
p-contact-form__input    # お問い合わせ > フォーム > 入力欄
```

- ページが1つしかなくても必ずページ名を入れる（将来の拡張・衝突防止）
- ページ名は短いスラッグで（top / website / support / contact 等）

### 変数（_variables.scss）

案件開始時に変更する。詳細は `assets/scss/foundation/_variables.scss` を参照。

主な変数名:

```scss
// カラー（案件ごとに変更）
$color-primary / $color-secondary / $color-accent
$color-text / $color-text-light
$color-bg / $color-bg-gray / $color-border
$color-white / $color-black

// タイポグラフィ（案件ごとに変更）
$font-primary / $font-en
$font-size-base / $line-height-base / $letter-spacing-base

// ブレークポイント
$breakpoints: ("sm": 480px, "md": 768px, "lg": 1024px, "xl": 1280px)

// レイアウト
$container-max-width / $container-padding
$header-height-pc / $header-height-sp
```

### Mixin（_mixins.scss）

```scss
// レスポンシブ（モバイルファースト）
@include m.mq(md) { ... }   // min-width: 768px
@include m.mq(lg) { ... }   // min-width: 1024px

// ホバー（PCのみ適用）
@include m.hover { opacity: 0.7; }
```

### SCSSの書き方

```scss
@use "../foundation/variables" as v;
@use "../foundation/mixins" as m;

// ※ @use のパスはファイルの位置に応じて調整する
//   layout/ や object/ からは "../foundation/..."
//   foundation/ 内では "variables" のみ

.p-archive {
  // SPスタイル（モバイルファースト）

  @include m.mq(md) {
    // PCスタイル
  }
}

// クラス名はフルで記述する（&__ による省略ネスト禁止）
// Projectクラスは p-{ページ名}-{セクション名}__{要素} の形式で命名
.p-top-hero__title { ... }
.p-top-reasons__card { ... }
```

### クラス名のネスト禁止ルール（重要）

**クラス名は必ずフルで記述する。`&__xxx` による省略ネストは禁止。**

理由: `&__card` のように省略して書くと、エディタでクラス名検索したときにヒットしない。
保守性・可読性を担保するためにフルクラス名で記述する。

```scss
// ❌ NG: クラス名の省略ネスト
.p-reasons {
  &__card { ... }        // 検索で ".p-reasons__card" がヒットしない
  &__card-title { ... }
}

// ✅ OK: クラス名をフルで記述
.p-reasons__card { ... }
.p-reasons__card-title { ... }

// ✅ OK: メディアクエリ・擬似クラスのネストはOK
.p-reasons__card {
  width: 100%;

  @include m.mq(md) {   // メディアクエリはネストしてよい
    width: calc(100% / 3);
  }

  &:hover { ... }       // 擬似クラス・擬似要素はネストしてよい
  &.is-active { ... }   // 状態クラスはネストしてよい
}
```

## テンプレート構造

### 基本パターン

```php
<?php get_header(); ?>

<main class="l-main">
  <div class="l-container">
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!-- コンテンツ -->
  </div>
</main>

<?php get_footer(); ?>
```

### カスタム投稿タイプ

| 投稿タイプ | スラッグ | タクソノミー |
|-----------|---------|------------|
| お知らせ | `news` | `news-cat` |
| 実績・事例 | `works` | `works-cat` |

## JavaScript（main.js）

### 実装済み

- **ハンバーガーメニュー**: `lg`（1024px）未満でSPナビを表示
  - `.l-header__hamburger` の `aria-expanded` を切り替え
  - `.l-sp-nav` に `is-open` クラスを付与/除去
  - `body` に `is-nav-open` クラスを付与/除去（スクロールロック用）
- **ヘッダースクロール制御**: コメントアウト済み。スクロール時に `.l-header` へ `is-scrolled` を付与したい場合に有効化

### 追加ルール

- jQuery を使う場合はCDNから読み込む
- スライダーはSwiperを使用（`functions.php` のコメントを外して有効化）

## WordPress設定（functions.php）

- テーマサポート: アイキャッチ画像、タイトルタグ
- ナビゲーション: `global-nav`（グローバル）、`footer-nav`（フッター）
- CSS/JS: `wp_enqueue_style/script` で登録（バージョンは `filemtime` で自動更新）
- Swiper: コメントアウト済み → 使う案件で有効化
- 抜粋: 80文字、末尾 `...`

## プラグイン

- **ACF**（Advanced Custom Fields）: カスタムフィールド管理（無料版の範囲で使用）
- **Custom Post Type UI**: カスタム投稿タイプ・タクソノミーをGUIで管理
- **Contact Form 7**: お問い合わせフォーム

## コーディング規約

### PHP

- インデント: スペース2つ
- ファイル末尾の `?>` は記述しない（セキュリティ上推奨）
- 出力は必ずエスケープ処理:

```php
echo esc_html($text);    // テキスト出力
echo esc_url($url);      // URL出力
echo esc_attr($attr);    // 属性値出力
```

- 画像:

```php
<img
  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/xxx.jpg"
  alt="<?php echo esc_attr($alt); ?>"
  width="800"
  height="600"
  loading="lazy"
>
```

- CF7ショートコード:

```php
<?php echo do_shortcode('[contact-form-7 id="TODO" title="お問い合わせ"]'); ?>
```

- ループ:

```php
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <!-- コンテンツ -->
  <?php endwhile; ?>
<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>
```

- タクソノミー取得:

```php
$terms = get_the_terms(get_the_ID(), 'news-cat');
if ($terms && !is_wp_error($terms)) :
  foreach ($terms as $term) :
    echo esc_html($term->name);
  endforeach;
endif;
```

### SCSS

- インデント: スペース2つ
- モバイルファーストで記述（`@include m.mq()` でPC上書き）
- カラー・フォントはハードコードせず `_variables.scss` の変数を使う

## 注意事項

- コーディング開始前に `.ai/_project.md` を確認する
- コンパイル済みCSS（`style.min.css`）はGit管理対象（Live Sass Compilerで生成）
- 本番公開前に `noindex` メタタグを削除する
