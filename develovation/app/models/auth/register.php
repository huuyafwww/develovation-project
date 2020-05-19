<?php

/**
 * View Model
 */
class __M_Register extends __Model{

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
     * Register New User
     *
     * @access public
     */
    public function __register_user()
    {
        // Request Params Checker
        $this->__request_params_checker();

        // When $this->__is_all_params is true,Insert New User
        $this->__is_all_params AND $this->__insert_new_user();

    }

    /**
     * Insert New User
     *
     * @access private
     */
    private function __insert_new_user()
    {
        // Get Requested Data
        $this->__get_requested_data();

        // Set *_at Data
        $this->__set_at_data("created_at");

        // Set Default Display Name
        $this->__requested_data["display_name"] =
            $this->__requested_data["user_name"]
        ;

        // Set Default Display Name
        $this->__requested_data["display_name"] =
            $this->__requested_data["user_name"]
        ;

        // Set Hash Password
        $this->__requested_data["password"] =
            password_hash(
                $this->__requested_data["password"],
                PASSWORD_HASH_METHOD
            )
        ;

        // Insert New User
        $this->__db
            ::table(
                "user"
            )
            ->insert(
                $this->__requested_data
            )
        ;

        // Get Last DB Proccess Return Id
        $this->__get_last_id();

        // When Done Register New User,Redirect Login Page
        $this->__done_new_user_register();

    }

    /**
     * When Done New User Register,Redirect Login Page
     *
     * @access private
     */
    private function __done_new_user_register()
    {
        header(
            "Location: ".
            HTTP_ROOT_URL.
            "login/"
        );
        exit;
    }

}