<?php

/**
 * Register Single SESSION
 *
 * @param string $__session_name
 * @param mixed $__session_value
 */
function __set_session(
    string $__session_name,
    $__session_value = true
)
{
    $_SESSION[$__session_name] = $__session_value;
}

/**
 * Register Multi SESSION
 *
 * @param array $__sessions
 */
function __set_sessions(
    array $__sessions
)
{
    foreach(
        $__sessions
        as $__session_name
        => $__session_value
    )
    {
        $_SESSION[$__session_name] = $__session_value;
    }
}

/**
 * Delete Single SESSION
 *
 * @param string $__session_name
 */
function __delete_session(
    string $__session_name
)
{
    unset($_SESSION[$__session_name]);
}

/**
 * Delete Multi SESSION
 *
 * @param array $__session_names
 */
function __delete_sessions(
    array $__session_names
)
{
    foreach($__session_names as $__session_name)
    {
        unset($_SESSION[$__session_name]);
    }
}

/**
 * SESSION Destroy for Safe
 */
function __end_session()
{
    $_SESSION = [];
    session_destroy();
    unset($_COOKIE[SESSION_NAME]);
}

/**
 * Get Session Token
 *
 * @return string
 */
function __get_session_token(): string
{
    return $_SESSION[SESSION_TOKEN_NAME];
}

/**
 * Get Encrypt Session Token
 *
 * @return string
 */
function __get_e_session_token(): string
{
    return $_SESSION[SESSION_E_TOKEN_NAME];
}

/**
 * Get Single SESSION Value
 *
 * @param string $__session_name
 * @return mixed
 */
function __get_session(
    string $__session_name
)
{
    return $_SESSION[$__session_name];
}

/**
 * Get ALL SESSION
 *
 * @return array
 */
function __get_sessions(): array
{
    return $_SESSION;
}

/**
 * Get ALL SESSION Name List
 *
 * @return array
 */
function __get_session_names(): array
{
    return array_keys($_SESSION);
}

/**
 * If SESSION Name Exists
 *
 * @param string $__session_name
 * @return bool
 */
function __session_name_exists(
    string $__session_name
): bool
{
    return isset($_SESSION[$__session_name]);
}