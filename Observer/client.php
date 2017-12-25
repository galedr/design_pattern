<?php

require 'Subject.php';
require 'Observer.php';

$subject = new HotGirlTracer();
$subject->setStatus('正妹一號接近！');

$observerA = new ChikanA();
$observerB = new ChikanB();

$subject->addObserver($observerA);
$subject->addObserver($observerB);
$subject->notifyObserver();

$subject->setStatus('正妹二號接近！');
$subject->removeObserver($observerB);
$subject->notifyObserver();
