<?php

/**
 * View Controller
 */
class __Controller{

    /**
     * This is Child Model Object
     *
     * @access protected
     * @var object
     */
    protected $__model;

    /**
     * This is Controller Model Name
     *
     * @access private
     * @var string
     */
    private $__model_class;

    /**
     * This is HTML Body Class List
     *
     * @access private
     * @var array
     */
    public static $__body_class = [];

    /**
     * Controller Init
     * 
     * @access protected
     */
    protected function __construct()
    {
        // Load Child Model
        $this->__load_model();

        // Set Now File Name for Body Class
        $this->__set_body_class(
            basename(
                TEMPLATE_FILE,
                ".php"
            )
        );
    }

    /**
     * Load Child Model
     * 
     * @access private
     */
    private function __load_model()
    {

        // Load Target Model File
        __load_once(MODEL_FILE);

        // Load Model Class Name
        $this->__get_class_name();

        // Load Target Class File
        $this->__model = new $this->__model_class; //子クラスのモデルを格納
    }

    /**
     * Load Model Class Name
     * 
     * @access private
     */
    private function __get_class_name()
    {
        $this->__model_class = MODEL_CLASS;
    }

    /**
     * Load View File
     * 
     * @access protected
     */
    protected function __get_view()
    {
        __load_once(VIEW_FILE);
    }

    /**
     * Set Body Class
     * 
     * @access protected
     * @param string $__var
     */
    protected function __set_body_class(
        string $__var
    )
    {
        self::$__body_class[] = $__var;
    }
}