<?php

$__sidebar_config = 
[
    "home" => [
		"type" => "normal",
		"label" => "ホーム",
		"title" => "ホーム",
		"icon" => "home",
	],
    "tools" => [
        "type" => "parent",
		"label" => "ツール",
		"title" => "ツール",
		"icon" => "tools",
		"child" => [
			"json/encode" => [
				"label" => "Json Encode",
			],
			"json/dencode" => [
				"label" => "Json Decode",
			]
		]
    ]
];