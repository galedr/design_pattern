<?php
// 儲存Originator 物件的內部狀態
interface IMemento
{
    public function getState();
}

class Memento implements IMemento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}