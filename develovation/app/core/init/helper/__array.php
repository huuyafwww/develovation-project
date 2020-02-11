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
 * Empty Index Delete
 * 
 * @param array $__array
 * @return array
 */
function __empty_index_delete(
    array $__array
): array
{
    return array_values(
        array_filter(
            $__array,
            "strlen"
        )
    );
}