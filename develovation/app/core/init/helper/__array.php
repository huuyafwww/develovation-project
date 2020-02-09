<?php

/**
 * This "__array_rand" is "array_rand" Used Mersenne Twister RNG
 *
 * @param array $array
 * @return mixed
 */
function __array_rand(
    array $array
)
{
    return $array[
        mt_rand(
            0,
            count($array) - 1
        )
    ];
}

/**
 * Empty Index Delete
 * 
 * @param array $array
 * @return array
 */
function __empty_index_delete(
    array $array
): array
{
    return array_values(
        array_filter(
            $array,
            "strlen"
        )
    );
}