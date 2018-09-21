<?php

namespace Command\Sample_2;

interface IReceiver
{
    public function doCommand_0();
    public function doCommand_1();
    public function doCommand_2();
    public function doCommand_3();
}

class Receiver implements IReceiver
{
    public function doCommand_0()
    {
        return 'command_0 function worked';
    }
    public function doCommand_1()
    {
        return 'command_1 function worked';
    }
    public function doCommand_2()
    {
        return 'command_2 function worked';
    }
    public function doCommand_3()
    {
        return 'command_3 function worked';
    }
}