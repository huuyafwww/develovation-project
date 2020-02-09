<?php

/**
 * Available Debugger Methods
 */
class __Tester{
    
    /**
     * Debug Var
     *
     * @param mixed $__var
     * @param bool $__type
     */
    public function __dump(
        $__var,
        bool $__type = false
    )
    {
        echo "<pre>";
        $__type ? var_dump($__var) : print_r($__var);
        echo "</pre>";
    }

    /**
     * Debug The Include Files
     */
    public function __inc_files()
    {
        $this->__dump(
            get_included_files()
        );
    }
    
    /**
     * Debug The Defined Constants
     */
    public function __def_consts()
    {
        $this->__dump(
            get_defined_constants()
        );
    }

    /**
     * Debug The Defined Functions
     */
    public function __def_funcs()
    {
        $this->__dump(
            get_defined_functions()
        );
    }

    /**
     * Debug The Defined Variable
     */
    public function __def_vars()
    {
        $this->__dump(
            get_defined_vars()
        );
    }
    
}