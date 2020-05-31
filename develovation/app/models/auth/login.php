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

        // エラー時の挙動を追加する
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
            $this->__insert_login_history()
            AND
            $this->__set_user_session()
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
                        "id",
                        "user_name",
                        "password",
                        "display_name"
                    ]
                )
        ;
    }

    /**
     * Insert Login History
     *
     * @access private
     */
    private function __insert_login_history()
    {
        $__client_ua = $this->__requested_data["client_ua"];
        $__user_info = __get_parsed_ua(
            $__client_ua
        );

        $__user_info = array_merge(
            $__user_info,
            [
                "created_at" => TIME,
                "user_id" => $this->__user->id,
                "ip" => IP_ADDRESS,
                "time" => TIME,
                "requested_ua" => USER_AGENT,
                "client_ua" => $__client_ua,
                "is_ua_match" => USER_AGENT === $__client_ua ? 1 : 0
            ]
        );
        $this->__db
            ::table(
                "login_history"
            )
            ->insert(
                $__user_info
            )
        ;

        return true;
    }

    /**
     * Set User Session
     *
     * @access private
     */
    private function __set_user_session()
    {
        __set_sessions(
            [
                LOGIN_VAR => $this->__user->id,
                "user_name" => $this->__user->user_name,
                "display_name" => $this->__user->display_name,
                "email" => $this->__requested_data["email"]
            ]
        );
        return true;
    }

}