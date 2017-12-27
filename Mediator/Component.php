<?php

interface IComponent
{
    public function send($type, $message);
    public function receive($message);
    public function action();
}

class Attack implements IComponent
{
    protected $name;
    protected $mediator;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setMediator(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function send($type, $message)
    {
        $this->mediator->notify($type, $message, $this->name);
    }
    public function receive($message)
    {
        echo $this->name . '收到' . $message;
    }
    public function action()
    {
        echo $this->name . '收到指令 ... 龍神の剣を喰らえ！ <br>';
    }
}

class Tank implements IComponent
{
    protected $name;
    protected $mediator;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setMediator(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function send($type, $message)
    {
        $this->mediator->notify($type, $message, $this->name);
    }
    public function receive($message)
    {
        echo $this->name . '收到' . $message;
    }
    public function action()
    {
        echo $this->name . '收到指令 ... 朋友不要慌，我罩著你！ <br>';
    }
}

class Support implements IComponent
{
    protected $name;
    protected $mediator;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setMediator(IMediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function send($type, $message)
    {
        $this->mediator->notify($type, $message, $this->name);
    }
    public function receive($message)
    {
        echo $this->name . '收到' . $message;
    }
    public function action()
    {
        echo $this->name . '收到指令 ... 英雄永不消逝！ <br>';
    }
}