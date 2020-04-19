<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $length = count($nums);

        $slow_pointer = 0;
        for ($fast_pointer = 1; $fast_pointer < $length; $fast_pointer++) {
            if ($nums[$fast_pointer] != $nums[$slow_pointer]) {
                $slow_pointer++;
                $nums[$slow_pointer] = $nums[$fast_pointer];
            }
        }

        return $slow_pointer + 1;
    }
}
