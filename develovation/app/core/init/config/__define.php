<?php

// Constant a Request Uri
define("REQUEST_URI",$_SERVER["REQUEST_URI"]);

// Is POST
define("IS_POST",$_SERVER["REQUEST_METHOD"] === "POST");

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

// Login-User-Variable-On-SESSION
define("LOGIN_VAR","user");

// Is Login
define(
    "IS_LOGIN",
    isset($_SESSION[LOGIN_VAR])
);

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

/**
 * PATH Constant
 */

define("ROOT_PATH",__DIR__."/../../../../");

/* Directly-Root-DIR-Constant */
define("APP_PATH",ROOT_PATH."app/");
define("LOG_PATH",ROOT_PATH."log/");
/* /Directly-Root-DIR-Constant */

/* Directly-App-DIR-Constant */
define("API_PATH",APP_PATH."api/");
define(
    "ASSETS_PATH",
    pathinfo($_SERVER["SCRIPT_NAME"])["dirname"]."/app/assets/"
);
define("COMPONENTS_PATH",APP_PATH."components/");
define("CONTROLLERS_PATH",APP_PATH."controllers/");
define("CORE_PATH",APP_PATH."core/");
define("INCLUDES_PATH",APP_PATH."includes/");
define("MODELS_PATH",APP_PATH."models/");
define("TEMPLATES_PATH",APP_PATH."templates/");
define("VIEWS_PATH",APP_PATH."views/");
/* /Directly-App-DIR-Constant */

/* Assets-App-Dir-Constant */
define("ASSETS_APP_PATH",ASSETS_PATH."app/");
define("APP_CSS_PATH",ASSETS_APP_PATH."css/");
define("APP_JS_PATH",ASSETS_APP_PATH."js/");
define("APP_IMG_PATH",ASSETS_APP_PATH."img/");
/* /Assets-App-Dir-Constant */

/* Assets-Lib-Dir-Constant */
define("ASSETS_LIB_PATH",ASSETS_PATH."lib/");
define("LIB_CSS_PATH",ASSETS_LIB_PATH."css/");
define("LIB_JS_PATH",ASSETS_LIB_PATH."js/");
define("LIB_IMG_PATH",ASSETS_LIB_PATH."img/");
/* /Assets-Lib-Dir-Constant */

/* Core-Dir-Constant */
define("INIT_PATH",CORE_PATH."init/");
define("CLASS_PATH",INIT_PATH."class/");
define("CONFIG_PATH",INIT_PATH."config/");
define("HELPER_PATH",INIT_PATH."helper/");
/* /Core-Dir-Constant */

/* Inc-Dir-Constant */
define("FOOT_PATH",INCLUDES_PATH."foot/");
define("HEAD_PATH",INCLUDES_PATH."head/");
/* /Inc-Dir-Constant */

/**
 * /PATH Constant
 */


/**
 * FILE Constant
 */

// Now Request File
define(
    "NOW_REQUEST_FILE",
    basename(
        $_SERVER[
            isset($_SERVER["REDIRECT_URL"]) ?
            "REDIRECT_URL" :
            "SCRIPT_FILENAME"
        ]
    )
);

define(
    "NOW_REQUEST_FILE_NAME",
    basename(
        NOW_REQUEST_FILE,
        ".php"
    )
);

define(
    "CLASS_SLUG",
    strtoupper(
        NOW_REQUEST_FILE_NAME[0]
    ).
    substr(
        NOW_REQUEST_FILE_NAME,
        1
    )
);

// Base File
define(
    "BASE_FILE",
    IS_LOGIN ?
    "logined.php" :
    "not-logined.php"
);

// Init Functions
define("INIT_FUNC_FILE",INIT_PATH."__init_functions.php");

// Is 404
define(
    "IS_404",
    !file_exists(TEMPLATES_PATH.NOW_REQUEST_FILE)
);

// Model File
define(
    "MODEL_FILE",
    !IS_404 ?
    MODELS_PATH.NOW_REQUEST_FILE :
    MODELS_PATH."404.php"
);

define(
    "MODEL_CLASS",
    PREFIX.
    "M_".
    CLASS_SLUG
);

// Controller File
define(
    "CONTROLLER_FILE",
    !IS_404 ?
    CONTROLLERS_PATH.NOW_REQUEST_FILE :
    CONTROLLERS_PATH."404.php"
);

define(
    "CONTROLLER_CLASS",
    PREFIX.
    "C_".
    CLASS_SLUG
);

// View File
define("VIEW_FILE",VIEWS_PATH.BASE_FILE);

// Template File
define(
    "TEMPLATE_FILE",
    !IS_404 ?
    TEMPLATES_PATH.NOW_REQUEST_FILE :
    TEMPLATES_PATH."404.php"
);

// 404 View File
define("E_404_FILE",TEMPLATES_PATH."404.php");

// Base "head" File
define("BASE_HEAD_FILE",INCLUDES_PATH."head.php");

// Now "head" File
define("HEAD_FILE",HEAD_PATH.NOW_REQUEST_FILE);

// Base "foot-script" File
define("BASE_FOOT_FILE",INCLUDES_PATH."footer-script.php");

// Now "footer-Script" File
define("FOOT_FILE",FOOT_PATH.NOW_REQUEST_FILE);

/**
 * /FILE Constant
 */


/**
 * ERROR Constant
 */

// Error Log Output Location
define("ERROR_LOG_FILE",LOG_PATH."error.log");

// Error Handle Function Name
define("ERROR_HANDLE_FUNC_NAME","__error_handler");

// Output Error Log Function Name
define("ERROR_LOGGER_FUNC_NAME","__error_logger");

// Type Of Error To Catch
define("CATCH_ERROR",E_ALL);

// Description by Error Level
define("ERROR_LEVEL_1","Error");
define("ERROR_LEVEL_2","Warning");
define("ERROR_LEVEL_4","Parsing Error");
define("ERROR_LEVEL_8","Notice");
define("ERROR_LEVEL_16","Core Error");
define("ERROR_LEVEL_32","Core Warning");
define("ERROR_LEVEL_64","Compile Error");
define("ERROR_LEVEL_128","Compile Warning");
define("ERROR_LEVEL_256","User Error");
define("ERROR_LEVEL_512","User Warning");
define("ERROR_LEVEL_1024","User Notice");
define("ERROR_LEVEL_2048","Runtime Notic");

/**
 * /ERROR Constant
 */