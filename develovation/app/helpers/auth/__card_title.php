<?php

/**
 * Get Auth Page Card Title
 */
function __get_card_title()
{
    require_once(AUTH_CARD_TITLE_CONFIG_FILE);
    echo $__auth_card_titles[NOW_REQUEST_FILE_NAME];
}