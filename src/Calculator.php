<?php

namespace App;

class Calculator
{
    /**
     * Adună două numere
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Scade două numere
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Înmulțește două numere
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Împarte două numere
     */
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Nu se poate împărți la zero!");
        }
        return $a / $b;
    }

    /**
     * Calculează puterea unui număr
     */
    public function power($base, $exponent)
    {
        return pow($base, $exponent);
    }

    /**
     * Calculează media unui array de numere
     */
    public function average(array $numbers)
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException("Array-ul nu poate fi gol!");
        }
        return array_sum($numbers) / count($numbers);
    }
}