<?php

/**
 * System Backup Class
 */
class __Backup{

    /**
     * Now Backup Count
     *
     * @access private
     * @var int
     */
    private $__backup_count;

    /**
     * Max Backup Count
     *
     * @access private
     * @var int
     */
    private $__max_backup_count;

    /**
     * Model Class
     *
     * @access private
     * @var __Model
     */
    private $__model;

    /**
     * Backup Init
     *
     * @access public
     */
    public function __construct(
        int $__max_backup_count = MAX_BACKUP_COUNT
    )
    {
        $this->__max_backup_count = $__max_backup_count;

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
        // Get Backup Count
        $this->__get_backup_count();

        // Get Model
        $this->__get_model();
    }

    /**
     * Get Backup Count
     *
     * @access private
     */
    private function __get_backup_count()
    {
        $this->__backup_count =
            count(
                glob(
                    BACKUP_PATH.'*',
                    GLOB_ONLYDIR
                )
            )
        ;
    }

    /**
     * Get Model
     *
     * @access private
     */
    private function __get_model()
    {
        $this->__model = new __Model;
    }

}