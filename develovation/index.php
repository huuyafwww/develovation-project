<?php

// Default is a Session Start
session_start();

// Root Path
define(
    "ROOT_PATH",
    realpath(
        __DIR__
    )."/"
);

/**
 * Core Directory Settings
 */

// Core Directory Path
$__core_path = ROOT_PATH."/core/";

// Constant a "core" Directory Path
define(
    "CORE_PATH",
    $__core_path
);

/**
 * /Core Directory Settings
 */


/**
 * Init Load File Settings
 */

// Constant a "bootstrap" Directory Path in "core" Directory
define(
    "BOOTSTRAP_PATH",
    CORE_PATH."bootstrap/"
);

// Constant a "__init.php" Path
define(
    "INIT_FILE",
    BOOTSTRAP_PATH."__init.php"
);

/**
 * /Init Load File Settings
 */

/**
 * Composer Auto Load File Settings
 */

// Constant a "lib" Directory Path in "core" Directory
define(
    "CORE_LIB_PATH",
    CORE_PATH."lib/"
);

// Composer Auto Load File
define(
    "LIB_AUTOLOAD_FILE",
    CORE_LIB_PATH."autoload.php"
);

/**
 * /Composer Auto Load File Settings
 */

/**
 * Env File Path Settings
 */

define(
    "ENV_PATH",
    ROOT_PATH."env/"
);

/**
 * /Env File Path Settings
 */

// Require Once a "__init.php"
require_once(INIT_FILE);

// Exit
exit;