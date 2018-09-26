<?php

interface IDrink
{
    public function getDrink();
}

class BlackTea implements IDrink
{
    public function getDrink()
    {
        return '拿到一杯紅茶';
    }
}

class Coffee implements IDrink
{
    public function getDrink()
    {
        return '拿到一杯咖啡';
    }
}