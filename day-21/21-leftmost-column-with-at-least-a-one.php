<?php

class BinaryMatrix
{
    public $matrix = [];

    public function __construct($matrix)
    {
        $this->matrix = $matrix;
    }

    public function get($x, $y)
    {
        return $this->matrix[$x][$y];
    }

    public function dimensions()
    {
        return [
            count($this->matrix),
            count($this->matrix[0])
        ];
    }
}

class Solution
{
    /**
     * @param BinaryMatrix $binaryMatrix
     * @return Integer
     */
    public function leftMostColumnWithOne($binaryMatrix)
    {
        [$xDimension, $yDimension] = $binaryMatrix->dimensions();

        $x = $xDimension - 1;
        $y = $yDimension - 1;

        while ($x >= 0 && $y >= 0) {
            if ($binaryMatrix->get($x, $y)) {
                $y--;
            } else {
                $x--;
            }
        }

        if ($y === $yDimension - 1) {
            return -1;
        }

        return $y + 1;
    }
}
