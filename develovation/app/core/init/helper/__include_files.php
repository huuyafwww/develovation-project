<?php

/**
 * If File Exists, Load File
 *
 * @param string $path
 */
function __get_file($path)
{
    file_exists($path) AND __load($path);
}

/**
 * If File Exists, Load Once File
 *
 * @param string $path
 */
function __get_file_once($path)
{
    file_exists($path) AND __load_once($path);
}

/**
 * Loads Header Files
 */
function __get_header()
{
    __load_once(BASE_HEAD_FILE);
    __get_file_once(HEAD_FILE);
}

/**
 * Loads Footer Files
 */
function __get_footer()
{
    __load_once(BASE_FOOT_FILE);
    __get_file_once(FOOT_FILE);
}

/**
 * Load the Component File
 *
 * @param string $path
 */
function __get_component($path)
{
    __load(COMPONENTS_PATH.$path);
}

/**
 * Load the Template File
 */
function __get_template()
{
    __load_once(TEMPLATE_FILE);
}

/**
 * Load the View File
 */
function __get_views()
{
    __load_once(VIEW_FILE);
}