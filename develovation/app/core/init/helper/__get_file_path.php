<?php

/**
 * Echo the App Css Path For Front-End Request
 * 
 * @param string $file
 */
function __get_app_css(
    string $file
)
{
    echo APP_CSS_PATH.$file."?v=".time();
}

/**
 * Echo the App Js Path For Front-End Request
 * 
 * @param string $file
 */
function __get_app_js(
    string $file
)
{
    echo APP_JS_PATH.$file."?v=".time();
}

/**
 * Echo the App Img Path For Front-End Request
 * 
 * @param string $file
 */
function __get_app_img(
    string $file
)
{
    echo APP_IMG_PATH.$file."?v=".time();
}

/**
 * Echo the Lib Css Path For Front-End Request
 * 
 * @param string $file
 */
function __get_lib_css(
    string $file
)
{
    echo LIB_CSS_PATH.$file;
}

/**
 * Echo the Lib Js Path For Front-End Request
 * 
 * @param string $file
 */
function __get_lib_js(
    string $file
)
{
    echo LIB_JS_PATH.$file;
}

/**
 * Echo the Lib Img Path For Front-End Request
 * 
 * @param string $file
 */
function __get_lib_img(
    string $file
)
{
    echo LIB_IMG_PATH.$file;
}
