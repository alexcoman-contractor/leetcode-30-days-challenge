<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $value = array_search($target, $nums);

        return $value === false ? -1 : $value;
    }
}
