<?php

interface IObserver
{
    public function update(ISubject $subject);
}

class ChikanA implements IObserver
{
    protected $status;

    public function update(ISubject $subject)
    {
        $this->status = $subject->getStatus();
        echo '癡漢A收到' . $this->status . '<br>';
    }
}

class ChikanB implements IObserver
{
    protected $status;

    public function update(ISubject $subject)
    {
        $this->status = $subject->getStatus();
        echo '癡漢B收到' . $this->status . '<br>';
    }
}