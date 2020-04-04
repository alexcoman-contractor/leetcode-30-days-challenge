<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        foreach ($nums as $index => $value) {
            if ($value === 0) {
                unset($nums[$index]);
                $nums[] = 0;
            }
        }

        return $nums;
    }
}