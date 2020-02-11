<?php

/**
 * Load the Core File
 */
class __Loader{

    /**
     * Loader Init
     * 
     * @access public
     * @param bool $__is_display_error
     */
    public function __construct(
        bool $__is_display_error = true
    )
    {
        // Auto Loader
        $this->__auto_loader();

        // Default Settings
        $this->__default_settings();

        // Register Error Handle
        $this->__error_settings($__is_display_error);

        // Token Settings
        $this->__token_settings();

        // Route Loader
        $this->__route_loader();
    }

    /**
     * Auto Loader
     * 
     * @access private
     */
    private function __auto_loader()
    {
        // Require Init Functions Files
        $this->__init_func_loader();

        // Require Define Constants
        $this->__load_files(LOAD_DEFINE_FILES);

        // Load Helper Files
        $this->__load_files(HELPER_PATH);

        // Load Class Files
        $this->__load_files(CLASS_PATH);
    }

    /**
     * Require Define Constants
     * 
     * @access private
     */
    private function __define_loader()
    {
        require_once(DEFINE_FILE);
    }

    /**
     * Require Init Functions File
     * 
     * @access private
     */
    private function __init_func_loader()
    {
        require_once(INIT_FUNC_FILE);
    }

    /**
     * Load Files
     * 
     * @access private
     * @param string|array $__target_paths
     */
    private function __load_files(
        $__target_paths
    )
    {
        foreach(
            is_array($__target_paths) ? 
                $__target_paths :
                __get_all_file_list($__target_paths)
            as
            $__target_path
        )
        {
            __load_once($__target_path);
        }
    }

    /**
     * Default Settings
     * 
     * @access private
     */
    private function __default_settings()
    {
        // Default TimeZone
        date_default_timezone_set(DEFAULT_TIME_ZONE);
    }

    /**
     * Error Settings
     * 
     * @access private
     * @param bool $__is_display_error
     */
    private function __error_settings(
        bool $__is_display_error
    )
    {
        // Setting a Output Error Log Location
        ini_set("log_errors","On");
        ini_set("error_log",ERROR_LOG_FILE);
        error_reporting(CATCH_ERROR);

        // Setting a Error Handle
        (
            $__is_display_error
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
     * 
     * @access private
     */
    private function __token_settings()
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
     * 
     * @access private
     */
    private function __route_loader()
    {
        new __Router;
    }

}