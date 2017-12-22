<?php

include 'Handler.php';
include 'Dealer.php';
//處理者實體化

$friend = new FriendZone();
$ambiguous = new AmbiguousZone();
$lover = new LoverZone();

//組合權限順序
$friend->setNext($ambiguous);
$ambiguous->setNext($lover);

$request = new Request('牽手');
$friend->response($request);



