<?php

require 'Invoker.php';
require 'Command.php';
require 'Receiver.php';

$getter = new ArticleGetter();
$comic = new ComicArticles();
$game = new GameArticles();

$hot = new GetHotArticles($comic);
$newest = new GetNewestArticles($comic);

$getter->setCommand($hot);
$getter->setCommand($newest);
$getter->setCommand(new GetSponsored($comic));
$getter->setCommand(new GetHotArticles($game));

$result = $getter->execute();
print_r($result);
