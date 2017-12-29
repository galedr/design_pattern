<?php

require 'Prototype.php';

$marine = new MakeSpaceMarine();

$spaceMarine = $marine;
$spaceMarine->setWeapon('爆彈槍 + 鏈鋸刀');
$spaceMarine->setArmour('動力裝甲');
$spaceMarine->setName('Space Marine');
$spaceMarine->create();

$heavyMarine = clone $spaceMarine;
$heavyMarine->setWeapon('重型爆彈槍');
$heavyMarine->setName('Heavy Squad Marine');
$heavyMarine->create();

$captain = clone $spaceMarine;
$captain->setWeapon('動力拳套 + 電漿手槍');
$captain->setName('Space Marine Captain');
$captain->create();

echo '=========================================<br>';
echo '如未加clone 前綴，將會改變spaceMarine 本身的屬性 (注意)<br>';
echo '=========================================<br>';

$laserMarine = $spaceMarine;
$laserMarine->setWeapon('重型雷射加農');
$laserMarine->setName('Heavy Squad Marine');
$laserMarine->create();

$spaceMarine->create();



