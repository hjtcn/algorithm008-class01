<?php

class ListNode
{
     public $val = 0;
     public $next = null;
     function __construct($val) { $this->val = $val; }
}

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $preHead = new ListNode(0);
        $cur_pointer = $preHead;

        while ($l1 != null &&  $l2 != null) {
            if ($l1->val <= $l2->val) {
                $cur_pointer->next = $l1;
                $l1 = $l1->next;
            } else {
                $cur_pointer->next = $l2;
                $l2 = $l2->next;
            }
            $cur_pointer = $cur_pointer->next;
        }

        $cur_pointer->next = $l1 == null ? $l2 : $l1;

        return $preHead->next;
    }
}
