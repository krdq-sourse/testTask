<?php


/**
 * Функция которая зеркально отражает буквы (A->Z)
 *
 * Только для англиского алфавита
 * @param string $string
 * @return string
 */
function magic_mirror(string $string): string
{
    $alphabet_lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $alphabet_upper = array_map('strtoupper', $alphabet_lower);
    $alphabet = array_merge($alphabet_upper,$alphabet_lower);
    $reversed_alphabet = array_reverse($alphabet);
    $str = strtr($string, array_combine($alphabet, $reversed_alphabet));
    return strtolower($str) ^ strtoupper($str) ^ $str;
}


