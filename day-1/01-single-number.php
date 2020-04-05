<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        return array_keys(array_intersect(array_count_values($nums),[1]))[0];
    }
}