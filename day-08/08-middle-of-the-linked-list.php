<?php

class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $middle = (int)ceil($this->getLenght($head)/2);
        
        for ($i = 0; $i < $middle; $i++) {
            $head = $head->next;
        }
        
        return $head;
    }
    
    function getLenght($node) {
        $length = 0;
        while ($node->next) {
            $length++;
            $node = $node->next;
        }

        return $length;
    }
}