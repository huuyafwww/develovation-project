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
    }

    /**
     * Get IP Address
     */
    protected function __get_response()
    {
        $this->__response["ip"] = IP_ADDRESS;
    }
}