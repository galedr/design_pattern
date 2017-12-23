<?php

interface IPursue
{
    public function move();
}

class PowerStrategy implements IPursue
{
    protected $position;

    public function __construct(IPosition $position)
    {
        $this->position = $position;
    }

    public function move()
    {
        echo $this->position->locate() . '邊吊單槓邊示愛！ <br>';
    }
}

class ArtStrategy implements IPursue
{
    protected $position;

    public function __construct(IPosition $position)
    {
        $this->position = $position;
    }

    public function move()
    {
        echo $this->position->locate() . '邊堆蒙娜麗莎的沙雕邊示愛！ <br>';
    }
}

class ForgiveStrategy implements IPursue
{
    protected $position;

    public function __construct(IPosition $position)
    {
        $this->position = $position;
    }

    public function move()
    {
        echo $this->position->locate() . '拜託不要告我 .... <br>';
    }
}