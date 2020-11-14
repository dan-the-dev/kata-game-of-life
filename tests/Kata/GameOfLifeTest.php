<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\GameOfLife;

class GameOfLifeTest extends TestCase
{
    private $gameOfLife;

    protected function setUp(): void
    {
        $this->gameOfLife = new GameOfLife();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->gameOfLife->handle());
    }
}
