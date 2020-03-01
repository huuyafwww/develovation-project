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
            "SCRIPT_FILENAME"
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

// Is 404
define(
    "IS_404",
    !file_exists(
        TEMPLATES_PATH.
        NOW_REQUEST_FILE
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

// Base File
define(
    "BASE_FILE",
    IS_LOGIN ?
    "logined.php" :
    "not-logined.php"
);

// Model File
define(
    "MODEL_FILE",
    !IS_404 ?
    MODELS_PATH.NOW_REQUEST_FILE :
    MODELS_PATH."404.php"
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
    !IS_404 ?
    CONTROLLERS_PATH.NOW_REQUEST_FILE :
    CONTROLLERS_PATH."404.php"
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