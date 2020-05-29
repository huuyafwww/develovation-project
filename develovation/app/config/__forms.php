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
            "password"
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
