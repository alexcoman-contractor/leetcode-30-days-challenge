<?php

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function rangeBitwiseAnd($m, $n) {
        while($m < $n) {
            $n = $n & ($n-1);
        }

        return $n;
    }
}
