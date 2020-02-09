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
    protected $__response = [];
    
    /**
     * API Init
     * 
     * @param string $__mime
     */
    protected function __construct(
        string $__mime = "json"
    )
    {
        // Response Header Settings
        $this->__header_settings($__mime);
    }

    /**
     * Response Header Settings
     *
     * @param string $__mime
     */
    protected function __header_settings(
        string $__mime
    )
    {
        // Set Response Header Settings
        header("Content-Type: application/".$__mime);
    }

    /**
     * Send Response
     */
    protected function __send_response()
    {
        echo json_encode(
            $this->__response
        );
    }
}