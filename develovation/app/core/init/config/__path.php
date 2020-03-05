<?php

/**
 * PATH Constant
 */

// Root Path
define("ROOT_PATH",__DIR__."/../../../../");

/* Directly-Root-DIR-Constant */
define("APP_PATH",ROOT_PATH."app/");
define("LOG_PATH",ROOT_PATH."log/");
/* /Directly-Root-DIR-Constant */

/* Directly-App-DIR-Constant */
define("API_PATH",APP_PATH."api/");
define(
    "ASSETS_PATH",
    ROOT_URI."app/assets/"
);
define("COMPONENTS_PATH",APP_PATH."components/");
define("VIEW_CONFIG_PATH",APP_PATH."config/");
define("CONTROLLERS_PATH",APP_PATH."controllers/");
define("CORE_PATH",APP_PATH."core/");
define("VIEW_HELPERS_PATH",APP_PATH."helpers/");
define("INCLUDES_PATH",APP_PATH."includes/");
define("MODELS_PATH",APP_PATH."models/");
define("TEMPLATES_PATH",APP_PATH."templates/");
define("VIEWS_PATH",APP_PATH."views/");
/* /Directly-App-DIR-Constant */

/* Assets-App-Dir-Constant */
define("ASSETS_APP_PATH",ASSETS_PATH."app/");
define("APP_CSS_PATH",ASSETS_APP_PATH."css/");
define("APP_JS_PATH",ASSETS_APP_PATH."js/");
define("APP_IMG_PATH",ASSETS_APP_PATH."img/");
/* /Assets-App-Dir-Constant */

/* Assets-Lib-Dir-Constant */
define("ASSETS_LIB_PATH",ASSETS_PATH."lib/");
define("LIB_CSS_PATH",ASSETS_LIB_PATH."css/");
define("LIB_JS_PATH",ASSETS_LIB_PATH."js/");
define("LIB_IMG_PATH",ASSETS_LIB_PATH."img/");
/* /Assets-Lib-Dir-Constant */

/* Core-Dir-Constant */
define("INIT_PATH",CORE_PATH."init/");
define("CLASS_PATH",INIT_PATH."class/");
define("CONFIG_PATH",INIT_PATH."config/");
define("HELPER_PATH",INIT_PATH."helper/");
/* /Core-Dir-Constant */

/* Inc-Dir-Constant */
define("FOOT_PATH",INCLUDES_PATH."foot/");
define("HEAD_PATH",INCLUDES_PATH."head/");
/* /Inc-Dir-Constant */

/**
 * /PATH Constant
 */