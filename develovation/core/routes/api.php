<?php

$__routes =
[
    "get" => [
        "ip" => [
            "name" => "__Ip",
            "slug" => "__Get_Ip",
            "method" => "IS_POST",
            "is_ajax" => true,
            "params" => [
            ]
        ],
        "token" => [
            "name" => "__Token",
            "slug" => "__Get_Token",
            "method" => "IS_POST",
            "is_ajax" => true,
            "params" => [
                "temp_token"
            ]
        ]
    ],
    "create" => [
        "backup" => [
            "name" => "__Backup",
            "slug" => "__Create_Backup",
            "method" => "IS_POST",
            "is_ajax" => true,
            "params" => [
                "user_id"
            ]
        ],
    ]
];