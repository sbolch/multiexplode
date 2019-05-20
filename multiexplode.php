<?php

/**
 * @param array $delimiters
 * @param string $string
 * @param int $limit
 * @return array
 */
function multiexplode(array $delimiters, $string, $limit = PHP_INT_MAX) {
    return explode(
        $delimiters[0],
        str_replace($delimiters, $delimiters[0], $string),
        $limit
    );
}