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
     * @param Integer[] $preorder
     * @return TreeNode
     */
    function bstFromPreorder($preorder)
    {
        $numberOfLeafs = count($preorder);

        return $this->constructTree($preorder, 0, $numberOfLeafs - 1);
    }

    function constructTree($preorder, $start, $end)
    {
        if ($start > $end) {
            return null;
        }

        $node = new TreeNode($preorder[$start]);

        for ($i = $start; $i <= $end; $i++) {
            if ($preorder[$i] > $node->val) {
                break;
            }
        }

        $node->left = $this->constructTree($preorder, $start + 1, $i - 1);
        $node->right = $this->constructTree($preorder, $i, $end);

        return $node;
    }
}

