<?php

require 'PositionMethod.php';
require 'PursueStrategy.php';

$strategy = new PowerStrategy(new Gym());
$strategy->move();

echo '<br>';

$strategy = new ArtStrategy(new Park());
$strategy->move();

echo '<br>';

$strategy = new ForgiveStrategy(new PoliceStation());
$strategy->move();