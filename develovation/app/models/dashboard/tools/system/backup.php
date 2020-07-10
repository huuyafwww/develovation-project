<?php

/**
 * View Model
 */
class __M_Backup extends __Model{

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
     * Download System Backup
     *
     * @access public
     */
    public function __download_backup()
    {
        // Request Params Checker
        $this->__request_params_checker();

        // When $this->__is_all_params is true,Download
        $this->__is_all_params AND $this->__download();
    }

    /**
     * Download
     *
     * @access private
     */
    private function __download()
    {
        // Get Requested Data
        $this->__get_requested_data();

        // Increment Download Count
        $this->__increment_download_count();

        // Set Backup Download Header
        $this->__set_backup_download_header();

        // Output Target Backup File
        readfile(BACKUP_PATH.$this->__requested_data["time"].".zip");

        // Redirect This Page
        __redirect(
            HTTP_ROOT_URL.
            "tools/system/backup/"
        );
    }

    /**
     * Increment Download Count
     *
     * @access private
     */
    private function __increment_download_count()
    {
        $this->__db
            ::table("backup_history")
            ->where(
                "time",
                "=",
                $this->__requested_data["time"]
            )
            ->increment("download_count");
        ;
    }

    /**
     * Set Backup Download Header
     *
     * @access private
     */
    private function __set_backup_download_header()
    {
        header("Pragma: public");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=".$this->__requested_data["time"].".zip");
    }

}