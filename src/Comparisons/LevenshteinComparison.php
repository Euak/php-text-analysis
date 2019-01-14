<?php

namespace TextAnalysis\Comparisons;

use TextAnalysis\Interfaces\IDistance;

/**
 * Wrapper for native php's levenshtein
 *
 * @author yooper (yooper)
 */
class LevenshteinComparison implements IDistance
{
    protected $insertCost;
    protected $replaceCost;
    protected $deleteCost;

    /**
     * Customize the insert, replace, and delete cost.
     * @param int $insertCost
     * @param int $replaceCost
     * @param int $deleteCost
     */
    public function __construct(int $insertCost = 1, int $replaceCost = 1, int $deleteCost = 1)
    {
        $this->insertCost = $insertCost;
        $this->replaceCost = $replaceCost;
        $this->deleteCost = $deleteCost;

    }

    /**
     * Return the levenshtein distance, default costs of 1 applied
     * @param string $text1
     * @param string $text2
     * @return int
     */
    public function distance(string $text1, string $text2)
    {
        return levenshtein($text1, $text2, $this->insertCost, $this->replaceCost, $this->deleteCost);
    }
}
