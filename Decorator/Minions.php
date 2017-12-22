<?php

interface IMinion
{
    public function create();
}

class Goblin implements IMinion
{
    public function create()
    {
        return '哥布林出現了！';
    }
}

class Troll implements IMinion
{
    public function create()
    {
        return '巨魔出現了！';
    }
}

class Mario implements IMinion
{
    public function create()
    {
        return '馬力歐出現了！';
    }
}