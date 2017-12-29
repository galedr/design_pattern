<?php

interface IGameResult
{
    public function getResult(IGameReaction $visitor);
}

class Win implements IGameResult
{
    public function getResult(IGameReaction $visitor)
    {
        return $visitor->getWinReaction($this);
    }
}

class Lose implements IGameResult
{
    public function getResult(IGameReaction $visitor)
    {
        return $visitor->getLostReaction($this);
    }
}