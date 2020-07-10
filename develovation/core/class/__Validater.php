<?php

/**
 * Validater
 */
class __Validater{

    /**
     * __Validater Init
     *
     * @access public
     * @param bool $__is_auto_validate
     */
    public function __construct(
        bool $__is_auto_validate = true
    )
    {
        // Auto Validater
        $__is_auto_validate AND $this->__auto_validate();
    }

    /**
     * This is Auto Validater
     *
     * @access private
     */
    public function __auto_validate()
    {
        (
            (
                IS_POST
                AND
                $this->__post_validate()
            )
            OR
            (
                !empty($_GET)
                AND
                $this->__get_validate()
            )
        );
    }

    /**
     * This is GET Requests Validater
     *
     * @access private
     */
    private function __get_validate()
    {
        __h($_GET);
    }

    /**
     * This is POST Requests Validater
     *
     * @access private
     */
    private function __post_validate()
    {
        __h($_POST);
    }
}