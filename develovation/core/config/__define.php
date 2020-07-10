<?php

// Operating System
define(
    "OS",
    PHP_OS
);

// Is Windows OS
define(
    "IS_WINDOWS_OS",
    __is_strpos(
        OS,
        "WIN"
    )
);

// User Agent
define(
    "USER_AGENT",
    $_SERVER["HTTP_USER_AGENT"]
);

// Login User Variable on SESSION
define("LOGIN_VAR",$_ENV["LOGIN_VAR"]);

// Is Login
define(
    "IS_LOGIN",
    isset($_SESSION[LOGIN_VAR])
);

// Base Directory
define(
    "BASE_DIR_NAME",
    IS_LOGIN ?
    "dashboard" :
    "auth"
);

// Is SSL
define(
    "IS_SSL",
    __is_ssl()
);

// Constant a Http Host
define("HTTP_HOST",$_SERVER["HTTP_HOST"]);

// Constant a Request Uri
define("REQUEST_URI",$_SERVER["REQUEST_URI"]);

// Constant a Now Uri
define("NOW_URI",HTTP_HOST.REQUEST_URI);

// Constant a Script Name
define("SCRIPT_NAME",$_SERVER["SCRIPT_NAME"]);

// Root Uri
define(
    "ROOT_URI",
    pathinfo(SCRIPT_NAME)["dirname"].
    "/"
);

// Api Uri
define(
    "API_URI",
    ROOT_URI."api/"
);

// HTTP Root Url
define(
    "HTTP_ROOT_URL",
    "http".
    (
        IS_SSL
        ? "s"
        : ""
    ).
    "://".HTTP_HOST.ROOT_URI
);

// Constant a Request Method Name
define("REQUEST_METHOD",$_SERVER["REQUEST_METHOD"]);

// Is POST
define("IS_POST",REQUEST_METHOD === "POST");

// Is GET
define("IS_GET",REQUEST_METHOD === "GET");

// Is Ajax
define(
    "IS_AJAX",
    isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    AND
    $_SERVER['HTTP_X_REQUESTED_WITH'] === "XMLHttpRequest"
);

// Is Api
define(
    "IS_API",
    strpos(
        REQUEST_URI,
        API_URI
    ) !== false
);

// Route Web Uri
define(
    "ROUTE_URI",
    IS_API ?
    str_replace(
        API_URI,
        "",
        parse_url(
            REQUEST_URI,
            PHP_URL_PATH
        )
    ) :
    str_replace(
        ROOT_URI,
        "",
        REQUEST_URI
    )
);

// Route Api Uri Array
define(
    "ROUTE_URI_ARRAY",
    __empty_index_delete(
        explode(
            "/",
            (
                !IS_API
                ? BASE_DIR_NAME."/"
                : ""
            )
            .ROUTE_URI
        )
    )
);

// Constant a Default time-zone
define("DEFAULT_TIME_ZONE",$_ENV["DEFAULT_TIME_ZONE"]);

// Default is "PHPSESSID"
define("SESSION_NAME",session_name());

// Constant a session_id()
define("SESSION_ID",session_id());

// Constant a Session-Token-Key-Name
define("SESSION_TOKEN_NAME","csrf_token");

// Constant a Encrypt-Session-Token-Key-Name
define("SESSION_E_TOKEN_NAME","e_csrf_token");

// Constant a Token-Length
define("TOKEN_LENGTH",32);

// Constant a Unique-Token
define(
    "TOKEN",
    uniqid(
        bin2hex(
            random_bytes(TOKEN_LENGTH)
        )
    )
);

// Constant a Token-Key
define(
    "TOKEN_KEY",
    "ea6315e329b46beade521569107bc2abcd966aef0cd40ffda59f463eafa303a85e314045561a6"
);

// Constant a Openssl-Method
define("OPENSSL_METHOD","AES-256-ECB");

// Constant a Password Hash Method
define("PASSWORD_HASH_METHOD",PASSWORD_DEFAULT);

// Prefix
define("PREFIX","__");

// TimeStamp
define("TIME",$_SERVER["REQUEST_TIME"]);

// IP Address
define("IP_ADDRESS",$_SERVER["REMOTE_ADDR"]);

// Constant a HTTP Referer
define(
    "HTTP_REFERER",
    @$_SERVER["HTTP_REFERER"] ?: ""
);

// Class Slug Constant Name
define(
    "CLASS_SLUGS",
    [
        "MODEL_CLASS" => "M_",
        "CONTROLLER_CLASS" => "C_",
    ]
);