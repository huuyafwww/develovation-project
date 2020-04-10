<?php

/**
 * PDO-Testing-1
 */

$query = "INSERT INTO asp_api(".implode(",",$name).") VALUES('".implode("','",$data)."')";

// DataBaseへ接続
$pdo = new PDO(
    "mysql:dbname=dbName;host=localhost;charset=utf8mb4",
    "userName",
    "passWord",
    [
        PDO::ATTR_PERSISTENT => true
    ]
);

/**
 * プリペアドステートメントというエミュレーション機能をPDO側で利用するか
 * => パフォーマンスの最適化に繋がる
 * => 但し、明示的なキャストで値を挿入する必要がある
 * 
 * @example (int)$number
 */
$pdo->setAttribute(
    PDO::ATTR_EMULATE_PREPARES,
    true
);

// execute => "クエリの組み立て準備"
$sql = $pdo->prepare(
    "SELECT * FROM user 
    WHERE id=:idValue 
    AND password=:passWordValue"
);

// execute => "実行"
// コロン（：）は省略可能
$sql->execute(
    [
        ":idValue" => 2, // id=2
        ":passWordValue" => "1234" // password="1234"
    ]
);

// SELECT * FROM user WHERE id=2 AND password='1234';

// fetch => "実行結果の取得"
$data　= $sql->fetch();

/**
 * /PDO-Testing-1
 */


/**
 * PDO-Testing-2
 */

// DataBaseへ接続
$pdo = new PDO(
    "mysql:dbname=dbName;host=localhost;charset=utf8mb4",
    "userName",
    "passWord",
    [
        PDO::ATTR_PERSISTENT => true
    ]
);

/**
 * プリペアドステートメントというエミュレーション機能をPDO側で利用するか
 * => パフォーマンスの最適化に繋がる
 * => 但し、明示的なキャストで値を挿入する必要がある
 * 
 * @example (int)$number
 */
$pdo->setAttribute(
    PDO::ATTR_EMULATE_PREPARES,
    true
);


// execute => "クエリの組み立て準備"
$sql = $pdo->prepare(
    "SELECT * FROM user 
    WHERE id=? 
    AND password=?"
);

// execute => "実行"
$sql->execute(
    [
        2, // id=2
        "1234" // password="1234"
    ]
);

// SELECT * FROM user WHERE id=2 AND password='1234';

// fetch => "実行結果の取得"
$data = $sql->fetch();

/**
 * /PDO-Testing-2
 */