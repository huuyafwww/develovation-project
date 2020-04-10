# ブラウザ上で開発を行う分散プラットフォーム

## 言語

- PHP
- MySQL
- HTML
- CSS
- Javascript

### フレームワーク

- PHPフレームワーク（開発中）
- jQuery

### その他

- テンプレートエンジン（開発中）
- [【stisla】Free Bootstrap Admin Template](https://getstisla.com/)
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)
- [illuminate/database](https://github.com/illuminate/database)

##  機能として

- ライブシェア（仮案としてURL発行）
- Trelloのようなボード機能
- プロジェクトユーザーの管理機能
- プロジェクト内でチームを作成する
- チーム毎に各種ディレクトリやファイルのアクセス権限を変更する
- コードにコメント機能（○行目ホバーで）
- チーム毎にチャットルーム
- GitHubのようなissues空間
- 保存時にチームリーダーがリクエストの承認を行うまではテンポラリなファイルとして保持する
- ツリー表示（[イメージ](https://www.bootstrapdash.com/demo/connect-plus/jquery/template/demo_1/pages/ui-features/treeview.html)）
- ファイルの新規作成、ファイル名変更、ファイルの削除
- ディレクトリの作成、ディレクトリ名変更、ディレクトリの削除
- 通知機能
- リアルタイムオンライン状況（ライブシェアルーム内で編集中のファイル）
- ライブシェア内で各ユーザーの現在開いているタブの一覧（ファイル名）
- Googleドキュメントのようなリアルタイム編集状況をリアルタイムで確認出来る
- 各言語のサジェスト機能
- プラグイン開発が可能なプロジェクトとして
- フルスクリーンモード
- フォルダ内検索・置換
- ファイル内検索・置換
- Diff（単体ファイル・ディレクトリ）
- タブ
- プレビュー（マークダウン、PHP、画像、CSV・エクセルを表に、フォントファイルサンプルテキスト）
- コンポーネントパーツディレクトリの構造最適化
- preload(dns-prefetch、preconnect、prefetch、prerender)周りの整備
- Pjaxによる非同期通信でページ間の遷移
- ページタイトル名（`<title>`）等のVariable.php
- CSRF対策
- "__variable.php"周りのロードタイミングと使い方等
- javascriptでエラーを収集する
    - エラーメッセージ
    - First Find Date
    - Last Find Date
    - カウント
    - ユーザー(IPアドレスから)
    - ブラウザ（ユーザーエージェントから）
    - イメージ(https://raygun.com/platform/crash-reporting)
    - develovationシステム内にトラッキングを行う専用のjsを配置
    - APIとしてdevelovationにPOSTをしてデータベースに保存する
- CURD（API）
    - Create
    - Update
    - Read
    - Delete
- 例外処理
    - エラーの制御
    - ステータスコードの制御：http_response_code(404);
- OR Mapperの整備

## 修正として

- titleタグやsidebarのactiveクラスの判定
- 404ページのルーティング
    - auth（ログイン前）のページで404の場合は、login.phpにリダイレクトする
    - __Routerの__auth_check周り
- "app/config"（Viewの設定ファイル）のファイルdefine周り

### ルーティング

```
ルートURL。

http://localhost:8888/github/develovation-project/develovation/
```

```
例①：ログイン後（dashboard）

ルートURL/tools/json/encode/

※ログイン前はauth
```

```
~
```

は、

- models（モデル）
- templates（ビュー）
- controllers（コントローラー）

を表す。

#### 現状

例①へのアクセスが有った場合、

```
app/~/dashboard/encode.php
```

を参照している。


#### 改善策

ルーティングによって下記のような処理を施したい

```php

$roots = [
    "uri" => [
        "tools",
        "json",
    ],
    "page" => "encode"
];

```

そして参照するのは、

```
app/~/dashboard/tools/json/encode.php
```

としたい。
