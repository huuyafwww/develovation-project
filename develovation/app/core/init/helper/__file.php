<?php

/**
 * Saving File
 *
 * @param string $file
 * @param mixed $data
 * @param bool $is_append
 * @return bool
 */
function __save_file($file,$data,$is_append = true)
{
    $flags = ($is_append ? FILE_APPEND | LOCK_EX : LOCK_EX);
    return file_put_contents($file,$data,$flags) !== false;
}

/**
 * Delete Files
 *
 * @param string|array $dirs
 * @param string $extension
 */
function __delete_files($dirs,$extension = "*")
{
    if(!is_array($dirs))
    {
        $files = __get_file_list($dirs,$extension);
        foreach($files as $file){
            unlink($file);
        }
    }
    else
    {
        foreach($dirs as $dir)
        {
            $files = __get_file_list($dir,$extension);
            foreach($files as $file)
            {
                unlink($file);
            }
        }
    }
}