<?php

/**
 * View Controller
 */
class __C_Login_History extends __Controller{

    /**
     * Login History Data
     *
     * @access public
     * @var array
     */
    public $__login_history;

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // Get Login History
        self::$__vars["__login_history"]
            = $this->__model->__get_login_history()
        ;

        // Get Views
        $this->__get_view();
    }
}