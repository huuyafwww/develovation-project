<?php

// Login-User-Variable-On-SESSION
define("LOGIN_VAR","user");

// Is Login
define(
    "IS_LOGIN",
    isset($_SESSION[LOGIN_VAR])
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

// Root Url
define(
    "HTTP_ROOT_URL",
    "//".HTTP_HOST."/".ROOT_URI
);

// Constant a Request Method Name
define("REQUEST_METHOD",$_SERVER["REQUEST_METHOD"]);

// Is POST
define("IS_POST",REQUEST_METHOD === "POST");

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
    strpos(REQUEST_URI,"api") !== false
);

// Constant a Default time-zone
define("DEFAULT_TIME_ZONE","Asia/Tokyo");

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
