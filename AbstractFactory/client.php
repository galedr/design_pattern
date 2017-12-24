<?php

require 'MobileSuitFactory.php';
require 'WeaponFactory.php';
require 'ArmorFactory.php';

$gundum = new GundumFactory();
$gundum->getWeapon()->craftWeapon();
$gundum->getArmor()->craftArmor();

$zaku = new ZakuFactory();
$zaku->getWeapon()->craftWeapon();
$zaku->getArmor()->craftArmor();