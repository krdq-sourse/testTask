<?php

/**
 * Поиск номеров счастливых билетов
 * @return array
 */
function generateLuckyTicketList(): array
{
    $i = 0;
    $aNumbersCount = numberCount();
    $iDelimiter = pow(10, 3);
    $iLeft = 0;
    $iRight = 0;
    $aData = array();
    do {
        $iLeftCount = 0;
        $iLeftSum = array_sum(str_split((string)$iLeft));
        do {
            $iRightSum = array_sum(str_split((string)$iRight));
            if ($iLeftSum == $iRightSum) {
                $iValue = $iLeft * $iDelimiter + $iRight;
                $iLength = strlen((string)$iValue);
                $aData[] = (string)($iLength == 6 ? $iValue : (implode('', array_fill(0, (6 - $iLength), '0')) . $iValue));
                $i++;
                $iLeftCount++;
                if ($iLeftCount >= $aNumbersCount[3][$iLeftSum]) {
                    break;
                }
            }
            $iRight++;
        } while ($iRight < $iDelimiter);
        $iRight = 1;
        $iLeft++;
    } while ($iLeft < $iDelimiter);
    return $aData;
}

/**
 * Расчёт списка возможных вариаций номеров счастливых билетов
 * @return array
 */
function numberCount(): array
{
    $aData = array();
    for ($i = 1; $i <= 3; $i++) {
        $iLength = $i * 9 + 1;
        if ($i == 1) {
            for ($j = 0; $j < $iLength; $j++)
                $aData[$i][$j] = 1;
        } else {
            $iSum = 0;
            $k = 0;
            for (; $k <= $iLength / 2; $k++) {
                $iSum += $aData[$i - 1][$k];
                if ($k >= 10)
                    $iSum -= $aData[$i - 1][$k - 10];
                $aData[$i][$k] = $iSum;
            }
            for (; $k < $iLength; $k++) {
                $aData[$i][$k] = $aData[$i][$iLength - 1 - $k];
            }
        }
    }
    return $aData;
}



