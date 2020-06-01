<?php

/**
 * System Backup Class
 */
class __Backup extends __Model{

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
     * Backup Init
     *
     * @access public
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

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

        // Get Backup Settings
        $this->__backup_settings = $this->__get_backup_settings();

        // Set Is Backup
        $this->__is_backup = (bool)$this->__backup_settings->is_backup;

        // Set Max Backup Count
        $this->__max_backup_count = $this->__backup_settings->max_count;

        // Is SQL Backup
        $this->__is_backup_sql = (bool)$this->__backup_settings->is_backup_sql;

        // Set Now Backup Count
        $this->__backup_count = $this->__get_backup_history_count();
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
     * Create Backup
     *
     * @access public
     */
    public function __create_backup()
    {
        return
        (
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
     * @access private
     */
    private function __system_backup()
    {
        $__time = TIME;

        $__target_path = ROOT_PATH;

        $__save_dir = BACKUP_PATH;

        $__cmd_separator = "&& ";

        $__cd =
            "cd "
                .$__save_dir
        ;

        $__mkdir =
            "mkdir "
                .$__time
        ;

        $__rsync =
            "rsync -a "
                .$__target_path
                ." "
                .$__time
                ." --exclude storage/backup/"
        ;

        $__zip =
            "zip -r "
                .$__time
                .".zip"
                ." "
                .$__time
        ;

        // Exclude "storage/backup/" Dir
        exec(
            $__cd
                .$__cmd_separator
                .$__mkdir
                .$__cmd_separator
                .$__rsync
                .$__cmd_separator
                .$__zip
        );
    }

}