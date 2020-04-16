<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $count = count($nums);
        $result = [];
        $left = [0 => 1];
        $right = [$count-1 => 1];

        for ($i = 1; $i < count($nums); $i++) {
            $left[$i] = $nums[$i - 1] * $left[$i - 1];
        }

        for ($i = $count - 2; $i >= 0; $i--) {
            $right[$i] = $nums[$i + 1] * $right[$i + 1];
        }

        for ($i = 0; $i < $count; $i++) {
            $result[$i] = $left[$i] * $right[$i];
        }

        return $result;
    }
}
