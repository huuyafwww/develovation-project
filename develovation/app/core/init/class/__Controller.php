<?php

/**
 * View Controller
 */
class __Controller{

    /**
     * This is Child Model Object
     *
     * @var object
     */
    protected $__model;

    /**
     * This is Controller Model Name
     *
     * @var string
     */
    private $__model_class;

    /**
     * Controller Init
     */
    public function __construct()
    {
        // Load Child Model
        $this->__load_model();
    }

    /**
     * Load Child Model
     */
    private function __load_model()
    {

        // Load Target Model File
        __load_once(MODEL_FILE);

        $this->__get_model_class_name();

        // Load Target Class File
        $this->__model = new $this->__model_class; //子クラスのモデルを格納
    }

    /**
     * Load Model Class Name
     */
    private function __get_model_class_name()
    {
        $this->__model_class = MODEL_CLASS;
    }

    /**
     * Load the View File
     */
    protected function __get_view()
    {
        __load_once(VIEW_FILE);
    }
}