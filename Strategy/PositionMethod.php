<?php

interface IPosition
{
    public function locate();
}

class Gym implements IPosition
{
    public function locate()
    {
        echo '正妹出現在體育館了！';
    }
}

class Park implements IPosition
{
    public function locate()
    {
        echo '正妹出現在公園了！';
    }
}

class PoliceStation implements IPosition
{
    public function locate()
    {
        echo '正妹出現在警察局了！';
    }
}
