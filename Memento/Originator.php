<?php
// 創造新的Memento 或是回復Memento
interface IOriginator
{
    public function getState();
    public function createMemento();
    public function recoverMemento(IMemento $memento);
}

class Originator implements IOriginator
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

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function recoverMemento(IMemento $memento)
    {
        $this->state = $memento->getState();
    }
}