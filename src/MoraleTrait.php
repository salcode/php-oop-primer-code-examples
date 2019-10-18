<?php

/**
 * Ambush Trait.
 *
 * @package   salcode/BoltAction
 * @author    Sal Ferrarello <sal@ironcodestudio.com>
 * @copyright 2019 Iron Code Studio
 * @license   Apache 2.0
 */

declare(strict_types=1);

namespace salcode\BoltAction;

trait MoraleTrait
{
    protected $morale = 9;

    public function setMorale(int $morale)
    {
        $this->morale = $morale;
    }

    public function getMorale(): int
    {
        return $this->morale;
    }
}
