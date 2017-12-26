<?php

require 'Composite.php';

$ship = new BattleShip('WhiteBase');
$robotA = new MobileSuit('Gundum');
$robotB = new MobileSuit('GunTank');

$ship->add($robotA);
$ship->add($robotB);

$ship->react();