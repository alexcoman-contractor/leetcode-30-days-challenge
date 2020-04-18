<?php

class Solution
{
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function minPathSum($grid)
    {
        $gridLengthX = count($grid);
        $gridLengthY = count($grid[0]);

        for ($i = 1; $i < $gridLengthX; $i++) {
            $grid[$i][0] += $grid[$i-1][0];
        }

        for ($j = 1; $j < $gridLengthY; $j++) {
            $grid[0][$j] += $grid[0][$j-1];
        }

        for ($i = 0; $i < $gridLengthX; $i++) {
            for ($j = 0; $j < $gridLengthY; $j++) {
                $grid[$i][$j] += min($grid[$i-1][$j], $grid[$i][$j-1]);
            }
        }

        return $grid[$gridLengthX-1][$gridLengthY-1];
    }
}
