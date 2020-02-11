<?php

// Default is a Session Start
session_start();

/**
 * Init Load File Settings
 */

// Init Directory Path
$__init_path = __DIR__."/app/core/init/";

// Constant a "__init.php" Path
define(
    "INIT_FILE",
    $__init_path."__init.php"
);

/**
 * Init Load File Settings
 */


/**
 * Init Load Class Settings
 */

// Init Load Class Name
$__init_class = "__Loader";

// Default is a Display Error by "true"
$__is_display_error = true;

// Constant a "__Loader.php" Path
define(
    "LOADER_FILE",
    $__init_path."class/__Loader.php"
);

/**
 * /Init Load Class Settings
 */

// Require Once a "__init.php"
require_once(INIT_FILE);

// Do Exit
exit;