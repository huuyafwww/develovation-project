<?php

/**
 * Main Router
 */
class __Router{

    /**
     * This is Now Routes
     *
     * @access private
     * @var array
     */
    private $__routes;

    /**
     * This is Target Route
     *
     * @access private
     * @var array
     */
    private $__route;

    /**
     * This is Now Uri
     *
     * @access private
     * @var array
     */
    private $__uri;

    /**
     * This is Route Path
     *
     * @access private
     * @var string
     */
    private $__path;

    /**
     * This is Class Name
     *
     * @access private
     * @var string
     */
    private $__class;

    /**
     * This is Route Config
     *
     * @access private
     * @var array
     */
    private $__route_config;

    /**
     * Router Init
     *
     * @access public
     */
    public function __construct()
    {
        // Run a Route
        $this->__run_route();
    }

    /**
     * Run a Route
     *
     * @access private
     */
    private function __run_route()
    {
        /* HTTP Request Router
            - IS_AJAX
            - IS_POST
            - IS_API
        /HTTP Request Router */
        (
            (
                IS_API
                AND
                !$this->__load_api()
            )
            OR
            $this->__load_view()
        );
    }

    /**
     * Load a View
     *
     * @access private
     */
    private function __load_view()
    {
        // Auth Check
        $this->__auth_check();

        //  Load Routes Config File
        $this->__load_routes_config();

        // Set Api Route Uri Array
        $this->__routes = ROUTE_URI_ARRAY;

        // Set Base Slug for $this->__routes
        array_unshift(
            $this->__routes,
            BASE_DIR_NAME
        );

        // Get Routes Config Column
        $this->__get_routes_config_column();

        // Define View Constant for Dynamic
        $this->__set_view_constant();

        // Load Target Controllers File
        __load_once(CONTROLLER_FILE);

        // Load Controller Class Name
        $this->__get_class_name();

        // Run Target Controllers Class
        new $this->__class;
    }

    /**
     * Auth Check
     *
     * @access private
     */
    private function __auth_check()
    {
        // IF Not Login and Get to Login After Page
        $this->__auth_login_check();

        // If Auth route
        $this->__auth_404_check();

    }

    /**
     * IF Not Login and Get to Login After Page
     *
     * @access private
     */
    private function __auth_login_check()
    {
        (
            !IS_AUTH
            AND
            !IS_LOGIN
            AND
            // Redirect to login.php
            __redirect(
                HTTP_ROOT_URL.
                "login/"
            )
        );
    }

    /**
     * If Auth route
     *
     * @access private
     */
    private function __auth_404_check()
    {
        (
            IS_AUTH
            AND
            IS_404
            AND
            // Redirect to login.php
            __redirect(
                HTTP_ROOT_URL.
                "login/"
            )
        );
    }

    /**
     * Define View Constant for Dynamic
     *
     * @access private
     */
    private function __set_view_constant()
    {
        $__class_slug_name =
            isset(
                $this->__route["slug"]
            ) ?
            $this->__route["slug"] :
            "404"
        ;
        foreach(
            CLASS_SLUGS
            as
            $__constant_name
            => $__class_name_prefix
        )
        {
            define(
                $__constant_name,
                PREFIX.
                $__class_name_prefix.
                $__class_slug_name
            );
        }
    }

    /**
     * Load Controller Class Name
     *
     * @access private
     */
    private function __get_class_name()
    {
        $this->__class = CONTROLLER_CLASS;
    }

    /**
     * Load a Api
     *
     * @access private
     */
    private function __load_api()
    {

        //  Load Routes Config File
        $this->__load_routes_config();

        // Set Api Route Uri Array
        $this->__routes = ROUTE_URI_ARRAY;

        // Get Routes Config Column
        $this->__get_routes_config_column();

        // When Request Api not exists,return error.
        $this->__route OR $this->__api_not_found_error();

        // Delete Last Index
        array_pop($this->__routes);

        // Set Now Uri
        $this->__uri = implode("/",$this->__routes);

        // Get Route Path
        $this->__get_path();

        // Load Target Class File
        __load_once($this->__path);

        // Run Target Class
        new $this->__route["slug"](
            $this->__route["method"],
            $this->__route["is_ajax"],
            $this->__route["params"]
        );
    }

    /**
     * Get Route Path
     *
     * @access private
     */
    private function __get_path()
    {
        $this->__path =
            API_PATH.
            $this->__uri.
            "/".
            $this->__route["name"].
            ".php"
        ;
    }

    /**
     * Load Routes Config File
     *
     * @access private
     */
    private function __load_routes_config()
    {
        include_once(ROUTES_CONFIG_FILE);
        $this->__route_config = $__routes;
    }

    /**
     * Get Routes Config Column
     *
     * @access private
     */
    private function __get_routes_config_column()
    {
        $this->__route = __get_array_key2column(
            $this->__route_config,
            $this->__routes
        );
    }

    /**
     * Return Api Error Response
     *
     * @access private
     */
    private function __api_not_found_error()
    {
        __load_once(
            API_PATH.
            "__404.php"
        );
        new __Api_Not_Found;
    }
}