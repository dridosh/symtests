<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase
{
    public function testItWorks(): void
    {
        if (true) {
            $a=84/2;
        }
        self::assertEquals('42', $a);
    }
    public function testItWorksTheSame(): void
    {
        self::assertSame(42, (int)'42');
    }
}
