<?php

/**
 * API Request to Json Response
 */
class __Api{

    /**
     * Variable a Response
     *
     * @var array
     */
    protected $response = [];
    
    /**
     * API Init
     */
    protected function __construct($mime = "json")
    {
        // Response Header Settings
        $this->__header_settings($mime);
    }

    /**
     * Response Header Settings
     *
     * @param string
     */
    protected function __header_settings($mime)
    {
        // Set Response Header Settings
        header("Content-Type: application/".$mime);
    }

    /**
     * Send Response
     */
    protected function __send_response()
    {
        echo json_encode(
            $this->response
        );
    }
}