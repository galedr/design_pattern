<?php

interface ICommand
{
    public function execute();
    public function undo();
}

class GetHotArticles implements ICommand
{
    protected $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->getHotArticles();
    }
    public function undo()
    {
        // 最簡單的留空，或是合併使用Memento模式
    }
}

class GetNewestArticles implements ICommand
{
    protected $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->getNewestArticles();
    }
    public function undo()
    {
        // 最簡單的留空，或是合併使用Memento模式
    }
}

class GetSponsored implements ICommand
{
    protected $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->getSponsoredArticles();
    }
    public function undo()
    {
        // 最簡單的留空，或是合併使用Memento模式
    }
}


