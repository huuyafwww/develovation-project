<?php

// Default is a Session Start
session_start();

// Constant a "__define.php" Location
define("DEFINE_FILE",__DIR__."/app/core/init/config/__define.php");

// Constant a "__init.php" Location
define("INIT_FILE",__DIR__."/app/core/init/__init.php");

// Default is a Display Error by "true"
$is_display_error = true;

// Require Once a "__init.php"
require_once(INIT_FILE);

// Do Exit
exit;