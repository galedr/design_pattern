<?php

require 'Memento.php';
require 'Originator.php';
require 'CareTaker.php';

$oriData = 'state01-Data';
echo '=====原始資料===== <br>';
echo $oriData . '<br>';
$origin = new Originator($oriData);
$careTaker = new CareTaker();

$careTaker->setMemento($origin->createMemento());

$oriData = 'state02-Data';
echo '=====變更原始資料為===== <br>';
echo $oriData . '<br>';
$origin->recoverMemento($careTaker->getMemento());
$oriData = $origin->getState();
echo '=====回復Memento備份後===== <br>';
echo $oriData . '<br>';

