<?php

class StackNode {
    public $value;
    public $min;
    public $next;

    function __construct ($value, $min, $next)
    {
        $this->value = $value;
        $this->min = $min;
        $this->next = $next;
    }
}

class MinStack
{
    private $head = null;

    function __construct() {}

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        if ($this->head === null) {
            $this->head = new StackNode($x, $x, null);
        } else if ($x < $this->head->min) {
            $this->head = new StackNode($x, $x, $this->head);
        } else {
            $this->head = new StackNode($x, $this->head->min, $this->head);
        }

        return null;
    }

    /**
     * @return NULL
     */
    function pop()
    {
        $this->head = $this->head->next;

        return null;
    }

    /**
     * @return Integer
     */
    function top()
    {
        return $this->head->value;
    }

    /**
     * @return Integer
     */
    function getMin()
    {
        return $this->head->min;
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
