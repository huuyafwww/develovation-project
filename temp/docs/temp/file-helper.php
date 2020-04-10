<?php

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
        require_once($__target_path);
    }
}