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
        $__backup_settings = $this->__model->__get_backup_settings();

        // Set Display Name
        $__backup_settings->display_name = $this->__model->__user_id2display_name(
            $__backup_settings->user_id
        );

        // Set Date
        $__backup_settings->date = __time2date($__backup_settings->time);

        // Set Is Backup Message
        $__backup_settings->backup = $__backup_settings->is_backup ? "しない" : "する";

        // Set Is SQL Backup Message
        $__backup_settings->backup_sql = $__backup_settings->is_backup_sql ? "しない" : "する";

        // Set Backup Settings for View
        self::$__vars["__backup_settings"]
            = $__backup_settings
        ;

        // Get Views
        $this->__get_view();
    }
}