<pre>
<?php

// 配列化から最後のインデックスの値を取得する

$smaple_array = [
    "github",
    "develovation-project",
    "develovation",
    "api",
    "get",
    "ip",
    "fas"
];

$result = array_slice($smaple_array,3);

print_r($result);

echo array_pop($result);

print_r($result);