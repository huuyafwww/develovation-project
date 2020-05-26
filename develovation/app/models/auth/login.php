<?php

/**
 * View Model
 */
class __M_Login extends __Model{

    /**
     * User Data
     *
     * @access private
     * @var array
     */
    private $__user;

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
     * Login User
     *
     * @access public
     */
    public function __login_user()
    {
        // Request Params Checker
        $this->__request_params_checker();

        // When $this->__is_all_params is true,Login User
        $this->__is_all_params AND $this->__login();
    }

    /**
     * Login
     *
     * @access private
     */
    private function __login()
    {
        // Get Requested Data
        $this->__get_requested_data();

        // When Exists Target Email Record,User verify
        (
            $this->__is_email_exists() AND $this->__user_verify()
        )
        AND
        (
            $_SESSION[LOGIN_VAR] =
            [
                "user_name" => $this->__user->user_name,
                "display_name" => $this->__user->display_name,
                "email" => $this->__requested_data["email"],
            ]
            AND
            __redirect(
                HTTP_ROOT_URL.
                "home/"
            )
        );
    }

    /**
     * Is Exists Target Email Record
     *
     * @access private
     */
    private function __is_email_exists():bool
    {
        return
            $this->__is_exists(
                "user",
                [
                    "col" => "email",
                    "ope" => "=",
                    "target" => $this->__requested_data["email"]
                ]
            )
        ;
    }

    /**
     * User verify
     *
     * @access private
     */
    private function __user_verify():bool
    {
        // Get User Data
        $this->__get_user();

        // Password verify
        return $this->__password_verify();
    }

    /**
     * Password verify
     *
     * @access private
     */
    private function __password_verify()
    {
        return
            password_verify(
                $this->__requested_data["password"],
                $this->__user->password
            )
        ;
    }

    /**
     * Get User Data
     *
     * @access private
     */
    private function __get_user()
    {
        $this->__user =
            $this->__db
                ::table(
                    "user"
                )
                ->where(
                    "email",
                    "=",
                    $this->__requested_data["email"]
                )
                ->first(
                    [
                        "user_name",
                        "password",
                        "display_name"
                    ]
                )
        ;
    }

}