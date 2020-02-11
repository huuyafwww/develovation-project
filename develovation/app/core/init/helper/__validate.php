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