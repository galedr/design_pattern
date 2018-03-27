<?php

require 'CheckoutMethods.php';
require 'Strategy.php';

$bill = 1000;
$strategy = new CouponFeedBack(new WebATM($bill));
$strategy->move();

echo '<br>';

$strategy = new TenPercentOff(new Coupon($bill));
$strategy->move();

echo '<br>';

$strategy = new Normal(new VISA($bill));
$strategy->move();