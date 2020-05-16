<?php

/**
 * Echo the App Css Path For Front-End Request
 *
 * @param string $__file
 */
function __get_app_css(
    string $__file
)
{
    echo APP_CSS_PATH.$__file."?v=".TIME;
}

/**
 * Echo the App Js Path For Front-End Request
 *
 * @param string $__file
 */
function __get_app_js(
    string $__file
)
{
    echo APP_JS_PATH.$__file."?v=".TIME;
}

/**
 * Echo the Page Js Path For Front-End Request
 *
 * @param string $__file
 */
function __get_page_js()
{
    echo
        APP_JS_PATH.
        BASE_DIR.
        WEB_URI_PATH_NAME.
        ".js?v=".
        TIME
    ;
}

/**
 * Echo the App Img Path For Front-End Request
 *
 * @param string $__file
 */
function __get_app_img(
    string $__file
)
{
    echo APP_IMG_PATH.$__file."?v=".TIME;
}

/**
 * Echo the Lib Css Path For Front-End Request
 *
 * @param string $__file
 */
function __get_lib_css(
    string $__file
)
{
    echo LIB_CSS_PATH.$__file;
}

/**
 * Echo the Lib Js Path For Front-End Request
 *
 * @param string $__file
 */
function __get_lib_js(
    string $__file
)
{
    echo LIB_JS_PATH.$__file;
}

/**
 * Echo the Lib Img Path For Front-End Request
 *
 * @param string $__file
 */
function __get_lib_img(
    string $__file
)
{
    echo LIB_IMG_PATH.$__file;
}
