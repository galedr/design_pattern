<?php

require 'Mediator.php';
require 'Component.php';

$tank = new Tank('萊因哈特');
$attack = new Attack('源氏');
$support = new Support('慈悲');

$mediator = new Mediator($attack, $tank, $support);

$mediator->notify('nonsence', '今天天氣真好 <br>');
$attack->send('support', '我需要治療！');
$tank->send('attack', '敵人出現，快攻擊！');

