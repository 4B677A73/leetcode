<?php

class Solution
{

/**
 * @param int[] $cardPoints
 * @param int $k
 * @return Integer
 */
    public function maxScore($cardPoints, $k)
    {
        if (count($cardPoints) == $k) {
            return array_sum($cardPoints);
        }

        $maxScore = array_sum(array_slice($cardPoints, 0, $k));

        $tmpK = $k - 1;
        $tmpScore = $maxScore;

        for ($i = count($cardPoints) - 1; $tmpK >= 0; $i--) {
            $tmpScore -= $cardPoints[$tmpK];
            $tmpScore += $cardPoints[$i];

            $maxScore = max($tmpScore, $maxScore);
            $tmpK--;
        }

        return $maxScore;
    }
}
