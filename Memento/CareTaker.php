<?php
// 保存Memento
interface ICareTaker
{
    public function setMemento(IMemento $memento);
    public function getMemento();
}

class CareTaker implements ICareTaker
{
    private $memento;

    public function setMemento(IMemento $memento)
    {
        $this->memento = $memento;
    }

    public function getMemento()
    {
        return $this->memento;
    }
}