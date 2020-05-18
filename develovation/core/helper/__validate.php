<?php

/**
 * All of the Arguments do Sanitize
 *
 * @param string|array $__stringer
 * @return string|array
 */
function __h(
    $__stringer
)
{
    if(
        is_array($__stringer)
        ||
        !$__stringer = htmlspecialchars($__stringer)
    )
    {
        foreach($__stringer as &$__string){
            $__string = htmlspecialchars($__string);
        }
    }
    return $__stringer;
}

/**
 * Request Param Validater
 *
 * @param array $__params
 * @param bool $__is_post
 * @return bool
 */
function __request_param_validater(
    array $__params,
    bool $__is_post = true
): bool
{
    $__method = $__is_post ? $_POST : $_GET;

    foreach($__params as $__param){
        if(!key_exists($__param,$__method)){//存在しない時
            return false;
        }
    }
    return true;
}