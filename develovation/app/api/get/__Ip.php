<?php

/**
 * Get IP Address
 */
class __Ip extends __Api{
    
    /**
     * Get IP Address Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // Get IP Address
        $this->__get_ip();

        // Send Response
        parent::__send_response();
    }

    /**
     * Get IP Address
     */
    protected function __get_ip()
    {
        $this->response["ip"] = IP_ADDRESS;
    }
}