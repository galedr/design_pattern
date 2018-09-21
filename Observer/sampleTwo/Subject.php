<?php

interface SubjectTwoInterface
{
    public function addObserver(ObserverTwoInterface $observerTwo);
    public function removeObserver(ObserverTwoInterface $observerTwo);
    public function notify();
}

class ProcessOne implements SubjectTwoInterface
{
    protected $observer;
    public $data = 'ProcessOne 產生之資料'; // 假設此class 取得資料，或需要丟給observer 的任何元素，sample 從簡寫死

    public function addObserver(ObserverTwoInterface $observerTwo)
    {
        $this->observer[] = $observerTwo;
    }
    public function removeObserver(ObserverTwoInterface $observerTwo)
    {
        unset($this->observer[array_search($observerTwo, $this->observer)]);
    }
    public function notify()
    {
        foreach ($this->observer as $obserber) {
            $obserber->update(d$this);
        }
    }
}

class ProcessTwo implements SubjectTwoInterface
{
    protected $observer;
    public $data = 'ProcessOne 產生之資料'; // 假設此class 取得資料，或需要丟給observer 的任何元素，sample 從簡寫死

    public function addObserver(ObserverTwoInterface $observerTwo)
    {
        $this->observer[] = $observerTwo;
    }
    public function removeObserver(ObserverTwoInterface $observerTwo)
    {
        unset($this->observer[array_search($observerTwo, $this->observer)]);
    }
    public function notify()
    {
        foreach ($this->observer as $obserber) {
            $obserber->update($this);
        }
    }
}