<?php

/**
 * Get The __Controller Varivale
 * 
 * @param string $__var_name
 */
function __get_controller_var(
    string $__var_name
)
{
    return __Controller::$__vars[$__var_name];
}