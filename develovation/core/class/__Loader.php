<?php

use Dotenv\Dotenv;

/**
 * Load the Core File
 */
class __Loader{

    /**
     * Loader Init
     *
     * @access public
     * @param bool $__is_display_error
     * @param bool $__is_auto_validate
     */
    public function __construct(
        bool $__is_display_error = true,
        bool $__is_auto_validate = true
    )
    {
        // Auto Loader
        $this->__auto_loader();

        // Default Settings
        $this->__default_settings();

        // Auto Uri Checking
        $this->__uri_auto_checking();

        // Register Error Handle
        $this->__error_settings($__is_display_error);

        // Token Settings
        $this->__token_settings();

        // Auto Validater
        $this->__auto_validater($__is_auto_validate);

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
        require_once(INIT_FUNC_FILE);

        // Require Composer Package AutoLoad File
        __load_once(LIB_AUTOLOAD_FILE);

        // Load .env File Constants
        $this->__load_env();

        // Require Define Constants
        __load_files(LOAD_DEFINE_FILES);

        // Load Helper Files
        __load_files(HELPER_PATH);

        // Load Trait Files
        __load_files(TRAIT_PATH);

        // Load Class Files
        __load_files(CLASS_PATH);
    }

    /**
     * Load env File Constants
     *
     * @access private
     */
    private function __load_env()
    {
        Dotenv
            ::createImmutable(ENV_PATH)
            ->load();
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
     * Auto Uri Checking
     *
     * @access private
     */
    private function __uri_auto_checking()
    {
        // When "ROOT_URI === REQUEST_URI",Auto Home Redirect
        $this->__uri_auto_redirect(
            ROOT_URI === REQUEST_URI,
            "home"
        );

        // Replace ".php" to "/" for Now Uri
        $this->__uri_auto_redirect(
            strpos(NOW_URI,".php") !== false,
            basename(
                NOW_URI,
                ".php"
            )
        );
    }

    /**
     * Uri Auto Redirect
     *
     * @param boolean $__judge
     * @param string $__to
     */
    private function __uri_auto_redirect(
        bool $__judge,
        string $__to
    )
    {
        (
            $__judge
            AND
            __redirect(
                $__to.
                "/"
            )
        );
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
     * Auto Validater
     *
     * @access private
     * @param bool $__is_auto_validate
     */
    private function __auto_validater(
        bool $__is_auto_validate
    )
    {
        $__is_auto_validate AND new __Validater;
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