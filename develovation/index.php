<?php

// Default is a Session Start
session_start();

/**
 * Core Directory Settings
 */

// Core Directory Path
$__core_path = __DIR__."/core/";

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

// Constant a "core" Directory Path
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

// Require Once a "__init.php"
require_once(INIT_FILE);

// Exit
exit;