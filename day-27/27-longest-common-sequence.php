<?php

class Solution {

    /**
     * @param String $text1
     * @param String $text2
     * @return Integer
     */
    function longestCommonSubsequence($text1, $text2) {
        $dp = [];

        for ($i = 0; $i < strlen($text1); ++$i) {
            for ($j = 0; $j < strlen($text2); ++$j) {
                if ($text1[$i] === $text2[$j]) {
                    $dp[$i + 1][$j + 1] = 1 + (isset($dp[$i][$j]) ? $dp[$i][$j] : 0);
                } else {
                    $dp[$i + 1][$j + 1] = max(
                        isset($dp[$i][$j + 1]) ? $dp[$i][$j + 1] : 0,
                        isset($dp[$i + 1][$j]) ? $dp[$i + 1][$j] : 0
                    );
                }
            }
        }

        return $dp[strlen($text1)][strlen($text2)];
    }
}
