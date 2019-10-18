<?php

declare(strict_types=1);

namespace salcode\BoltAction;

use PHPUnit\Framework\TestCase;
use salcode\BoltAction\Unit\Tank;

final class TankTest extends TestCase
{
    public function testGetPositionWithoutStub(): void
    {
        $position = new Position(30, 120);
        $tank = new Tank($position);
        $this->assertSame(
            $position,
            $tank->getPosition()
        );
    }

    public function testGetPosition(): void
    {
        $positionStub = $this->createStub(Position::class);
        $tank = new Tank($positionStub);
        $this->assertSame(
            $positionStub,
            $tank->getPosition()
        );
    }
}
