<?php

include 'Minions.php';
include 'MinionDecorator.php';

$minion = new Goblin();
$epic = new Venom($minion);
echo $epic->create();

$minion = new Venom(new Strong(new Speedy(new Troll())));
echo $minion->create();