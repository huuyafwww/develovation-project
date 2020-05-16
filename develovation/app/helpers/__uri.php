<?php

/**
 * Get Http Root Url
 *
 * @param string $__uri
 */
function __get_http_url(
    string $__uri
)
{
    echo
        HTTP_ROOT_URL.
        $__uri.
        "/"
    ;
}