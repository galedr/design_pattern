<?php

namespace Command\Sample_2;

interface ICommand
{
    public function execute();
}

class Command_0 implements ICommand
{
    private $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->doCommand_0();
    }
}

class Command_1 implements ICommand
{
    private $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->doCommand_1();
    }
}

class Command_2 implements ICommand
{
    private $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->doCommand_2();
    }
}

class Command_3 implements ICommand
{
    private $receiver;

    public function __construct(IReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->doCommand_3();
    }
}