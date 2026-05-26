# 概要
CSSはSCSSを使用して出力しています。  
ここではSCSSに関する情報を記載します。webpackが絡んでくるビルドについては`README.md`を参照してください。

## Post CSS
★まだ書いてない

# ブレイクポイント
ブレイクポイントは下記の表になります。  
scssのソースコードは`src/assets/scss/define/_mediaQuery.scss`にあります。

|  名前（概要） | 略 |  px  |  CSSでの出力  |  注釈  |
| ---- | ---- | ---- | ---- | ---- |
| tablet | ta | <= 744 | `@media (min-width: 744px) {}` | 744pxはi pad mini6 |
| PC | pc | <= 1024 | `@media (min-width: 1024px) {}` |  |
| PC-L | pcl | <= 1440 | `@media (min-width: 1440px) {}` | FigmaのPCデザイン |
| PC-XL | pcxl | <= 1920 | `@media (min-width: 1920px) {}` | full HD |
| SP 360px より小さい | max-spmin | <= 360 以外 | `@media not all and (min-width: 360px) {}` | 320pxなどの対応用 |
| tablet より小さい | max-ta | <= 744 以外 | `@media not all and (min-width: 744px) {}` |  |
| PC より小さい | max-pc | <= 1024 以外 | `@media not all and (min-width: 1024px) {}` |  |
| PC-L より小さい | max-pcl | <= 1440 以外 | `@media not all and (min-width: 1440px) {}` |  |
| PC-XL より小さい | max-pcxl |  <= 1920 以外 | `@media not all and (min-width: 1920px) {}` |  |

- `max-`をつけるとそれ以外。例.`max-tablet` は 744px以上以外（744px未満）
- `max-spmin`は例外として`max-`のみです。

## not all and
未満のウィンドウサイズでレイアウトが崩れないように、`max-width`ではなく`not all and (min-width)`を使用しています。これにより、例えば767.5pxなどの小数点以下の値があっても安定したレイアウトを保つことができます。

また、`not screen and`ではなく`not all and`を使用しているのは、tailwindcssの仕様に従っているためです。

**参考サイト**  
[「未満」を表現！メディアクエリの「not」キーワード | 株式会社LIG(リグ)｜DX支援・システム開発・Web制作](https://liginc.co.jp/576294)

# 命名規則
クラス名にはプレフィックスをつけます。  
WPなどのプラグインで読み込むCSSと命名がかぶらないようにするためです。

| .c- | .l- | .u- |
| ---- | ---- | ---- |
| コンポーネント<br>基本的にこれを使用。 | レイアウト<br>コンポーネント間のマージン等の設定用。 | ユーティリティ<br>詳細は後述。 |
| 例. `.c-componentName` | 例. `.l-componentName` | 例. `.u-mt-0` |

# フォルダ構成
★まだ途中

**base/variable/**
変数

# 記述上のルール
`!important` 設定はユーティリティクラスのみで使用します。他では使用しないでください。

## PC、SP
★まだ書いてない

# ユーティリティクラス
utilsフォルダに格納します。tailwindcss的に記載します。  
`!important` 設定は必須です。  
理由はpostcssのメディアクエリをまとめる機能が原因で優先度が変わるためです。

## ファイル名、クラス名
[tailwindcss](https://tailwindcss.com/) を参考にファイル名、クラス名を設定します。  
例.   
```
.u-hidden { display: none !important; }

.u-mx-auto {
  margin-right: auto !important;
  margin-left: auto  !important;
}
```

# SCSS(Dart Sass)
Dart Sass を使用しています。

## 演算
Dart Sassでは`/`(スラッシュ)のみの除算は非推奨で、将来的にできなくなる模様です。
これからはビルトインモジュールの **sass:math** にある `div()` を使うようにします。

**変更前**
```
.test-class { margin: (16px/2); }
```

**変更後**
```
@use "sass:math";

.test-class { margin: math.div(16px, 2); }
```

sass:mathモジュールは他にも関数があります。
https://sass-lang.com/documentation/modules/math
