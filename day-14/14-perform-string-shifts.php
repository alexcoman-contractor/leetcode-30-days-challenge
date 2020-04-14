<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[][] $shift
     * @return String
     */
    function stringShift($s, $shift) {
        $count = strlen($s);

        foreach ($shift as $directions) {
            if ($directions[0] === 0) {
                $shifted = substr($s, 0, $directions[1]);
                $extractedString = substr($s, $directions[1], $count);

                $s = $extractedString . $shifted;
            } else if ($directions[0] === 1) {
                $shifted = substr($s, $count - $directions[1], $count);
                $extractedString = substr($s, 0, $count - $directions[1]);

                $s = $shifted . $extractedString;
            }
        }

        return $s;
    }
}
