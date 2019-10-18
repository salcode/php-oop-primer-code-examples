<?php

declare(strict_types=1);

use salcode\BoltAction\OrderTester;
use salcode\BoltAction\Position;
use salcode\BoltAction\Soldier;
use salcode\BoltAction\Unit\Artillery;
use salcode\BoltAction\Unit\Squad;
use salcode\BoltAction\Unit\Tank;
use salcode\BoltAction\Unit\Tank\M18Hellcat;

require __DIR__ . '/vendor/autoload.php';

$position = new Position(120, 50);
printf(
    'Coordinates: %1$s, %2$s',
    $position->getX(),
    $position->getY()
);

echo "\nHi\n";

$tank = new Tank(new Position(170, 120));
printf(
    'Tank Coordinates: %1$s, %2$s',
    $tank->getPosition()->getX(),
    $tank->getPosition()->getY()
);
echo "\n";
printf(
    'Tank Morale is: %s',
    $tank->getMorale()
);

echo "\n\n";

$squad = new Squad([
    new Soldier(new Position(50, 120)),
    new Soldier(new Position(59, 120)),
]);
echo "Squad Morale: " . $squad->getMorale() . "\n";

$orderTester = new OrderTester();
if ($orderTester->passes(10, $squad)) {
    echo "Squad passes order test with a 10";
} else {
    echo "Squad fails order test with a 10";
}
echo "\n\n";

printf(
    'Tank Morale is: %s',
    $tank->getMorale()
);

echo "\n";
if ($orderTester->passes(9, $tank)) {
    echo "Tank passes order test with a 9";
} else {
    echo "Tank fails order test with a 9";
}
echo "\n\n";

$m18Hellcat = new M18Hellcat(new Position(200, 120));
if ($orderTester->passes(5, $m18Hellcat)) {
    echo "M18 Hellcat passes order test with a 5";
} else {
    echo "M18 Hellcat fails order test with a 5";
}
echo "\n\n";
$artillery = new Artillery(new Position(50,120));
echo "\n\n";
echo "End\n";
