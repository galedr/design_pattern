<?php

require_once 'Observer.php';
require_once 'Subject.php';

$subject = new ProcessOne();
$observerA = new InsertIntoTableOne();
$observerB = new InsertTableThree();
$subject->addObserver($observerA);
$subject->addObserver($observerB);
$subject->notify();

$observerA->response();
$observerB->response();
