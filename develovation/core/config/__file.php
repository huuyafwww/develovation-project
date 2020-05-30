<?php

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
        ROUTE_URI
    )
);

// Web Uri Path Name
define(
    "WEB_URI_PATH_NAME",
    str_replace(
        NOW_REQUEST_FILE_NAME."/",
        NOW_REQUEST_FILE_NAME,
        ROUTE_URI
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

// Is Auth
define(
    "IS_AUTH",
    BASE_DIR_NAME === "auth"
);

// Is Invalid Request
define(
    "IS_INVALID_REQUEST",
    !__is_strpos(
        TEMPLATES_PATH.
        BASE_DIR.
        WEB_URI_PATH,
        realpath(
            TEMPLATES_PATH.
            BASE_DIR
        )
    )
);

// Is 404
define(
    "IS_404",
    !file_exists(
        CONTROLLERS_PATH.
        BASE_DIR.
        WEB_URI_PATH
    )
    OR
    IS_INVALID_REQUEST
);

// Web Routes Config File
define(
    "ROUTES_CONFIG_FILE",
    ROUTES_PATH.
    (
        IS_API ?
        "api.php" :
        "web.php"
    )
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

// View File
define(
    "VIEW_FILE",
    VIEWS_PATH.BASE_FILE
);

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

// View Form Request Params for Validate
define(
    "FORM_REQUEST_VALIDATE_PARAMS_CONFIG_FILE",
    VIEW_CONFIG_PATH.
    "__forms.php"
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
    (
        !IS_404 ?
        WEB_URI_PATH :
        "404.php"
    )
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
    (
        !IS_404 ?
        WEB_URI_PATH :
        "404.php"
    )
);

/**
 * /FILE Constant
 */