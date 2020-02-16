<?php

/**
 * This is PHP-PDO Wrapper
 */
class __Database{

    // Using Select Method
    use __Select;

    // Using Insert Method
    use __Insert;

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
     * This is Prepare SQL
     *
     * @access private
     * @var object
     */
    private $__sql;

    /**
     * Table
     *
     * @access private
     * @var string|array
     */
    private $__table;

    /**
     *  Do Proccess Datas
     * 
     * @access private
     * @var array
     */
    private $__datas;

    /**
     * Prefix Columns
     * 
     * @access private
     * @var array
     */
    private $__cols;

    /**
     * Columns
     *
     * @access private
     * @var array
     */
    private $__prefix_cols;

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
     * Do Init
     *
     * @access protected
     * @param array|string $__table
     * @param array $__datas
     */
    protected function __do_init(
        string $__table,
        array $__datas
    )
    {
        // Var $this->__table
        $this->__table = $__table;

        // Var $this->__datas
        $this->__datas = $__datas;

        // Get Columns
        $this->__get_cols();
    }

    /**
     * Get Columns
     *
     * @access private
     */
    private function __get_cols()
    {
        $this->__cols = implode(
            ",",
            array_keys(
                $this->__datas
            )
        );
    }

    /**
     * Run Query
     *
     * @access protected
     */
    protected function __run_query()
    {
        // PDO Set a Query
        $this->__set_query();

        // Do Query
        $this->__do_query();
    }

    /**
     * PDO Set a Query
     *
     * @access private
     */
    private function __set_query()
    {
        $this->__sql = 
            $this->__pdo->prepare(
                $this->__query
            )
        ;
    }

    /**
     * Do Query
     *
     * @access private
     */
    private function __do_query()
    {
        $this->__sql->execute(
            $this->__datas
        );
    }
}
