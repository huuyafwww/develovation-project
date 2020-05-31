<?php

/**
 * View Controller
 */
class __C_Backup extends __Controller{

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // This is a Model Run Sample Code
        // $this->__model->

        // Get Backup Settings
        self::$__vars["__backup_settings"]
            = $this->__model->__get_backup_settings()
        ;

        // Get Views
        $this->__get_view();
    }
}