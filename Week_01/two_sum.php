<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len = count($digits);

        for ($i = $len - 1; $i >= 0; $i--) {
            $temp = $digits[$i] + 1;
            $digits[$i] = $temp % 10;

            if ($temp % 10 != 0) {
                return $digits;
            }
        }
        array_unshift($digits, 1);

        return $digits;
    }
}
