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

        // When IS_POST is true,Download System Backup
        IS_POST AND $this->__model->__download_backup();

        // Set Backup Settings
        $this->__set_backup_settings();

        // Set Backup History
        $this->__set_backup_history();

        // Get Views
        $this->__get_view();

    }

    /**
     * Set Backup Settings
     *
     * @access private
     */
    private function __set_backup_settings()
    {
        // Get Backup Settings
        $__backup_settings = $this->__model->__get_backup_settings();

        // Set Display Name
        $__backup_settings->display_name = $this->__model->__user_id2display_name(
            $__backup_settings->user_id
        );

        // Set Date
        $__backup_settings->date = __time2date($__backup_settings->time);

        // Set Is Backup Message
        $__backup_settings->backup =
            (bool)$__backup_settings->is_backup
            ? "する"
            : "しない"
        ;

        // Set Is SQL Backup Message
        $__backup_settings->backup_sql =
            (bool)$__backup_settings->is_backup_sql
            ? "する"
            : "しない"
        ;

        // Set Backup Settings for View
        self::$__vars["__backup_settings"]
            = $__backup_settings
        ;
    }

    /**
     * Set Backup History
     *
     * @access private
     */
    private function __set_backup_history()
    {
        // Get Backup History
        $__backup_history = $this->__model->__get_backup_history();

        if(!isset($__backup_history->user_id))
        {
            self::$__vars["__backup_history"]
                = []
            ;
        }

        foreach
        (
            $__backup_history
            as
            &$__backup
        )
        {
            // Set Display Name
            $__backup->display_name = $this->__model->__user_id2display_name(
                $__backup->user_id
            );

            // Set Date
            $__backup->date = __time2date($__backup->time);

            // Set Is SQL Backup Message
            $__backup->backup_sql =
                (bool)$__backup->is_backup_sql
                    ? "有"
                    : "無"
            ;
        }

        // Set Backup Settings for View
        self::$__vars["__backup_history"]
            = $__backup_history
        ;
    }
}