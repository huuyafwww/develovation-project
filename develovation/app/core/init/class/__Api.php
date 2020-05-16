<?php

/**
 * API Request to Json Response
 */
class __Api{

    /**
     * Variable a Response
     *
     * @access protected
     * @var array
     */
    protected $__response = [];

    /**
     * API Init
     *
     * @access protected
     * @param string $__mime
     */
    protected function __construct(
        string $__mime = "json"
    )
    {
        // Response Header Settings
        $this->__header_settings($__mime);

        // Get Response
        $this->__get_response();

        // Send Response
        $this->__send_response();
    }

    /**
     * Response Header Settings
     *
     * @access private
     * @param string $__mime
     */
    private function __header_settings(
        string $__mime
    )
    {
        // Set Response Header Settings
        header("Content-Type: application/".$__mime);
    }

    /**
     * Send Response
     *
     * @access protected
     */
    protected function __send_response()
    {
        echo json_encode(
            $this->__response
        );
        exit;
    }
}