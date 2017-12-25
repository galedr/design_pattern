<?php

interface ISubject
{
    public function addObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
    public function notifyObserver();
}

class HotGirlTracer implements ISubject
{
    protected $observers = [];
    protected $subjectStatus;

    public function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer)
    {
        unset($this->observers[array_search($observer, $this->observers)]);
    }

    public function notifyObserver()
    {
        // 迴圈把自己注入所有array裡的觀察者
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setStatus($status)
    {
        $this->subjectStatus = $status;
    }

    public function getStatus()
    {
        return $this->subjectStatus;
    }
}