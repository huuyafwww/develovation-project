<?php

/**
 * Get Constant
 *
 * @param string $constant_name
 * @return mixed
 */
function __get_define(
    string $constant_name
)
{
    return constant($constant_name);
}

/**
 * Is Constant
 *
 * @param string $constant_name
 * @return bool
 */
function __is_define(
    string $constant_name
):bool
{
    return defined($constant_name);
}