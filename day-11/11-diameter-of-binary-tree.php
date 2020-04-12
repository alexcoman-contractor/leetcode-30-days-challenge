<?php

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($value)
    {
        $this->val = $value;
    }
}

class Solution
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        $max = 0;

        $this->parse($root, $max);

        return $max;
    }

    function parse($root, &$max)
    {
        if ($root === null) {
            return 0;
        }

        $left = $this->parse($root->left, $max);
        $right = $this->parse($root->right, $max);

        $sum = $left + $right;

        if ($sum > $max) {
            $max = $sum;
        }

        return max($left, $right) + 1;
    }
}
