<?php

/**
 * View Model
 */
class __M_Settings extends __Model{

    /**
     * Model Init
     *
     * @access public
     */
    public function __construct()
    {
        // Run Parent Class Constructor
        parent::__construct();
    }

    /**
     * Get Backup Settings
     *
     * @access public
     */
    public function __get_backup_settings()
    {
        return
            $this->__db
                ::table(
                    "backup_settings"
                )
                ->where(
                    "time",
                    "=",
                    $this->__db
                        ::table(
                            "backup_settings"
                        )
                        ->max("time")
                )
                ->first(
                    [
                        "is_backup",
                        "max_count",
                        "is_backup_sql"
                    ]
                )
        ;
    }

    /**
     * Action Router
     *
     * @access public
     */
    public function __action_router()
    {
        $this->__action_name = $_POST["action"];
        call_user_func(
            [
                $this,
                "__update_"
                .$this->__action_name
            ]
        );
    }

    /**
     * Update User
     *
     * @access private
     */
    private function __update_user()
    {
        // Request Params Checker
        $this->__request_params_checker();

        // When $this->__is_all_params is true,Update Login User Data
        $this->__is_all_params AND $this->__update_user_data();
    }

    /**
     * Update Login User Data
     *
     * @access private
     */
    private function __update_user_data()
    {
        // Get Requested Data
        $this->__get_requested_data();

        // Set *_at Data
        $this->__set_at_data("updated_at");

        $this->__db
            ::table("user")
            ->where(
                "user_name",
                "=",
                __get_session("user_name")
            )
            ->update(
                $this->__requested_data
            )
        ;

        __set_sessions(
            $this->__requested_data
        );

        __redirect(
            HTTP_ROOT_URL.
            "settings/"
        );
    }

    /**
     * Update Backup Settings
     *
     * @access private
     */
    private function __update_backup()
    {
        // Request Params Checker
        $this->__request_params_checker();

        // When $this->__is_all_params is true,Update Backup Settings Data
        $this->__is_all_params AND $this->__update_backup_data();
    }

    /**
     * Update Backup Settings Data
     *
     * @access private
     */
    private function __update_backup_data()
    {
        // Get Requested Data
        $this->__get_requested_data();

        // Set *_at Data
        $this->__set_at_data("created_at");

        // Set User Id
        $this->__requested_data["user_id"] =
            __get_session(LOGIN_VAR)
        ;

        // Set Now TimeStamp
        $this->__requested_data["time"] =
            TIME
        ;

        $this->__db
            ::table("backup_settings")
            ->insert(
                $this->__requested_data
            )
        ;

        __redirect(
            HTTP_ROOT_URL.
            "settings/"
        );
    }

}