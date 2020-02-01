<?php

/**
 * Load the Core File
 */
class __Loader{

    /**
     * Loader Init
     * 
     * @param bool $is_display_error
     */
    public function __construct($is_display_error = true)
    {
        // Auto Loader
        $this->__auto_loader();

        // Default Settings
        $this->__default_settings();

        // Register Error Handle
        $this->__error_settings($is_display_error);

        // Token Settings
        $this->__token_settings();

        // Route Loader
        $this->__route_loader();
    }

    /**
     * Auto Loader
     */
    protected function __auto_loader()
    {

        // Require Define Constants
        $this->__define_loader();

        // Require Init Functions Files
        $this->__init_func_loader();

        // Load Helper Files
        $this->__load_files(HELPER_PATH);

        // Load Class Files
        $this->__load_files(CLASS_PATH);
    }

    /**
     * Require Define Constants
     */
    protected function __define_loader()
    {
        require_once(DEFINE_FILE);
    }

    /**
     * Require Init Functions File
     */
    protected function __init_func_loader()
    {
        require_once(INIT_FUNC_FILE);
    }

    /**
     * Load Files
     * 
     * @param string $target_paths
     */
    protected function __load_files($target_paths)
    {
        foreach(
            __get_all_file_list($target_paths)
            as
            $target_path
        )
        {
            __load_once($target_path);
        }
    }

    /**
     * Default Settings
     */
    protected function __default_settings()
    {
        // Default TimeZone
        date_default_timezone_set(DEFAULT_TIME_ZONE);
    }

    /**
     * Error Settings
     * 
     * @param bool $is_display_error
     */
    protected function __error_settings($is_display_error)
    {
        // Setting a Output Error Log Location
        ini_set("log_errors","On");
        ini_set("error_log",ERROR_LOG_FILE);
        error_reporting(CATCH_ERROR);

        // Setting a Error Handle
        (
            $is_display_error
            OR
            (
                ini_set('display_errors',"Off")
                AND
                set_error_handler(ERROR_LOGGER_FUNC_NAME)
            )
        )
        AND
        (
            !ini_set('display_errors',"On")
            AND
            set_error_handler(ERROR_HANDLE_FUNC_NAME)
        );
    }

    /**
     * Token Settings
     */
    protected function __token_settings()
    {
        IS_POST
        OR
        (
            __session_name_exists(SESSION_TOKEN_NAME)
            OR
            __set_sessions(
                [
                    SESSION_TOKEN_NAME => TOKEN,
                    SESSION_E_TOKEN_NAME => __get_encrypt_token()
                ]
            )
        );
    }

    /**
     * Route Loader
     */
    protected function __route_loader()
    {
        new __Router;
    }

}