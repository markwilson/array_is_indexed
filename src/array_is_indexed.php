<?php

/**
 * Check if array is sequentially indexed
 *
 * @return boolean
 */
function array_is_indexed(array $array) {
    return array_keys($array) === range(0, count($array) - 1);
}
