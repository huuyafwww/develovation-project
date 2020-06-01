<?php

/**
 * System Backup Class
 */
class __Backup{

    /**
     * Backup Settings
     *
     * @access private
     * @var int
     */
    private $__backup_settings;

    /**
     * Is Backup
     *
     * @access private
     * @var int
     */
    private $__is_backup;

    /**
     * Max Backup Count
     *
     * @access private
     * @var int
     */
    private $__max_backup_count;

    /**
     * Is SQL Backup
     *
     * @access private
     * @var int
     */
    private $__is_sql_backup;

    /**
     * Now Time
     *
     * @access private
     * @var int
     */
    private $__time = TIME;

    /**
     * Now Backup Count
     *
     * @access private
     * @var int
     */
    private $__backup_count;

    /**
     * Model Class
     *
     * @access private
     * @var __Model
     */
    private $__model;

    /**
     * Backup Init
     *
     * @access public
     */
    public function __construct()
    {
        $this->__max_backup_count = $__max_backup_count;

        // Auto Loader
        $this->__auto_loader();
    }

    /**
     * Auto Loader
     *
     * @access private
     */
    private function __auto_loader()
    {
        // // Get Backup Count
        // $this->__get_backup_count();

        // Get Model
        $this->__get_model();

        // Get Backup Settings
        $this->__backup_settings = $this->__model->__get_backup_settings();

        // Set Is Backup
        $this->__is_backup = (bool)$this->__backup_settings->is_backup;

        // Set Max Backup Count
        $this->__max_backup_count = $this->__backup_settings->max_count;

        // Is SQL Backup
        $this->__is_backup_sql = (bool)$this->__backup_settings->__is_sql_backup;

        // Set Now Backup Count
        $this->__backup_count = __get_backup_history_count();
    }

    /**
     * Get Backup Count
     *
     * @access private
     */
    private function __get_backup_count()
    {
        $this->__backup_count =
            count(
                glob(
                    BACKUP_PATH.'*',
                    GLOB_ONLYDIR
                )
            )
        ;
    }

    /**
     * Get Model
     *
     * @access private
     */
    private function __get_model()
    {
        $this->__model = new __Model;
    }

    /**
     * Create Backup
     *
     * @access public
     */
    public function __create_backup()
    {
        return (
                (
                    $this->__is_backup
                    OR
                    "システムのバックアップが有効になっていません"
                )
                OR
                (
                    $this->__backup_count >= $this->__max_backup_count
                    OR
                    "これ以上システムのバックアップを作成できません"
                )
                OR
                (
                    $this->__system_backup()
                )
        );
    }

    /**
     * System Backup
     *
     * @access public
     */
    private function __system_backup()
    {
    }

}