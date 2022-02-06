<?php

/**
 * Альтернативный варинат функции strrev
 * @param string $string
 * @return string
 */
function strrev_alternative(string $string): string
{
    $string = (string)$string;
    $reversed_string = "";
    for ($i = strlen_alternative($string); $i >= 0; $i--) {
        $reversed_string .= $string[$i];
    }
    return $reversed_string;
}

/**
 * Альтернативный варинат функции strlen
 * @param string $string
 * @param int $i
 * @return int
 */
function strlen_alternative(string $string, int $i = 0): int
{
    $string = (string)$string;
    if ($string[$i]) {
        return strlen_alternative($string, ++$i);
    }
    return $i;
}


echo strrev_alternative("Hello world!");
