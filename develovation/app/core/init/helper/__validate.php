<?php

/**
 * All of the Arguments do Sanitize
 *
 * @param string|array $stringer
 * @return string|array
 */
function __h(
    $stringer
)
{
    if(
        is_array($stringer)
        ||
        !$stringer = htmlspecialchars($stringer)
    )
    {
        foreach($stringer as &$string){
            $string = htmlspecialchars($string);
        }
    }
    return $stringer;
}