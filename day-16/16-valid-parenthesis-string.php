<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkValidString($s) {
        $stack = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $letter = $s[$i];
            if ($letter === '(' || $letter === '*') {
                $stack++;
            } else if ($letter === ')') {
                if ($stack < 1) {
                    return false;
                } else {
                    $stack--;
                }
            }
        }

        $stack = 0;
        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $letter = $s[$i];
            if ($letter === ')' || $letter === '*') {
                $stack++;
            } else if ($letter === '(') {
                if ($stack < 1) {
                    return false;
                } else {
                    $stack--;
                }
            }
        }

        return true;
    }
}
