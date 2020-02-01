<?php

/*
$_SESSION =
[
    "submited" => [
        "status" => true,
        "var" => [
        ]
    ]
]:
*/

echo "<pre>";
print_r(
    [
        "暗号化前のトークン" => __get_session_token(),
        "暗号化後のトークン" => __get_e_session_token(),
        "復号化後のトークン" => openssl_decrypt(
            __get_e_session_token(),
            OPENSSL_METHOD,
            TOKEN_KEY
        )
    ]
);
var_dump(
    __get_session_token() === openssl_decrypt(__get_e_session_token(),OPENSSL_METHOD,TOKEN_KEY)
);
echo "</pre>";