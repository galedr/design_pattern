<?php

require 'Facade.php';
require 'Methods.php';

$carArticles = new CarArticles();
$sportArticles = new SportArticles();
$mainArticles = new MainNewsArticles();
$facade = new NewsFacade($carArticles, $mainArticles, $sportArticles);
echo $facade->getArticles('car');
echo $facade->getArticles('main');