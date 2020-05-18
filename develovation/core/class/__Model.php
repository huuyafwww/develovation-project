<?php

/**
 * View Model
 */
class __Model{

    /**
     * This is Array Uri
     *
     * @access protected
     * @var DB
     */
    protected $db;

    /**
     * Model Init
     * 
     * @access protected
     */
    protected function __construct()
    {
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
        // "illuminate/database" Class to DB Class
        $this->__create_alias();

        // Get Databese Class
        $this->__get_db_class();

        // Connect Database
        $this->__connect_db();

        // Set Global for DB Class
        $this->__set_global();

        // Enable Eloquent
        $this->__enable_eloquent();
    }

    /**
     * "illuminate/database" Class to DB Class
     * 
     * @access private
     */
    private function __create_alias()
    {
        class_alias(
            Illuminate\Database\Capsule\Manager::class,
            ILLUMINATE_DB_ALIAS_NAME
        );
    }

    /**
     * Get Databese Class
     * 
     * @access private
     */
    private function __get_db_class()
    {
        $this->db = new DB();
    }

    /**
     * Connect Database
     * 
     * @access private
     */
    private function __connect_db()
    {
        $this->db->addConnection(DB_CONFIG);
    }

    /**
     * Set Global for DB Class
     * 
     * @access private
     */
    private function __set_global()
    {
        $this->db->setAsGlobal();
    }

    /**
     * Enable Eloquent
     * 
     * @access private
     */
    private function __enable_eloquent()
    {
        $this->db->bootEloquent();
    }

}