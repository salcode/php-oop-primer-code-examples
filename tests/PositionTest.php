<?php

declare(strict_types=1);

namespace salcode\BoltAction;

use PHPUnit\Framework\TestCase;

final class PositionTest extends TestCase
{

    public function testGetXYFixedValues(): void
    {
        $x = 5;
        $y = 11;
        $position = new Position($x, $y);
        $this->assertEquals($x, $position->getX());
        $this->assertEquals($y, $position->getY());
    }

    public function testCanNotBeCreatedWithoutCoordinates(): void
    {
        $this->expectException(\ArgumentCountError::class);
        $this->expectException(new Position());
    }

    public function testCanNotBeCreatedWithNonIntegers(): void
    {
        $this->expectException(\TypeError::class);
        $this->expectException(new Position('horse', 'cat'));
    }

    /**
     * TestCanBeCreated
     *
     * @dataProvider getXYDataProvider
     */
    public function testGetXY($x, $y): void
    {
        $position = new Position($x, $y);
        $this->assertInstanceOf(
            Position::class,
            $position
        );
        $this->assertEquals($x, $position->getX());
        $this->assertEquals($y, $position->getY());
    }

    public function getXYDataProvider()
    {
        return [
            [ 0, 0 ],
            [ 3, 5 ],
            [-3, -9],
        ];
    }
}
