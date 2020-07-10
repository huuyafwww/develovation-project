<?php

/**
 * View Model
 */
class __M_Login_History extends __Model{

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
     * Get Login History
     *
     * @access public
     */
    public function __get_login_history()
    {
        return
            $this->__db
                ::table(
                    "login_history"
                )
                ->where(
                    "user_id",
                    "=",
                    __get_session(LOGIN_VAR)
                )
                ->get(
                    [
                        "ip",
                        "time",
                        "device",
                        "type",
                        "os",
                        "browser_name",
                        "browser_version",
                    ]
                )
                ->toArray()
        ;
    }

}