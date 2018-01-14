<?php

include 'Handler.php';
include 'Dealer.php';
//處理者實體化

$json = new JsonParser();
$log = new LogParser();
$csv = new CSVParser();

//組合權限順序
$json->setNext($log);
$log->setNext($csv);

$request = new Request('CSV');
$result = $json->response($request);

echo $result;



