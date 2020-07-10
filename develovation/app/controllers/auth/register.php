<?php

/**
 * View Controller
 */
class __C_Register extends __Controller{

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // When IS_POST is true,Register New User
        IS_POST AND $this->__model->__register_user();

        // Get Views
        $this->__get_view();
    }
}