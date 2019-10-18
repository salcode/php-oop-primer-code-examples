<?php

/**
 * Order Tester.
 *
 * @package   salcode/BoltAction
 * @author    Sal Ferrarello <sal@ironcodestudio.com>
 * @copyright 2019 Iron Code Studio
 * @license   Apache 2.0
 */

declare(strict_types=1);

namespace salcode\BoltAction;

class OrderTester
{
    public function passes(
        int $twoDiceTotal,
        Unit $unit
    ): bool {
        return $twoDiceTotal <= $unit->getMorale();
    }
}
