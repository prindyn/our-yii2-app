<?php

//declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function getResult()
    {
        return true;
    }

    public function testRun()
    {
        $this->assertTrue($this->getResult());
    }
}