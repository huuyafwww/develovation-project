<?php

/**
 * Raw User Agent to Detail User Info
 *
 * @param string $__raw_user_agent = USER_AGENT
 */
function __get_parsed_ua(
    string $__raw_user_agent = USER_AGENT
)
{
    $__ua = new WhichBrowser\Parser(
        USER_AGENT
    );

    return [
        "device" => $__ua->device->model,
        "type" => $__ua->device->type,
        "os" => $__ua->os->alias,
        "browser_name" => $__ua->browser->name,
        "browser_version" => intval($__ua->browser->version->value)
    ];
}