<?php

declare(strict_types=1);

namespace salcode\BoltAction;

use PHPUnit\Framework\TestCase;
use salcode\BoltAction\Unit\Squad;
use salcode\BoltAction\Unit\Tank;

final class OrderTesterTest extends TestCase
{
    public function testPassFail(): void
    {
        $expected = true;
        $twoDiceTotal = 9;

        $tank = new Tank(new Position(170, 120));
        $tank->setMorale(10);

        $orderTester = new OrderTester();
        $this->assertEquals(
            $expected,
            $orderTester->passes($twoDiceTotal, $tank)
        );

        $squad = new Squad([
            new Soldier(new Position(50, 120), 'Rifle'),
            new Soldier(new Position(59, 120), 'Rifle'),
        ]);
        $expected = false;
        $squad->setMorale(8);

        $this->assertEquals(
            $expected,
            $orderTester->passes($twoDiceTotal, $squad)
        );

        $unitStub = $this->createStub(Unit::class);
        $morale = 10;
        $twoDiceTotal = 10;
        $expected = true;
        $unitStub->method('getMorale')
            ->willReturn($morale);
        $this->assertEquals(
            $expected,
            $orderTester->passes($twoDiceTotal, $unitStub)
        );
    }

    /**
     * TestPassFailLooping
     *
     * @param int $twoDiceTotal
     * @param int $morale
     * @param bool $expected
     *
     * @dataProvider passFailLoopingProvider
     */
    public function testPassFailLooping(int $twoDiceTotal, int $morale, bool $expected)
    {
        $orderTester = new OrderTester();

        $unitStub = $this->createStub(Unit::class);
        $unitStub->method('getMorale')->willReturn($morale);

        $this->assertEquals(
            $expected,
            $orderTester->passes($twoDiceTotal, $unitStub)
        );
    }

    public function passFailLoopingProvider()
    {
        return [
            [  7,  9, true ],
            [ 11, 10, false ],
            [  8,  8, true ],
        ];
    }
}
