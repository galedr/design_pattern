<?php

require 'GameResult.php';
require 'GameReaction.php';

$win = new Win();
$lose = new Lose();

echo $win->getResult(new SlotGameReaction()) . '<br>';
echo $win->getResult(new CardGameReaction()) . '<br>';
echo $lose->getResult(new StampGameReaction());

