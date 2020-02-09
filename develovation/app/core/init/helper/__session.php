<?php

/**
 * Register Single SESSION
 *
 * @param string $session_name
 * @param mixed $session_value
 */
function __set_session(
    string $session_name,
    $session_value = true
)
{
    $_SESSION[$session_name] = $session_value;
}

/**
 * Register Multi SESSION
 *
 * @param array $sessions
 */
function __set_sessions(
    array $sessions
)
{
    foreach($sessions as $session_name => $session_value)
    {
        $_SESSION[$session_name] = $session_value;
    }
}

/**
 * Delete Single SESSION
 *
 * @param string $session_name
 */
function __delete_session(
    string $session_name
)
{
    unset($_SESSION[$session_name]);
}

/**
 * Delete Multi SESSION
 *
 * @param array $session_names
 */
function __delete_sessions(
    array $session_names
)
{
    foreach($session_names as $session_name)
    {
        unset($_SESSION[$session_name]);
    }
}

/**
 * Safe SESSION Destroy
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
 * @param string $session_name
 * @return mixed
 */
function __get_session(
    string $session_name
)
{
    return $_SESSION[$session_name];
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
 * @param string $session_name
 * @return bool
 */
function __session_name_exists(
    string $session_name
): bool
{
    return isset($_SESSION[$session_name]);
}