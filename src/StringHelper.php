<?php

namespace App;

class StringHelper
{
    /**
     * Inversează un string
     */
    public function reverse($string)
    {
        return strrev($string);
    }

    /**
     * Numără cuvintele dintr-un string
     */
    public function countWords($string)
    {
        return str_word_count($string);
    }

    /**
     * Verifică dacă string-ul este palindrom
     */
    public function isPalindrome($string)
    {
        $string = strtolower(preg_replace('/[^a-z0-9]/i', '', $string));
        return $string === strrev($string);
    }

    /**
     * Convertește la uppercase
     */
    public function toUpperCase($string)
    {
        return strtoupper($string);
    }

    /**
     * Convertește la lowercase
     */
    public function toLowerCase($string)
    {
        return strtolower($string);
    }
}