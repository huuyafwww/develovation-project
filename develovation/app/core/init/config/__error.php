<?php

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