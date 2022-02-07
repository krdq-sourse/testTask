<?php
require_once "/word_count.php";

/**
 * Функция возвращает уникальные слова в тексте
 * @param string $text
 * @return array
 */
function getUniqueWords(string $text): array
{
    $array =  getCountOfWordsInText($text);
    return array_keys(array_filter($array, function ($value) {
        return $value == 1;
    }));
}


