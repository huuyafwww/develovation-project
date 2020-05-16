<?php

/**
 * FILE Constant
 */

define(
    "LIB_AUTOLOAD_FILE",
    CORE_LIB_PATH."autoload.php"
);

// Now Request File
define(
    "NOW_REQUEST_FILE",
    basename(
        $_SERVER[
            isset($_SERVER["REDIRECT_URL"]) ?
            "REDIRECT_URL" :
            "REQUEST_URI"
        ]
    ).
    ".php"
);

// Now Request File Name
define(
    "NOW_REQUEST_FILE_NAME",
    basename(
        NOW_REQUEST_FILE,
        ".php"
    )
);

// Web Uri Path
define(
    "WEB_URI_PATH",
    str_replace(
        NOW_REQUEST_FILE_NAME."/",
        NOW_REQUEST_FILE,
        ROUTE_WEB_URI
    )
);

// Web Uri Path Name
define(
    "WEB_URI_PATH_NAME",
    str_replace(
        NOW_REQUEST_FILE_NAME."/",
        NOW_REQUEST_FILE_NAME,
        ROUTE_WEB_URI
    )
);

// Base File
define(
    "BASE_FILE",
    IS_LOGIN ?
    "dashboard.php" :
    "auth.php"
);

// Base Directory
define(
    "BASE_DIR",
    IS_LOGIN ?
    "dashboard/" :
    "auth/"
);

// Base Directory
define(
    "BASE_DIR_NAME",
    IS_LOGIN ?
    "dashboard" :
    "auth"
);

// Is Auth
define(
    "IS_AUTH",
    BASE_DIR_NAME === "auth"
);

// Is 404
define(
    "IS_404",
    !file_exists(
        TEMPLATES_PATH.
        BASE_DIR.
        WEB_URI_PATH
    )
);

// This is Class-Slug
define(
    "CLASS_SLUG",
    !IS_404 ?
    strtoupper(
        NOW_REQUEST_FILE_NAME[0]
    ).
    substr(
        NOW_REQUEST_FILE_NAME,
        1
    ) :
    "404"
);

// Model File
define(
    "MODEL_FILE",
    MODELS_PATH.
    BASE_DIR.
    (
        !IS_404 ?
        WEB_URI_PATH :
        "404.php"
    )
);

// Model Class Name
define(
    "MODEL_CLASS",
    PREFIX.
    "M_".
    CLASS_SLUG
);

// Controller File
define(
    "CONTROLLER_FILE",
    CONTROLLERS_PATH.
    BASE_DIR.
    (
        !IS_404 ?
        WEB_URI_PATH :
        "404.php"
    )
);

// Controller Class Name
define(
    "CONTROLLER_CLASS",
    PREFIX.
    "C_".
    CLASS_SLUG
);

// View File
define("VIEW_FILE",VIEWS_PATH.BASE_FILE);

/////////// View Config ///////////

// View Sidebar Menu Config File
define(
    "SIDEBAR_MENU_CONFIG_FILE",
    VIEW_CONFIG_PATH.
    "__sidebar-menu.php"
);

// View Sidebar Menu Config File
define(
    "TITLE_CONFIG_FILE",
    VIEW_CONFIG_PATH.
    "__title.php"
);

// View Sidebar Menu Config File
define(
    "AUTH_CARD_TITLE_CONFIG_FILE",
    VIEW_CONFIG_PATH.
    "__auth-card-title.php"
);

/////////// View Config ///////////

// Template File
define(
    "TEMPLATE_FILE",
    TEMPLATES_PATH.
    BASE_DIR.
    (
        !IS_404 ?
        WEB_URI_PATH :
        "404.php"
    )
);

// 404 View File
define(
    "E_404_FILE",
    TEMPLATES_PATH.
    BASE_DIR.
    "404.php"
);

// Base "head" File
define(
    "BASE_HEAD_FILE",
    INCLUDES_PATH.
    BASE_DIR.
    "head.php"
);

// Now "head" File
define(
    "HEAD_FILE",
    INCLUDES_PATH.
    BASE_DIR.
    HEAD_PATH.
    WEB_URI_PATH
);

// Base "foot-script" File
define(
    "BASE_FOOT_FILE",
    INCLUDES_PATH.
    BASE_DIR.
    "footer-script.php"
);

// Now "footer-Script" File
define(
    "FOOT_FILE",
    INCLUDES_PATH.
    BASE_DIR.
    FOOT_PATH.
    WEB_URI_PATH
);

/**
 * /FILE Constant
 */