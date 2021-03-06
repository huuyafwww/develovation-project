<?php

/**
 * Load a File By require() or include()
 *
 * @param string $__path
 * @param bool $__is_require
 */
function __load(
    string $__path,
    bool $__is_require = true
)
{
    (
        $__is_require
        OR
        include($__path)
    )
    AND
    require($__path);
}

/**
 * Load a File By require_once() or include_once()
 *
 * @param string $__path
 * @param bool $__is_require
 */
function __load_once(
    string $__path,
    bool $__is_require = true
)
{
    (
        $__is_require
        OR
        include_once($__path)
    )
    AND
    require_once($__path);
}

/**
 * Is Index of Search String from Target String
 *
 * @param string $__target_str
 * @param string $__search_str
 * @return bool
 */
function __is_strpos(
    string $__target_str,
    string $__search_str
): bool
{
    return
        strpos($__target_str,$__search_str) !== false
    ;
}

/**
 * Get File List
 *
 * @param string $__dir
 * @param string $__extension
 * @return array
 */
function __get_file_list(
    string $__dir,
    string $__extension = "*"
): array
{
    return glob(
        rtrim($__dir,"/").
        "/".
        $__extension
    );
}

/**
 * Get All File Path from $dir
 *
 * @param string $__dir
 * @param string $__extension
 * @return array
 */
function __get_all_file_list(
    string $__dir,
    string $__extension = "*"
): array
{
    $__files = __get_file_list(
        $__dir,
        $__extension
    );
    $__list = [];
    foreach($__files as $__file)
    {
        if(is_file($__file))
        {
            $__list[] = $__file;
        }

        if(is_dir($__file))
        {
            $__list = array_merge(
                $__list,
                __get_all_file_list($__file)
            );
        }
    }
    return $__list;
}

/**
 * Load Files
 *
 * @param string|array $__target_paths
 */
function __load_files(
    $__target_paths
)
{
    foreach(
        is_array($__target_paths) ?
            $__target_paths :
            __get_all_file_list($__target_paths)
        as
        $__target_path
    )
    {
        __load_once($__target_path);
    }
}

/**
 * Empty Index Delete
 *
 * @param array $__array
 * @return array
 */
function __empty_index_delete(
    array $__array
): array
{
    return array_values(
        array_filter(
            $__array,
            "strlen"
        )
    );
}

/**
 * Is SSL
 *
 * @return bool
 */
function __is_ssl():bool
{
    return (
        (
            isset($_SERVER["HTTPS"])
            AND
            (
                $_SERVER["HTTPS"] === "on"
                OR
                $_SERVER["HTTPS"] === "1"
            )
        )
        OR
        (
            isset($_SERVER["SSL"])
            AND
            (
                $_SERVER["SSL"] === "on"
            )
        )
        OR
        (
            isset($_SERVER["HTTP_X_FORWARDED_PROTO"])
            AND
            (
                strtolower($_SERVER["HTTP_X_FORWARDED_PROTO"]) === "https"
            )
        )
        OR
        (
            isset($_SERVER["HTTP_X_FORWARDED_PORT"])
            AND
            (
                $_SERVER["HTTP_X_FORWARDED_PORT"] === "443"
            )
        )
        OR
        (
            isset($_SERVER["SERVER_PORT"])
            AND
            (
                $_SERVER["SERVER_PORT"] === "443"
            )
        )
    );
}