<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $sum = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i - 1] > 0) {
                $nums[$i] += $nums[$i - 1];
            }
            $sum = $sum > $nums[$i] ? $sum : $nums[$i];
        }

        return $sum;
    }
}