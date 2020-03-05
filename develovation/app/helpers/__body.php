<?php

/**
 * Get The Body Class
 */
function __get_body_class()
{
    echo
        implode(
            " ",
            __get_controller_var("__body_class")
        )
    ;
}