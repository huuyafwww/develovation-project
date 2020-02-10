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
            explode("/",REQUEST_URI)
        );
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
        // Get Target index
        $__target_index = array_search(
            $__target_str,
            $this->__uris
        );

        $this->__route = [
            "method" => $this->__uris[
                ($__target_index + 1)
            ],
            "slug" => $this->__uris[
                ($__target_index + 2)
            ]
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

        // Load Target Controllers File
        __load_once(CONTROLLER_FILE);

        // Load Controller Class Name
        $this->__get_class_name();

        // Run Target Controllers Class
        new $this->__class;
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
}