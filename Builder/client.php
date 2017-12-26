<?php

require 'Builder.php';
require 'Director.php';
require 'ConcreteBuilder.php';

$loser = new Director(new LoserBuilder());
$loser->response();

echo '============================================<br>';

$winner = new Director(new WinnerBuilder());
$winner->response();