<?php

class Solution
{
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function maximalSquare($grid)
    {
        $gridLengthX = count($grid);
        $gridLengthY = count($grid[0]);

        $max = 0;
        $dp = [];

        for ($i = 0; $i < $gridLengthX; $i++) {
            for ($j = 0; $j < $gridLengthY; $j++) {
                if ($i === 0 || $j === 0) {
                    if ($grid[$i][$j] === '1') {
                        $dp[$i][$j] = 1;
                        $max = max($max, 1);
                    } else {
                        $dp[$i][$j] = 0;
                    }
                } else {
                    if ($grid[$i][$j] === '1') {
                        $dp[$i][$j] =
                            min($dp[$i][$j - 1], $dp[$i - 1][$j], $dp[$i - 1][$j - 1]) + 1;
                        $max = max($max, $dp[$i][$j]);
                    } else {
                        $dp[$i][$j] = 0;
                    }
                }
            }
        }

        return $max ** 2;
    }
}
