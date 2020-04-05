<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $sum = 0;
        $pricesCount = count($prices);

        for ($i = 1; $i < $pricesCount; $i++) {
            if ($prices[$i-1] < $prices[$i]) {
                $sum += $prices[$i] - $prices[$i-1];
            }
        }

        return $sum;
    }
}
