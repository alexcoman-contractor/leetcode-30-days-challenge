<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxLength($nums) {
        $map = [
            0 => -1
        ];
        $max = 0;
        $count = 0;

        for ($i = 0; $i < count($nums); $i++) {
            $count = $count + ($nums[$i] === 1 ? 1 : -1);
            if (array_key_exists($count, $map)) {
                $max = max($max, $i - $map[$count]);
            } else {
                $map[$count] = $i;
            }
        }

        return $max;
    }
}
