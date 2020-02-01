<?php

/**
 * View Controller
 */
class __Index extends __Controller{

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // Get Views
        __get_views();
    }
}