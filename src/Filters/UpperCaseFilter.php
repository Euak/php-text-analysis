<?php
namespace TextAnalysis\Filters;

use TextAnalysis\Interfaces\ITokenTransformation;

/**
 * Normalize the text to upper case
 * @author yooper
 */
class UpperCaseFilter implements ITokenTransformation
{

    /**
     * Upper case the word and return it
     * @param string $word
     * @return string
     */
    public function transform(string $word)
    {
        return mb_strtoupper($word);
    }
}
