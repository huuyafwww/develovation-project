<?php

/**
 * Main Router
 */
class __Router{

    /**
     * This is Array Uri
     *
     * @access private
     * @var array
     */
    private $__uris;

    /**
     * This is Target Route
     *
     * @access private
     * @var array
     */
    private $__route;

    /**
     * This is Route Class Name And File Name
     *
     * @access private
     * @var string
     */
    private $__slug;

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
     * Router Init
     *
     * @access public
     */
    public function __construct()
    {
        // Get Uri to Array
        $this->__get_array_uri();

        // Run a Route
        $this->__run_route();
    }

    /**
     * Get Uri to Array
     *
     * @access private
     */
    private function __get_array_uri()
    {
        $this->__uris = __empty_index_delete(
            explode(
                "/",
                parse_url(
                    REQUEST_URI,
                    PHP_URL_PATH
                )
            )
        );
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
            $this->__redirect_to_login_before()
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
            $this->__redirect_to_login_before()
        );
    }

    /**
     * Redirect to login.php
     *
     * @access private
     */
    private function __redirect_to_login_before()
    {
        header(
            "Location: ".
            HTTP_ROOT_URL.
            "login/"
        );
        exit;
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
        // Get Target Route
        $this->__get_route("api");

        // Get Route Class Name And File Name
        $this->__get_slug($this->__route["slug"]);

        // Get Route Path
        $this->__get_path();

        // Load Target Class File
        __load_once(
            API_PATH.
            $this->__path
        );

        // Run Target Class
        new $this->__slug;
    }

    /**
     * Get Target Route
     *
     * @access private
     * @param string $__target_str
     */
    private function __get_route(
        string $__target_str
    )
    {
        // Slice Uris
        $this->__slice_uris(
            array_search(
                $__target_str,
                $this->__uris
            )
        );

        // Get Route Uri
        $this->__get_route_uri();
    }

    /**
     * Slice Uris
     */
    private function __slice_uris(
        string $__target_index
    )
    {
        $this->__uris = array_slice(
            $this->__uris,
            $__target_index + 1
        );
    }

    /**
     * Get Route Uri
     *
     * @return void
     */
    private function __get_route_uri()
    {
        // Get Slug
        $slug = array_pop($this->__uris);

        $this->__route = [
            "method" => implode(
                "/",
                $this->__uris
            ),
            "slug" => $slug
        ];
    }

    /**
     * Get Route Class Name And File Name
     *
     * @access private
     * @param string $__target_str
     */
    private function __get_slug(
        string $__target_str
    )
    {
        $this->__slug =
            PREFIX.
            strtoupper(
                $__target_str[0]
            ).
            substr(
                $__target_str,
                1
            )
        ;
    }

    /**
     * Get Route Path
     *
     * @access private
     */
    private function __get_path()
    {
        $this->__path =
            $this->__route["method"].
            "/".
            $this->__slug.
            ".php"
        ;
    }
}