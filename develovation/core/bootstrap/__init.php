<?php

/**
 * Init Load File Settings
 */

// Init Load Class Name
$__init_class = "__Loader";

// Default is a Display Error by "true"
$__is_display_error = true;

// Constant a "__Loader.php" Path
define(
    "LOADER_FILE",
    CORE_PATH.
    "class/".
    $__init_class.
    ".php"
);

// Init Functions File
define(
    "INIT_FUNC_FILE",
    BOOTSTRAP_PATH."__init_functions.php"
);

// Init Load Define File Path List
define(
    "LOAD_DEFINE_FILES",
    [
        CORE_PATH."config/__define.php",
        CORE_PATH."config/__db.php",
        CORE_PATH."config/__path.php",
        CORE_PATH."config/__file.php",
        CORE_PATH."config/__error.php"
    ]
);

/**
 * /Init Load File Settings
 */

// This is test
$_SESSION["user"] = true;

// unset($_SESSION["user"]);

// Require Once a "__Loader" Class File
require_once(LOADER_FILE);

// Load a Init Class
new $__init_class($__is_display_error);

// Exit
exit;