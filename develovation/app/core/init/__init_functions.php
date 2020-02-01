<?php

/**
 * Load a File By require() or include()
 *
 * @param string $path
 * @param bool $is_require
 */
function __load($path,$is_require = true)
{
    (
        $is_require
        OR
        include($path)
    )
    AND
    require($path);
}

/**
 * Load a File By require_once() or include_once()
 *
 * @param string $path
 * @param bool $is_require
 */
function __load_once($path,$is_require = true)
{
    (
        $is_require
        OR
        include_once($path)
    )
    AND
    require_once($path);
}

/**
 * Get File List
 *
 * @param string $dir
 * @param string $extension
 * @return array
 */
function __get_file_list($dir,$extension = "*")
{
    return glob(
        rtrim($dir,"/")."/".$extension
    );
}

/**
 * Get All File Path from $dir
 *
 * @param string $dir
 * @param string $extension
 * @return array
 */
function __get_all_file_list($dir,$extension = "*")
{
    $files = __get_file_list($dir,$extension);
    $list = [];
    foreach($files as $file)
    {
        if(is_file($file))
        {
            $list[] = $file;
        }
        
        if(is_dir($file))
        {
            $list = array_merge(
                $list,
                __get_all_file_list($file)
            );
        }
    }
    return $list;
}

/**
 * Is Index of Search String from Target String
 *
 * @param string $target_str
 * @param string $search_str
 * @return bool
 */
function __is_strpos($target_str,$search_str)
{
    return strpos($target_str,$search_str) !== false;
}