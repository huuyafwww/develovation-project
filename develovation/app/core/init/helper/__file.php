<?php

/**
 * Saving File
 *
 * @param string $__file
 * @param mixed $__data
 * @param bool $__is_append
 * @return bool
 */
function __save_file(
    string $__file,
    $__data,
    bool $__is_append = true
): bool
{
    $__flags = ($__is_append ? FILE_APPEND | LOCK_EX : LOCK_EX);
    return 
        file_put_contents(
            $__file,
            $__data,
            $__flags
        ) !== false;
}

/**
 * Delete Files
 *
 * @param string|array $__dirs
 * @param string $__extension
 */
function __delete_files(
    $__dirs,
    string $__extension = "*"
)
{
    if(!is_array($__dirs))
    {
        $__files = 
            __get_file_list(
                $__dirs,
                $__extension
            )
        ;
        foreach($__files as $__file){
            unlink($__file);
        }
    }
    else
    {
        foreach($__dirs as $__dir)
        {
            $__files = 
                __get_file_list(
                    $__dir,
                    $__extension
                )
            ;
            foreach($__files as $__file)
            {
                unlink($__file);
            }
        }
    }
}