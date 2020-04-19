<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $len_new = $m + $n;

        while ($m && $n) {
            if ($nums1[$m - 1] >= $nums2[$n - 1]) {
                $nums1[$len_new - 1] = $nums1[$m - 1];
                $m--;
            } else {
                $nums1[$len_new - 1] = $nums2[$n - 1];
                $n--;
            }
            $len_new--;
        }

        if ($n > 0) {
            while ($n) {
                $nums1[$n -1] = $nums2[$n - 1];
                $n--;
            }
        }
    }
}
