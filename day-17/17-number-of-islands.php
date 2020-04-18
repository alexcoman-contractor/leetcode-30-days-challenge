<?php

class Solution
{
    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid)
    {
        $gridLengthX = count($grid);
        $gridLengthY = count($grid[0]);

        $islandCount = 0;

        for ($i = 0; $i < $gridLengthX; $i++) {
            for ($j = 0; $j < $gridLengthY; $j++) {
                if ($grid[$i][$j] === "1") {
                    $islandCount++;
                    $this->markIsland($grid, $i, $j);
                }
            }
        }

        return $islandCount;
    }

    function markIsland(&$grid, $i, $j)
    {
        if (!isset($grid[$i][$j]) || $grid[$i][$j] === "0") {
            return;
        }

        $grid[$i][$j] = "0";

        $this->markIsland($grid, $i+1, $j);
        $this->markIsland($grid, $i-1, $j);
        $this->markIsland($grid, $i, $j+1);
        $this->markIsland($grid, $i, $j-1);
    }
}
