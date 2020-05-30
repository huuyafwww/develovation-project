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

/**
 * Get Api Url
 */
function __get_api_url()
{
    echo
        HTTP_ROOT_URL.
        "api/"
    ;
}

/**
 * Route Uri to Array
 */
function __route_uri2array()
{
    $__routes = ROUTE_URI_ARRAY;
    array_unshift(
        $__routes,
        BASE_DIR_NAME
    );
    return $__routes;
}