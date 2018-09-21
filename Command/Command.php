<?php

interface ICommand
{
    public function execute();
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
}


