# 概要
BootstrapをベースにしたシンプルなWordpressのテーマファイル、静的HTML付き

# ファイル構成

## Wordpressテーマ

	/dev/wp/wp-content/themes/bootstrap
	├─ assets/.............. 共通ファイル（css,js,font）
	├─ footer.php........... インクルード用フッター
	├─ functions.php........ メニュー機能のみ記載
	├─ header-1.php......... インクルード用ヘッダー1（Header1）
	├─ header-2.php......... インクルード用ヘッダー2（Header2）
	├─ header-3.php......... インクルード用ヘッダー3（Header3）
	├─ header.php........... インクルード用<body>までのソース
	├─ index.php............ Wordpressベースのページ
	├─ page-allparts.php.... 固定ページテンプレート（Bootstrap全パーツ）
	├─ page-header-1.php.... 固定ページテンプレート（Header1+本文）
	├─ page-header-2.php.... 固定ページテンプレート（Header2+本文）
	├─ page-header-3.php.... 固定ページテンプレート（Header3+本文）
	├─ page-single.php...... 固定ページテンプレート（Header1+シングルカラムサンプル）
	├─ page-multi.php....... 固定ページテンプレート（Header2+マルチカラムサンプル）
	├─ page-masonry.php..... 固定ページテンプレート（Header3+カード型レイアウトサンプル）
	├─ searchform.php....... インクルード用検索ボックス
	└─ style.css............ WordpressベースのCSS

## 静的ファイル

	/static
	├─ assets/.............. 共通ファイル（css,js,font）
	├─ index.html........... 静的ページインデックス
	├─ page-allparts.html... Bootstrap全パーツ
	├─ page-single.html..... Header1+シングルカラムサンプル
	├─ page-multi.html...... Header2+マルチカラムサンプル
	└─ page-masonry.html.... Header3+カード型レイアウトサンプル

### 静的ファイル確認用URL
- [Header1+シングルカラムサンプル](http://kotaro-co.github.io/bootstrap-wp-template/static/page-single.html)
- [Header2+マルチカラムサンプル](http://kotaro-co.github.io/bootstrap-wp-template/static/page-multi.html)
- [Header3+カード型レイアウトサンプル](http://kotaro-co.github.io/bootstrap-wp-template/static/page-masonry.html)