<?php

/**
 * Runtime: 4245 ms
 * Memory Usage: 19.7 MB
 */

class Solution
{
    /**
     * @param String[] $words
     * @return Integer
     */
    public function maxProduct($words)
    {
        $max = 0;

        // sort
        foreach ($words as $word) {
            $word = str_split($word);
            sort($word);
            $word = implode($word);
        }

        foreach($words as $for1) {
            foreach($words as $for2) {
                if (!$this->hasSameWords($for1, $for2)) {
                    $max = max($max, strlen($for1) * strlen($for2));
                }
            }
        }

        return $max;
    }

    public function hasSameWords($str1s, $str2s)
    {
        foreach(str_split($str1s) as $str1) {
            if (strpos($str2s, $str1) !== false) {
                return true;
            }
        }
        return false;
    }
}
