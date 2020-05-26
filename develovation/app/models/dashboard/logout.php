<?php

/**
 * View Model
 */
class __M_Logout extends __Model{

    /**
     * Model Init
     *
     * @access public
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();
    }

    /**
     * Logout Verify
     *
     * @access public
     */
    public function __logout_verify()
    {
        // Request Params Checker
        $this->__request_params_checker();

        return $this->__is_all_params;
    }

}