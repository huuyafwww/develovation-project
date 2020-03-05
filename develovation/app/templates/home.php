<?php

class_alias(Illuminate\Database\Capsule\Manager::class,"DB");

# DB設定
$database = new DB();


// 接続情報
$config = [
    "driver" => 'mysql',
    "host" => DB_HOST,
    "database" => DB_NAME,
    "username" => DB_USER,
    "password" => DB_PASSWORD,
    "charset" => 'utf8mb4',
    "collation" => 'utf8mb4_general_ci',
];

// コネクションを追加
$database->addConnection($config);

// グローバルで(staticで)利用できるようにする宣言
$database->setAsGlobal();

// Eloquentを有効にする
$database->bootEloquent();

$city = json_decode(DB::table("city")->get());

echo "<pre>";
print_r($city);
echo "</pre>";

echo $city[0]->Name;