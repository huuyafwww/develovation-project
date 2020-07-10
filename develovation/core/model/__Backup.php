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
     * User Id
     *
     * @access private
     * @var int
     */
    private $__user_id;

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
    public function __create_backup(
        int $__user_id
    )
    {
        // Set User Id
        $this->__user_id = $__user_id;

        return
        (
                (
                    $this->__is_backup
                    OR
                    "システムのバックアップが有効になっていません"
                )
                AND
                (
                    $this->__backup_count >= $this->__max_backup_count
                    OR
                    "これ以上システムのバックアップを作成できません"
                )
                AND
                (
                    $this->__system_backup()
                    AND
                    "システムのバックアップが完了しました"
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
        // Insert Backup History
        $this->__insert_backup_history();

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

        $__mysqldump =
            MYSQL_DUMP
            ." "
                .DB_NAME
            ." --host="
                .DB_HOST
            ." --user="
                .DB_USER
            ." --password="
                .DB_PASSWORD
            ." > '"
                .$__time
                ."/"
                .__time2date()
                .".sql'"
        ;

        $__zip =
            "zip -r "
                .$__time
                .".zip"
                ." "
                .$__time
        ;

        $__rm_dir =
            "rm -rf "
                .$__time
        ;

        // Exec Command
        exec(
            $__cd
                .$__cmd_separator
                .$__mkdir
                .$__cmd_separator
                .$__rsync
                .$__cmd_separator
                .(
                    $this->__is_backup_sql
                    ?
                        $__mysqldump
                        .$__cmd_separator
                    : ""
                )
                .$__zip
                .$__cmd_separator
                .$__rm_dir
        );

    }

    /**
     * Insert Backup History
     *
     * @access private
     */
    private function __insert_backup_history()
    {
        // Build Insert Data
        $this->__requested_data =
        [
            "user_id" => $this->__user_id,
            "time" => TIME,
            "is_backup_sql" => $this->__backup_settings->is_backup_sql,
            "download_count" => 1
        ];

        // Set *_at Data
        $this->__set_at_data("created_at");

        $this->__db
            ::table(
                "backup_history"
            )
            ->insert(
                $this->__requested_data
            )
        ;
    }

}