<?php

/**
 * Database Trait
 */
trait __DB {

    /**
     * This is Array Uri
     *
     * @access public
     * @var DB
     */
    public $__db;

    /**
     * Last DB Proccess Return Id
     *
     * @access public
     * @var int
     */
    public $__last_id;

    /**
     * Requested Data
     *
     * @access public
     * @var array
     */
    public $__requested_data = [];

    /**
     * Get Last DB Proccess Return Id
     *
     * @access public
     */
    public function __get_last_id()
    {
        $this->__last_id = $this->__db
            ::getPdo()
            ->lastInsertId()
        ;
    }

    /**
     * Set *_at Data
     *
     * @access public
     */
    public function __set_at_data(
        string $__at
    )
    {
        $this->__requested_data[$__at] =
            TIME
        ;
    }

    /**
     * Is Exists Record
     *
     * @access public
     * @param string $__table
     * @param array $__where
     */
    public function __is_exists(
        string $__table,
        array $__where
    ):bool
    {
        return
            $this->__db
                ::table(
                    $__table
                )
                ->where(
                    $__where["col"],
                    $__where["ope"],
                    $__where["target"]
                )
                ->exists()
        ;
    }

    /**
     * Get Backup Settings
     *
     * @access public
     */
    public function __get_backup_settings()
    {
        return
            $this->__db
                ::table(
                    "backup_settings"
                )
                ->where(
                    "time",
                    "=",
                    $this->__db
                        ::table(
                            "backup_settings"
                        )
                        ->max("time")
                )
                ->first(
                    [
                        "user_id",
                        "time",
                        "is_backup",
                        "max_count",
                        "is_backup_sql"
                    ]
                )
        ;
    }

    /**
     * Get Backup History
     *
     * @access public
     */
    public function __get_backup_history()
    {
        return
            $this->__db
                ::table(
                    "backup_history"
                )
                ->get(
                    [
                        "user_id",
                        "time",
                        "target_path",
                        "is_backup_sql",
                        "download_count",
                    ]
                )
                ->toArray()
        ;
    }

    /**
     * Get Backup History Count
     *
     * @access public
     */
    public function __get_backup_history_count()
    {
        return
            $this->__db
                ::table(
                    "backup_history"
                )
                ->count()
        ;
    }

    /**
     * User ID to Display Name
     *
     * @access public
     * @param string $__user_id
     */
    public function __user_id2display_name(
        int $__user_id
    )
    {
        return
            $this->__db
                ::table(
                    "user"
                )
                ->where(
                    "id",
                    "=",
                    $__user_id
                )
                ->first(
                    [
                        "display_name"
                    ]
                )
                ->display_name
        ;
    }

}