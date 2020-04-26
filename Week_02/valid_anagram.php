<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {

        if (strlen($s) != strlen($t)) {
            return false;
        }

        $arr = [];

        for ($i = 0; $i < strlen($s); $i++) {
            $arr[$s[$i]] = ($arr[$s[$i]] ?? 0) + 1;
            $arr[$t[$i]] = ($arr[$t[$i]] ?? 0) - 1;
        }

        foreach ($arr as $k => $v) {
            if ($v != 0) {
                return false;
            }
        }

        return true;
    }
}
