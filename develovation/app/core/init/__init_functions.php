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
 * @param string $__vars
 */
function __load_once(
    string $__path,
    bool $__is_require = true,
    array $__vars = []
)
{
    empty($__vars) OR extract($__vars);
    (
        $__is_require
        OR
        include_once($__path)
    )
    AND
    require_once($__path);
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