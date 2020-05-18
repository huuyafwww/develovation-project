<?php

/**
 * Get IP Address
 */
class __Get_Ip extends __Api{

    /**
     * Get IP Address Init
     */
    public function __construct(
        string $__method,
        bool $__ajax,
        array $__params
    )
    {
        // Set Validation Method
        $this->__validate_method = $__method;

        // Set Is Ajax Bool Config
        $this->__is_ajax = $__ajax;

        // Set Validation Params
        $this->__params = $__params;

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