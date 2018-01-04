<?php

require 'Abstraction.php';
require 'Implementor.php';

$photo = new PhotoWarehouse();
$music = new MusicWarehouse();
$article = new ArticleWarehouse();

$photoToFormal = new FormalServer($photo);
$photoToFormal->update();

$musicToTest = new TestServer($music);
$musicToTest->update();