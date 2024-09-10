<?php 
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    
    function addTwoNumbers($l1, $l2) 
    {
        $dummy = new ListNode();

        $current = $dummy;
        $carry = 0;
        while ($l1 !== null || $l2 !== null || $carry > 0) {
            $val1 = ($l1 !== null) ? $l1->val : 0;
            $val2 = ($l2 !== null) ? $l2->val : 0;

            $total = $val1 + $val2 + $carry;
            $carry = intval($total / 10);
            $current->next = new ListNode($total % 10);

            $current = $current->next;
        
            if ($l1 !== null) $l1 = $l1->next;
            if ($l2 !== null) $l2 = $l2->next;
        }

        return $dummy->next;
    }
}