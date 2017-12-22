<?php
require 'HeaderFactories/HeaderFactory.php';
require 'BodyFactories/BodyFactory.php';
require 'FooterFactories/FooterFactory.php';

echo '組成汽車頻道 <br>';

$header = new CarHeader();
echo $header->getHeader();
$body = new CarBody();
echo $body->getBody();
$footer = new CarFooter();
echo $footer->getFooter();

echo '<br><br>組成體育頻道<br>';

$header = new SportHeader();
echo $header->getHeader();
$body = new SportBody();
echo $body->getBody();
$footer = new SportFooter();
echo $footer->getFooter();

