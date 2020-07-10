<?php

/**
 * Get Encrypt Token
 */
class __Get_Token extends __Api{

    /**
     * Get Encrypt Token Init
     */
    public function __construct(
        string $__method,
        bool $__ajax,
        array $__params
    )
    {
        // Set Validate Method
        $this->__validate_method = $__method;

        // Set Is Ajax Bool Config
        $this->__is_ajax = $__ajax;

        // Set Validation Params
        $this->__params = $__params;

        // Run Parent Class Constructor
        parent::__construct();
    }

    /**
     * Get Encrypt Token
     */
    protected function __get_response()
    {
        $this->__response["token"] = openssl_encrypt(
            $_POST["temp_token"],
            OPENSSL_METHOD,
            TOKEN_KEY
        );
    }
}