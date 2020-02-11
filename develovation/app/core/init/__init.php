<?php

/**
 * Todo-List
 * - コンポーネントパーツのディレクトリ構造最適化
 * - preload（dns-prefetch、preconnect、prefetch、prerender）周りの整備
 * - Pjaxによる非同期通信でページ間の遷移
 * - ページタイトル名（<title>）等のVariable.php
 * - CSRF対策
 * - "__variable.php"周りのロードタイミングと使い方等
 * - javascriptでエラー収集をする
 *      - メッセージ
 *      - First Find Date
 *      - Last Find Date
 *      - カウント
 *      - ユーザー(IPアドレスから)
 *      - ブラウザ（ユーザーエージェント）
 *      - イメージ(https://raygun.com/platform/crash-reporting)
 *      - develovationシステム内にcdn用のjsを配置
 *      - APIとしてdevelovationにPOSTをしてデータベースに保存する
 * - CURD
 *      - Create
 *      - Update
 *      - Read
 *      - Delete
 * - 例外処理
 *      - エラーの制御
 *      - ステータスコードの制御：http_response_code(404);
 * - ORM Wrapper
 */

// This is test
$_SESSION["user"] = true;


// Init Functions File
define(
    "INIT_FUNC_FILE",
    $__init_path."__init_functions.php"
);

// Init Load Define File Path List
define(
    "LOAD_DEFINE_FILES",
    [
        $__init_path."config/__define.php",
        $__init_path."config/__path.php",
        $__init_path."config/__file.php",
        $__init_path."config/__error.php"
    ]
);

// Require Once a "__Loader" Class File
require_once(LOADER_FILE);

// Load a Init Class
new $__init_class($__is_display_error);

// Do Exit
exit;