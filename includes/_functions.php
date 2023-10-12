<?php
/**
 * Returns a new array without duplicates
 *
 * @param array $array - The array
 * @return array - The new array
 */
function removeDuplicates(array $array): array
{
    $newArray = [];
    foreach ($array as $value) {
        if (in_array($value, $newArray)) continue;
        $newArray[] = $value;
    }
    return $newArray;
}