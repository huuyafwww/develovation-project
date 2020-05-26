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

}