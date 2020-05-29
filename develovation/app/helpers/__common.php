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

/**
 * Insert Input hidden
 *
 * @param string $__name
 * @param string $__value = ""
 * @param string $__id = ""
 */
function __insert_input_hidden(
    string $__name,
    string $__value = "",
    string $__id = ""
)
{
    echo '
        <input
            id="'.$__id.'"
            type="hidden"
            name="'.$__name.'"
            value="'.$__value.'"
        >
    ';
}