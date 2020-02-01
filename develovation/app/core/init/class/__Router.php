<?php

/**
 * Main Router
 */
class __Router{

    /**
     * This is Array Uri
     *
     * @var array
     */
    protected $uris;

    /**
     * This is Target Route
     *
     * @var array
     */
    protected $route;

    /**
     * This is Route Class Name And File Name
     *
     * @var string
     */
    protected $slug;

    /**
     * This is Route Path
     *
     * @var string
     */
    protected $path;
    
    /**
     * Router Init
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
     */
    protected function __get_array_uri()
    {
        $this->uris = __empty_index_delete(
            explode("/",REQUEST_URI)
        );
    }

    /**
     * Get Target Route
     * 
     * @param string $target_str
     */
    protected function __get_route($target_str)
    {
        // Get Target index
        $target_index = array_search(
            $target_str,
            $this->uris
        );

        $this->route = [
            "method" => $this->uris[
                ($target_index + 1)
            ],
            "slug" => $this->uris[
                ($target_index + 2)
            ]
        ];
    }

    /**
     * Get Route Class Name And File Name
     */
    protected function __get_slug($target_str)
    {
        $this->slug = 
            PREFIX.
            strtoupper(
                $target_str[0]
            ).
            substr(
                $target_str,
                1
            )
        ;
    }

    /**
     * Get Route Path
     */
    protected function __get_path()
    {
        $this->path =
            $this->route["method"].
            "/".
            $this->slug.
            ".php"
        ;
    }
    

    /**
     * Run a Route
     */
    protected function __run_route()
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
     */
    protected function __load_view()
    {
        // Get Route Class Name And File Name
        $this->__get_slug(
            basename(CONTROLLER_FILE,".php")
        );

        // Load Target Class File
        __load_once(CONTROLLER_FILE);

        // Run Target Class
        new $this->slug;
    }

    /**
     * Load a Api
     */
    protected function __load_api()
    {
        // Get Target Route
        $this->__get_route("api");

        // Get Route Class Name And File Name
        $this->__get_slug($this->route["slug"]);

        // Get Route Path
        $this->__get_path();

        // Load Target Class File
        __load_once(
            API_PATH.
            $this->path
        );

        // Run Target Class
        new $this->slug;
    }
}