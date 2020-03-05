<?php

/**
 * Get Page Title
 */
function __get_title()
{
    require_once(TITLE_CONFIG_FILE);
    foreach(
        $__titles
        as
        $__uri
        =>
        $__title
    )
    {
        if(
            __is_strpos(NOW_URI,$__uri)
        )
        {
            echo $__title;
            return;
        }
    }
    echo "404 Not Found";
}
