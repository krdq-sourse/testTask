<?php
/**
 *
 * Альтернативная функция array_sum, с рекурсией
 * @param $array
 * @return int|mixed
 */
function array_sum_alternative($array)
{
    return sum($array, getCount($array));
}

/**
 *
 * альтернативная функция count
 * @param $array
 * @return int
 */
function getCount($array): int
{
    $count = 0;
    foreach ((array)$array as $item) {
        $count++;
    }
    return $count;
}

/**
 * рекурсивный подсчет суммы массива
 * @param $array
 * @param $count
 * @return int|mixed
 */
function sum($array, $count)
{
    $result = 0;
    for ($i = 0; $i < $count; $i++) {
        $iCount = getCount($array[$i]);
        if ($iCount > 1) {
            $result += sum($array[$i], $iCount);
        } else {
            $value = (array)$array[$i];
            $result += $value[0];
        }
    }
    return $result;
}



