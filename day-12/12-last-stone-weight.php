<?php

class Heap extends SplHeap
{

    /**
     * @inheritDoc
     */
    protected function compare($value1, $value2)
    {
        return $value1 > $value2 ? 1 : -1;
    }
}

class Solution
{

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones)
    {
        $heap = new Heap();
        foreach ($stones as $stone) {
            $heap->insert($stone);
        }

        while ($heap->count() > 1) {
            $firstStone = $heap->extract();
            $secondStone = $heap->extract();
            $smash = $firstStone - $secondStone;

            if ($smash > 0) {
                $heap->insert($smash);
            }
        }

        if ($heap->count() === 0) {
            return 0;
        }

        return $heap->extract();
    }
}
