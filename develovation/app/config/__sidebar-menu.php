<?php

$__auth_card_titles =
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
    ]
];