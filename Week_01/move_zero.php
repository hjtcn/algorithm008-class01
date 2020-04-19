<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums)
    {
        $length = count($nums);

        for ($slow = 0, $cur = 0; $cur < $length; $cur++) {
            if ($nums[$cur] != 0) {
                $temp = $nums[$slow];
                $nums[$slow++] = $nums[$cur];
                $nums[$cur] = $temp;
            }
        }
    }
}
