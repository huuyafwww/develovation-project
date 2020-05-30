<?php

/**
 * Get Page Title
 */
function __get_title()
{

    $__title = __get_array_key2column(
        require(TITLE_CONFIG_FILE),
        ROUTE_URI_ARRAY
    );

    echo
        $__title !== false ?
        $__title :
        "404 Not Found"
    ;
}
