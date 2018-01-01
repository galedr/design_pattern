<?php

require 'Invoker.php';
require 'Command.php';
require 'Receiver.php';

$getter = new ArticleGetter();
$comic = new ComicArticles();
$game = new GameArticles();

$hot = new GetHotArticles($comic);
$newest = new GetNewestArticles($comic);

$getter->setCommand(0, $hot);
$getter->setCommand(1, $newest);
$getter->setCommand(2, new GetSponsored($comic));
$getter->setCommand(3, new GetHotArticles($game));

$result = $getter->execute(0);
print_r($result);
$result = $getter->execute(1);
print_r($result);
