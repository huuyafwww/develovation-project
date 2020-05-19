<?php

/**
 * API Request to Json Response
 */
class __Api{

    /**
     * Validation Method
     *
     * @access private
     * @var string
     */
    protected $__validate_method;

    /**
     * IS Ajax Endpoint
     *
     * @access private
     * @var bool
     */
    protected $__is_ajax;

    /**
     * Validation Params
     *
     * @access private
     * @var array
     */
    protected $__params;

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

        // Validate Method
        $this->__validate_method();

        // Validate Ajax
        $this->__validate_ajax();

        // Validate Params
        $this->__validate_params();

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
    protected function __header_settings(
        string $__mime = "json"
    )
    {
        // Set Response Header Settings
        header("Content-Type: application/".$__mime);
    }

    /**
     * Validate Method
     *
     * @access private
     */
    private function __validate_method()
    {
        (
            constant(
                $this->__validate_method
            )
            OR
            $this->__missing_request(
                "Missing Api Method Error"
            )
        );
    }

    /**
     * Validate Ajax
     *
     * @access private
     */
    private function __validate_ajax()
    {
        (
            IS_AJAX === $this->__is_ajax
            OR
            $this->__missing_request(
                "Request is missing"
            )
        );
    }

    /**
     * Validate Params
     *
     * @access private
     */
    private function __validate_params()
    {
        (
            __request_params_validater(
                $this->__params,
                IS_POST
            )
            OR
            $this->__missing_request(
                "Request is missing"
            )
        );
    }

    /**
     * Missing Api Method Error
     *
     * @access private
     */
    private function __missing_request(
        string $__error_message
    )
    {
        // Set Missing Api Method Response Message
        $this->__response["error"] =
            $__error_message
        ;

        // Send Response
        $this->__send_response();
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