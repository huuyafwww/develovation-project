<?php

/**
 * Get a Encrypt Token
 *
 * @return string
 */
function __get_encrypt_token()
{
    return openssl_encrypt(
        TOKEN,
        OPENSSL_METHOD,
        TOKEN_KEY
    );
}

/**
 * Get a Uniq Token
 *
 * @return string
 */
function __get_uniq_token()
{
    return uniqid(
        bin2hex(
            random_bytes(1)
        )
    );
}