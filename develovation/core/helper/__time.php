<?php

/**
 * Time to Date
 *
 * @param string $__time
 * @return string
 */
function __time2date(
    string $__time = TIME
):string
{
    return date(
        "Y年m月d日 H:i:s",
        $__time
    );
}