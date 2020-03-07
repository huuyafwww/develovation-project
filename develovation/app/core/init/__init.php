<?php

// This is test
$_SESSION["user"] = true;

unset($_SESSION["user"]);


// Init Functions File
define(
    "INIT_FUNC_FILE",
    $__init_path."__init_functions.php"
);

// Init Load Define File Path List
define(
    "LOAD_DEFINE_FILES",
    [
        $__init_path."config/__define.php",
        $__init_path."config/__db.php",
        $__init_path."config/__path.php",
        $__init_path."config/__file.php",
        $__init_path."config/__error.php"
    ]
);

// Require Once a "__Loader" Class File
require_once(LOADER_FILE);

// Load a Init Class
new $__init_class($__is_display_error);

// Do Exit
exit;