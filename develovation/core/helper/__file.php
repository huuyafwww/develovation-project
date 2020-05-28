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
    return
        file_put_contents(
            $__file,
            $__data,
            (
                $__is_append
                ? FILE_APPEND
                | LOCK_EX
                : LOCK_EX
            )
        ) !== false
    ;
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

/**
 * Get Base64 Image String for Html img tag src
 *
 * @param string $__img_path
 * @return string
 */
function __get_build_img2base64(
    string $__img_path
)
{
    return
        "data:"
        .__get_img_mime_type(
            $__img_path
        )
        .";base64,"
        .__get_img2base64(
            $__img_path
        )
    ;
}

/**
 * Get Image Mime Type
 *
 * @param string $__img_path
 * @return string
 */
function __get_img_mime_type(
    string $__img_path
):string
{
    return image_type_to_mime_type(
        exif_imagetype($__img_path)
    );
}

/**
 * Get Image to Base64
 *
 * @param string $__img_path
 * @return string
 */
function __get_img2base64(
    string $__img_path
):string
{
    return base64_encode(
        file_get_contents(
            $__img_path
        )
    );
}