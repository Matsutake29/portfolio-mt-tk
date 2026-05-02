# portfolio-mt-tk

松尾赳治（Takeharu Matsuo）のポートフォリオサイト用 自作 WordPress テーマ。
2年間の Web 制作実績を掲載するサイトを支えるカスタムテーマです。

🔗 **Live**: https://portfolio.mt-tk.com

## 設計の特徴

| 項目 | 内容 |
|------|------|
| **CSS 設計** | FLOCSS（Foundation / Layout / Object）|
| **CSS** | SCSS → Live Sass Compiler でビルド（`style.min.css` を本番配布）|
| **JS** | Vanilla JS（フレームワーク非使用）|
| **WordPress** | カスタム投稿タイプ「works」+ ACF（Advanced Custom Fields）|
| **問い合わせ** | Contact Form 7 |
| **メール配送** | WP Mail SMTP + Google Workspace SMTP |
| **画像** | ページ単位フォルダ管理（`assets/img/{page}/`）|
| **構造化データ** | パンくずリストに JSON-LD |
| **アクセシビリティ** | `aria-*` 属性・セマンティックHTML |

## ディレクトリ構成

```
portfolio-mt-tk/
├── style.css                   # WordPress テーマ識別ファイル
├── functions.php               # テーマ機能定義
├── front-page.php              # トップページ
├── page-profile.php            # プロフィール
├── archive-works.php           # 制作実績一覧
├── single-works.php            # 制作実績詳細
├── header.php / footer.php
├── template-parts/
│   ├── breadcrumb.php          # パンくずリスト（構造化データ付き）
│   └── pagination.php
├── acf-json/                   # ACF フィールド定義（同期用 JSON）
├── assets/
│   ├── scss/                   # FLOCSS 構成
│   │   ├── foundation/         # reset / variables / mixins / base
│   │   ├── layout/             # header / footer
│   │   └── object/
│   │       ├── component/      # btn / breadcrumb / pagination
│   │       └── project/        # ページ固有スタイル
│   ├── css/
│   │   └── style.min.css       # コンパイル済み CSS
│   ├── js/main.js
│   └── img/{page}/             # ページ単位の画像
├── DESIGN.md                   # デザイン仕様書（色・フォント・スペーシング）
└── CLAUDE.md                   # AI エージェント向け指示
```

## デザイン仕様書

色・タイポグラフィ・スペーシング・コンポーネント設計の詳細は **[DESIGN.md](./DESIGN.md)** を参照。

## ローカル開発

```bash
# WordPress 環境（Local / MAMP など）の wp-content/themes/ に配置
git clone git@github.com:Matsutake29/portfolio-mt-tk.git portfolio-mt-tk

# SCSS 編集 → Live Sass Compiler で style.min.css を生成
# （.vscode/settings.json に出力先設定済み）
```

## デプロイ

ConoHa WING 上で SSH + GitHub Deploy Key + `git pull` 運用。

```bash
ssh user@server "cd ~/public_html/portfolio.mt-tk.com/wp-content/themes/portfolio-mt-tk/ && git pull"
```

## ライセンス

個人ポートフォリオ用テーマです。学習目的での参考はご自由にどうぞ。
掲載されている制作実績の画像・コンテンツの二次利用はご遠慮ください。

## 作者

Takeharu Matsuo — info@mt-tk.com
