<?php
/**
 * Trim Extra Brackets
 *
 *
 * todo add description
 *
 * string $sting
 * @param string $sting
 * @return string
 * @throws Exception If given string is empty
 */
function trimExtraBrackets(string $sting): string
{
    if (!$sting) {
        throw new Exception("Given string is empty");
    }
    $countSymbols = mb_strlen($sting);
    $key = 0;
    while ($key < $countSymbols) {
        $symbol = mb_substr($sting, $key, 1);
        if (in_array($symbol, [")", "("])) {
            $next = mb_substr($sting, $key + 1, 1);
            $str = mb_substr($sting, 0, $key + 1);
            while (mb_strlen($sting) >= $key && $next == $symbol) {
                $sting = $str . mb_substr($sting, $key + 2);
                $next = mb_substr($sting, $key + 1, 1);
            }
        }
        $key++;
        $countSymbols = mb_strlen($sting);
    }
    return $sting;
}


echo trimExtraBrackets("privet))))) skuchno((");