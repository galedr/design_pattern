<?php

require_once 'Subject.php';
require_once 'Decorator.php';

$m = new Pudding(new Cashew(new BlackTea()));
$c = new Bean(new Cashew(new Pearl(new Pudding(new Coffee()))));
echo $c->getDrink();