<?php

/**
 * This "__array_rand" is "array_rand" Used Mersenne Twister RNG
 *
 * @param array $__array
 * @return mixed
 */
function __array_rand(
    array $__array
)
{
    return $__array[
        mt_rand(
            0,
            count($__array) - 1
        )
    ];
}

/**
 * Get Search Array key to Target Array Column
 *
 * @param array $__target_array
 * @param array $__search_array
 * @return array|false
 */
function __get_array_key2column(
    array $__target_array,
    array $__search_array
)
{
    foreach(
        $__search_array
        as $__search_val
    )
    {
        if(
            isset(
                $__target_array[$__search_val]
            )
        )
        {
            $__target_array = $__target_array[$__search_val];
        }
        else
        {
            return false;
        }
    }
    return $__target_array;
}