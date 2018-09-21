<?php

require_once 'Observer.php';
require_once 'Subject.php';

$subject = new ProcessOne();
$observerA = new InsertIntoTableOne();
$observerB = new InsertTableTwo();
$observerC = new InsertTableThree();
$subject->addObserver($observerA);
$subject->addObserver($observerC);
$subject->notify();

$observerA->response();
$observerB->response();
$observerC->response();
