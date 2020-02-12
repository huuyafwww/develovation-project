<?php

/**
 * This is PHP-PDO Wrapper
 */
class __Database{

    /**
     * This is PDO Object
     *
     * @access private
     * @var PDO
     */
    private $__pdo;

    /**
     * This is Building SQL Query
     *
     * @access private
     * @var string|array
     */
    private $__query;

    /**
     * Database Init
     * 
     * @access public
     */
    public function __construct()
    {
        // DataBase Connect Init
        $this->__db_connect_init();
    }

    /**
     * DataBase Connect Init
     *
     * @access private
     */
    private function __db_connect_init()
    {
        // Connect DataBase
        $this->__connect_db();

        // Settings DataBase
        $this->__db_settings();
    }

    /**
     * Connect DataBase
     *
     * @access private
     */
    private function __connect_db()
    {
        $this->__pdo = new PDO(
            "mysql:dbname=".
                DB_NAME.
                ";host=".
                DB_HOST.
                ";charset=utf8mb4",
            DB_USER,
            DB_PASSWORD,
            [
                PDO::ATTR_PERSISTENT => true
            ]
        );
    }

    /**
     * Settings DataBase
     *
     * @access private
     */
    private function __db_settings()
    {
        $this->__pdo->setAttribute(
            PDO::ATTR_EMULATE_PREPARES,
            true
        );
    }

    /**
     * SQL Query for SELECT
     *
     * @access public
     * @param string|array
     */
    public function __select(
        $table
    )
    {
        $this->__pdo->setAttribute(
            PDO::ATTR_EMULATE_PREPARES,
            true
        );
    }
}
