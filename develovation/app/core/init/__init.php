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

//This is a Temporary Page Name
$page_name = "home";

// Require Once a "__Loader" Class File
require_once(__DIR__."/class/__Loader.php");

// Load a Default All Settings
new __Loader($is_display_error);

// Do Exit
exit;