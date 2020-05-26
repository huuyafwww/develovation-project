<?php

/**
 * View Controller
 */
class __C_Logout extends __Controller{

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // When IS_POST is true,Logout Verify
        IS_POST AND $__is_all_params = $this->__model->__logout_verify();

        (
            (
                $__is_all_params
                AND
                $this->__logout()
            )
            OR
            $this->__invalid_logout()
        );
    }

    /**
     * Logout User
     */
    private function __logout()
    {
        // SESSION Destroy for Safe
        __end_session();

        // Redirect to login
        __redirect(
            HTTP_ROOT_URL.
            "login/"
        );
    }

    /**
     * Invalid Logout
     */
    private function __invalid_logout()
    {
        // Redirect to home
        __redirect(
            HTTP_ROOT_URL.
            "home/"
        );
    }
}