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
        // SESSION Destroy for Safe
        __end_session();

        // Redirect to login.php
        __redirect(
            HTTP_ROOT_URL.
            "login/"
        );
    }
}