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

        // When $this->__is_all_params is true,Login User
        $this->__is_all_params AND $this->__update_user_data();
    }

    /**
     * Update User Data
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

}