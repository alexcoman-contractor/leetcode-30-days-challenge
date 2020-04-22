<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function subarraySum($nums, $k) {
        $numsLength = count($nums);
        $sums = [0 => 1];
        $currentSum = 0;
        $count = 0;

        for ($i = 0; $i < $numsLength; $i++) {
            $currentSum += $nums[$i];

            if (isset($sums[$currentSum - $k])) {
                $count += $sums[$currentSum - $k];
            }

            $sums[$currentSum] = isset($sums[$currentSum]) ? $sums[$currentSum] + 1 : 1;
        }

        return $count;
    }
}
