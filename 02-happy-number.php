<?php

class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $digits = str_split($n);
        $newNumber = 0;

        foreach ($digits as $val) {
            $newNumber += $val ** 2;
        }

        if ($newNumber === 1) {
            return true;
        } else if ($newNumber === 4) {
            return false;
        } else {
            return $this->isHappy($newNumber);
        }
    }
}