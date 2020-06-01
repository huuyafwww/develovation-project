<?php

/**
 * Create System Backup
 */
class __Create_Backup extends __Api{

    /**
     * Create System Backup Init
     */
    public function __construct(
        string $__method,
        bool $__ajax,
        array $__params
    )
    {
        // Set Validation Method
        $this->__validate_method = $__method;

        // Set Is Ajax Bool Config
        $this->__is_ajax = $__ajax;

        // Set Validation Params
        $this->__params = $__params;

        // Run Parent Class Constructor
        parent::__construct();
    }

    /**
     * Create System Backup
     */
    protected function __get_response()
    {
        $__backup = new __Backup;
        $this->__response["backup"] =
            $__backup
                ->__create_backup(
                    $_POST["user_id"]
                )
        ;
    }
}