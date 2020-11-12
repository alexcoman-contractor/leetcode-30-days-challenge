<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $count = count($nums);

        if ($count === 1) {
            return $nums[0] ? 0 : 1;
        }

        for ($i = 0; $i < $count; $i++) {
            if (!in_array($i, $nums)) {
                return $i;
            }
        }

        if ($i + 1 === $count) {
            return $count;
        }
    }
}
