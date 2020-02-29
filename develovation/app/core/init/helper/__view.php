<?php

/**
 * Echo Body Class
 */
function __body_class()
{
    echo 
        'class="'.
        __get_body_class().
        '"'
    ;
}

/**
 * Get The Body Class
 * 
 * @return string
 */
function __get_body_class(): string
{
    return 
        implode(
            " ",
            __Controller::$__body_class
        )
    ;
}