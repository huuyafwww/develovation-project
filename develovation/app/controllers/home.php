<?php

/**
 * View Controller
 */
class __C_Home extends __Controller{

    /**
     * This Class Name
     *
     * @var string
     */
    protected $class_name;

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();

        // This is a Model Run Sample Code
        // $this->model->__test();

        // Get Views
        $this->__get_view();
    }
}