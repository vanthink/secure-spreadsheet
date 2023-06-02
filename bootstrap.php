<?php

if (\PHP_VERSION_ID < 72000) {
    if (!function_exists('hash_hmac_algos')) {
        //Before PHP 7.2.0 the only means to get a list of supported hash algorithms has been to call hash_algos() which also returns hash algorithms that are not suitable for hash_hmac().
        function hash_hmac_algos() { return hash_algos(); }
    }
}
if (\PHP_VERSION_ID < 73000) {
    if (!function_exists('is_countable')) {
        function is_countable($var): bool
        {
            return (is_array($var) || is_object($var) || is_iterable($var) || $var instanceof Countable);
        }
    }
}