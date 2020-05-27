<?php

$__sidebar_config =
[
    "home" => [
		"type" => "normal",
		"label" => "ホーム",
        "icon" => "home",
        "href" => "home"
	],
    "tools" => [
        "type" => "parent",
		"label" => "ツール",
		"icon" => "tools",
		"child" => [
			"/json/encode" => [
                "label" => "Json Encode",
			],
			"/json/decode" => [
                "label" => "Json Decode"
			]
		]
    ],
    "settings" => [
        "type" => "normal",
        "label" => "設定",
        "icon" => "cog",
        "href" => "settings"
    ]
];