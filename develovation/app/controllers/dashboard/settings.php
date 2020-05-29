<?php

/**
 * View Controller
 */
class __C_Settings extends __Controller{

    /**
     * Controller Init
     *
     * @access public
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // When IS_POST is true,Update Settings
        IS_POST AND $this->__model->__action_router();

        // Get Views
        $this->__get_view();
    }
}