<?php

/**
 * Model.
 *
 * @package   salcode/BoltAction
 * @author    Sal Ferrarello <sal@ironcodestudio.com>
 * @copyright 2019 Iron Code Studio
 * @license   Apache 2.0
 */

declare(strict_types=1);

namespace salcode\BoltAction;

abstract class Model
{
    protected $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function getPosition(): Position
    {
        return $this->position;
    }
}
