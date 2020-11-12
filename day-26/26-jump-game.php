<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $lastPost = count($nums) - 1;

        for ($i = count($nums) - 2; $i >= 0; $i--) {
            if ($nums[$i] + $i >= $lastPost) {
                $lastPost = $i;
            }
        }

        return $lastPost == 0;
    }
}
