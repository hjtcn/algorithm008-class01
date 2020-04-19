<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];

        foreach ($nums as $key => $val) {
            $temp = $target - $val;
            if (isset($arr[$temp])) {
                return [$arr[$temp], $key];
            }

            $arr[$val] = $key;
        }

        return ;
    }
}
