<?php

abstract class MinionDecorator implements IMinion
{
    protected $minion;

    public function __construct(IMinion $minion)
    {
        $this->minion = $minion;
    }

    abstract public function create();
}

class Venom extends MinionDecorator
{
    public function create()
    {
        return '猛毒的' . $this->minion->create();
    }
}

class Speedy extends MinionDecorator
{
    public function create()
    {
        return '迅捷的' . $this->minion->create();
    }
}

class Strong extends MinionDecorator
{
    public function create()
    {
        return '強壯的' . $this->minion->create();
    }
}