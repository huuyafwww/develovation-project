<?php

/**
 * View Model
 */
class __Model{

    /**
     * This is Array Uri
     *
     * @access protected
     * @var DB
     */
    protected $__db;

    /**
     * All Form Param for Validation
     *
     * @access private
     * @var array
     */
    private $__all_form_validation_params;

    /**
     * Param for Validation
     *
     * @access private
     * @var array
     */
    private $__validation_params;

    /**
     * Is All Request Params
     *
     * @access protected
     * @var bool
     */
    protected $__is_all_params;

    /**
     * Route Uri Array for Get Validation Params
     *
     * @access private
     * @var bool
     */
    private $__route_uri_array;

    /**
     * Requested Data
     *
     * @access protected
     * @var array
     */
    protected $__requested_data = [];

    /**
     * Last DB Proccess Return Id
     *
     * @access protected
     * @var int
     */
    protected $__last_id;

    /**
     * Model Init
     *
     * @access protected
     */
    protected function __construct()
    {
        // Auto Loader
        $this->__auto_loader();
    }

    /**
     * Auto Loader
     *
     * @access private
     */
    private function __auto_loader()
    {
        // "illuminate/database" Class to DB Class
        $this->__create_alias();

        // Get Databese Class
        $this->__get_db_class();

        // Connect Database
        $this->__connect_db();

        // Set Global for DB Class
        $this->__set_global();

        // Enable Eloquent
        $this->__enable_eloquent();
    }

    /**
     * "illuminate/database" Class to DB Class
     *
     * @access private
     */
    private function __create_alias()
    {
        class_alias(
            Illuminate\Database\Capsule\Manager::class,
            ILLUMINATE_DB_ALIAS_NAME
        );
    }

    /**
     * Get Databese Class
     *
     * @access private
     */
    private function __get_db_class()
    {
        $this->__db = new DB();
    }

    /**
     * Connect Database
     *
     * @access private
     */
    private function __connect_db()
    {
        $this->__db->addConnection(DB_CONFIG);
    }

    /**
     * Set Global for DB Class
     *
     * @access private
     */
    private function __set_global()
    {
        $this->__db->setAsGlobal();
    }

    /**
     * Enable Eloquent
     *
     * @access private
     */
    private function __enable_eloquent()
    {
        $this->__db->bootEloquent();
    }

    /**
     * Request Params Checker
     *
     * @access protected
     */
    protected function __request_params_checker()
    {
        // Get All Form Validate Params
        $this->__get_all_form_validate_params();

        // Get Route Uri Array
        $this->__route_uri_array = ROUTE_URI_ARRAY;

        // Set Base Slug for $this->__route_uri_array
        array_unshift(
            $this->__route_uri_array,
            BASE_DIR_NAME
        );

        // Get Request Target Validate Params
        $this->__get_request_validate_params();

        // Is All Request Params
        $this->__is_all_params =
            __request_params_validater(
                $this->__validation_params
            )
        ;
    }

    /**
     * Get All Form Validate Params
     *
     * @access private
     */
    private function __get_all_form_validate_params()
    {
        $this->__all_form_validation_params =
            require_once(FORM_REQUEST_VALIDATE_PARAMS_CONFIG_FILE)
        ;
    }

    /**
     * Get Request Target Validate Params
     *
     * @access private
     */
    private function __get_request_validate_params()
    {
        $this->__validation_params = __get_array_key2column(
            $this->__all_form_validation_params,
            $this->__route_uri_array
        );
    }

    /**
     * Get Requested Data
     *
     * @access protected
     * @param bool $__is_post
     */
    protected function __get_requested_data(
        bool $__is_post = true
    )
    {

        $__method = $__is_post ? $_POST : $_GET;

        foreach(
            $this->__validation_params
            as
            $__param
        ){
            $this->__requested_data[$__param] =
                $__method[$__param]
            ;
        }
    }

    /**
     * Set *_at Data
     *
     * @access protected
     */
    protected function __set_at_data(
        string $__at
    )
    {
        $this->__requested_data[$__at] =
            TIME
        ;
    }

    /**
     * Get Last DB Proccess Return Id
     *
     * @access protected
     */
    protected function __get_last_id()
    {
        $this->__last_id = $this->__db
            ::getPdo()
            ->lastInsertId()
        ;
    }

}