<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    public function rotate(&$nums, $k) {
        $len = count($nums);
        $k %= $len;

        $this->reverse($nums, 0, $len - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $len - 1);

    }

    public function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            $temp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $temp;
            $start++;
            $end--;
        }
    }
}
