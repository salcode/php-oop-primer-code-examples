<?php

/**
 * Artillery.
 *
 * @package   salcode/BoltAction
 * @author    Sal Ferrarello <sal@ironcodestudio.com>
 * @copyright 2019 Iron Code Studio
 * @license   Apache 2.0
 */

declare(strict_types=1);

namespace salcode\BoltAction\Unit;

use salcode\BoltAction\{Model, MoraleTrait, Unit};

class Artillery extends Model implements Unit
{
    use MoraleTrait;
}
