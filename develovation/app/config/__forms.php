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
        "tools" => [
            "system" => [
                "backup" => [
                    "user_id",
                    "time"
                ]
            ]
        ],
        "settings" => [
            "user" => [
                "user_name",
                "display_name"
            ],
            "backup" => [
                "is_backup",
                // "target_path",
                "max_count",
                "is_backup_sql"
            ]
        ]
    ]
];
