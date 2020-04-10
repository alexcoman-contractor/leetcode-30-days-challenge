<?php

class Solution
{

    /**
     * @param String $S
     * @param String $T
     * @return Boolean
     */
    function backspaceCompare($S, $T)
    {
        return $this->parseString($S) === $this->parseString($T);
    }

    function parseString($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            if (isset($string[$i]) && $string[$i] === '#') {
                if ($i === 0) {
                    $string = substr_replace($string, '', $i, 1);
                    $i = $i - 1;
                } else {
                    $string = substr_replace($string, '', $i - 1, 2);
                    $i = $i - 2;
                }
            }
        }

        return $string;
    }
}
