<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];

        foreach ($strs as $index => $string) {
            $letters = str_split($string);
            sort($letters);
            $sortedString = implode('', $letters);

            if (!isset($result[$sortedString])) {
                $result[$sortedString] = [];
            }

            $result[$sortedString][] = $string;
        }

        return $result;
    }
}
