<?php

/**
 * Get Encrypt Token
 */
class __Token extends __Api{
    
    /**
     * Get Encrypt Token Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // Get Encrypt Token
        $this->__get_token();

        // Send Response
        parent::__send_response();
    }

    /**
     * Get Encrypt Token
     */
    protected function __get_token(){
        $this->response["token"] = openssl_encrypt(
            __h($_GET["temp_token"]),
            OPENSSL_METHOD,
            TOKEN_KEY
        );
    }
}