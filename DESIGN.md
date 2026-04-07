# DESIGN.md — portfolio-mt-tk

> このファイルはポートフォリオサイトのデザイン仕様書です。
> Claude Code などの AI エージェントはページ実装時にこのファイルを参照し、デザインの一貫性を保ってください。
> 実装の中で判断が生じた場合はこのファイルを更新してください。

---

## Overview

- **サイト種別**: 個人ポートフォリオ（松尾赳治）
- **デザインテイスト**: ミニマル・和洋折衷。落ち着いたダークネイビーとアースブラウンを基調とした上品な印象
- **CSS アーキテクチャ**: [FLOCSS](https://github.com/hiloki/flocss)（Foundation / Layout / Object）
- **レスポンシブ設計**: デスクトップファースト。基準解像度 PC = 1440px / SP = 375px
- **Sass 構成**: `@use` による名前空間管理。変数は `foundation/_variables.scss` に集約

---

## Color Palette

| Token | Hex | 用途 |
|-------|-----|------|
| `$color-primary` | `#04384C` | ヘッダー背景・ボタン・見出し・フッター背景 |
| `$color-primary-dark` | `#032A39` | ボタンホバー時 |
| `$color-accent` | `#B07850` | リンク・ラベル・アクセントライン・強調要素 |
| `$color-text` | `#333333` | 本文テキスト |
| `$color-text-light` | `#888888` | 補足情報・メタデータ・日付 |
| `$color-bg` | `#F9F8F5` | ページ全体の背景（クリーム白） |
| `$color-bg-gray` | `#F0EFE9` | セクション区切り背景（グレーベージュ） |
| `$color-border` | `#dddddd` | ボーダー・区切り線 |
| `$color-white` | `#ffffff` | 白 |
| `$color-black` | `#000000` | 黒 |

---

## Typography

### Font Families

| 変数 | フォント | 用途 |
|------|---------|------|
| `$font-primary` | `"Shippori Mincho B1", serif` | 本文・和文全般 |
| `$font-en` | `"Jost", sans-serif` | 英数字・ナビゲーション・ラベル |
| `$font-display` | `"Cormorant Garamond", serif` | 大型見出し（イタリック使用） |

### Base Settings

```scss
$font-size-base:      16px;
$line-height-base:    1.8;
$letter-spacing-base: 0.05em;
```

### Font Size Scale

| 用途 | サイズ |
|------|--------|
| 大見出し (h1相当) | `clamp(2rem, 3.5vw, 3.5rem)` |
| 中見出し (h2相当) | `clamp(2rem, 3.5vw, 2.75rem)` |
| 小見出し (h3相当) | `1.0625rem` |
| ボタン（通常） | `0.9375rem` |
| ボタン（large） | `1rem` |
| ラベル・タグ | `0.75rem` — `0.6875rem` |
| メタ情報・補足 | `0.75rem` |

---

## Spacing & Layout

```scss
$container-max-width: 1200px;
$container-padding:   clamp(16px, 5vw, 40px);  // 動的パディング

$header-height-pc: 80px;
$header-height-sp: 60px;
```

### Section Padding

| コンテキスト | 値 |
|------------|-----|
| メインセクション上下（PC） | `120px` |
| メインセクション上下（SP） | `80px` |
| 中セクション上下 | `60px` |
| 要素間マージン | `8px` — `48px` |
| グリッドギャップ | `20px` — `60px` |

---

## Breakpoints

デスクトップファースト。`max-width` で記述。

```scss
$bp-lg: 1024px;  // タブレット横・狭いPC（多カラム → 1カラム切り替え）
$bp-sm: 768px;   // スマートフォン（余白・フォントサイズ最終調整）
```

---

## Components

### Button (`.c-btn`)

```scss
// base
padding: 12px 32px;
font-size: 0.9375rem;
font-weight: 500;
letter-spacing: 0.05em;
border-radius: 4px;
transition: background-color 0.2s, color 0.2s, opacity 0.2s;

// variants
.c-btn              // primary: bg=$color-primary, text=white
.c-btn--secondary   // secondary: bg=transparent, border=$color-primary
.c-btn--lg          // large: padding=16px 48px, font-size=1rem
```

### Breadcrumb (`.c-breadcrumb`)

- フォントサイズ: `0.75rem`
- フォントファミリー: `$font-en`
- セパレーター: `>`
- ホバー色: `$color-accent`

### Pagination (`.c-pagination`)

- ボタンサイズ: `40px × 40px`
- 現在ページ: `$color-accent` 背景
- `border-radius: 4px`

---

## Animation & Interaction

| 用途 | 値 |
|------|-----|
| ホバートランジション | `0.2s` |
| スライド・フェード | `0.3s` — `0.4s` |
| 画像スケール（ホバー） | `transform: scale(1.05)` |
| オーバーレイ（Works カード） | `opacity: 0 → 1` on hover |

