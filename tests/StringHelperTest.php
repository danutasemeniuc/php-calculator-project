<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\StringHelper;

class StringHelperTest extends TestCase
{
    private $helper;

    protected function setUp(): void
    {
        $this->helper = new StringHelper();
    }

    public function testReverse()
    {
        $result = $this->helper->reverse("hello");
        $this->assertEquals("olleh", $result);
    }

    public function testCountWords()
    {
        $result = $this->helper->countWords("Hello world from PHP");
        $this->assertEquals(4, $result);
    }

    public function testIsPalindromeTrue()
    {
        $this->assertTrue($this->helper->isPalindrome("racecar"));
        $this->assertTrue($this->helper->isPalindrome("A man a plan a canal Panama"));
    }

    public function testIsPalindromeFalse()
    {
        $this->assertFalse($this->helper->isPalindrome("hello"));
    }

    public function testToUpperCase()
    {
        $result = $this->helper->toUpperCase("hello world");
        $this->assertEquals("HELLO WORLD", $result);
    }

    public function testToLowerCase()
    {
        $result = $this->helper->toLowerCase("HELLO WORLD");
        $this->assertEquals("hello world", $result);
    }
}