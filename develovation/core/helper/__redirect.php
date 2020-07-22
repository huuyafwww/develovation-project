<?php

/**
 * To Redirect and Exit
 *
 * @var string $__to
 */
function __redirect(
    string $__to
)
{
    header(
        "Location: ".
        $__to
    );
    exit;
}