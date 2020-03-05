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
     * View Variable
     *
     * @var array
     */
    public static $__vars = [];

    /**
     * Controller Init
     * 
     * @access protected
     */
    protected function __construct()
    {

        // Load View Helpers
        $this->__load_helpers();

        // Load Child Model
        $this->__load_model();

        // Get View Variable
        $this->__get_vars();
    }

    /**
     * Load View Helpers
     * 
     * @access private
     */
    private function __load_helpers()
    {
        // Load View Helpers Files
        __load_files(VIEW_HELPERS_PATH);
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
        $this->__get_model_class_name();

        // Load Target Class File
        $this->__model = new $this->__model_class; //子クラスのモデルを格納
    }

    /**
     * Load Model Class Name
     * 
     * @access private
     */
    private function __get_model_class_name()
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
        __load_once(
            VIEW_FILE,
            true
        );
    }

    /**
     * Get View Variable
     *
     * @access private
     */
    private function __get_vars()
    {
        // Set Now File Name for Body Class
        $this->__set_body_class(
            basename(
                TEMPLATE_FILE,
                ".php"
            )
        );
    }

    /**
     * Set Body Class
     * 
     * @access private
     * @param string $__var
     */
    private function __set_body_class(
        string $__var
    )
    {
        self::$__vars["__body_class"][]
            = $__var
        ;
    }
}