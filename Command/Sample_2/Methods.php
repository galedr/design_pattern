<?php

namespace Command\Sample_2;

class Methods
{
    public function getConfig($key)
    {
        $methods = [
            0 => Command_0::class,
            1 => Command_1::class,
            2 => Command_2::class
        ];
        return $methods[$key];
    }
}