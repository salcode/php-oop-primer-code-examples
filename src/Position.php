<?php

/**
 * Position.
 *
 * @package   salcode/BoltAction
 * @author    Sal Ferrarello <sal@ironcodestudio.com>
 * @copyright 2019 Iron Code Studio
 * @license   Apache 2.0
 */

declare(strict_types=1);

namespace salcode\BoltAction;

class Position
{
    protected $x;
    protected $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }
}
