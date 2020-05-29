<?php

return [
    "auth" => [
        "register" => [
            "user_name",
            "email",
            "password"
        ],
        "login" => [
            "email",
            "password",
            "client_ua"
        ]
    ],
    "dashboard" => [
        "logout" => [
            "logout"
        ],
        "settings" => [
            "user" => [
                "user_name",
                "display_name"
            ]
        ]
    ]
];
