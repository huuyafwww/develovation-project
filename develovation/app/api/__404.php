<?php

/**
 * Api Not Found Responser
 */
class __Api_Not_Found extends __Api{

    /**
     * Api Not Found Responser Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();
    }

    /**
     * Set Api 404 Not Found Message
     *
     * @return void
     */
    protected function __get_response()
    {
        $this->__response["error"] =
            "Requested Api is Not Found"
        ;
    }
}