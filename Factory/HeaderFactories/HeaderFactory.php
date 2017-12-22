<?php

interface IHeader
{
    public function getHeader();
}

class SportHeader implements IHeader
{
    public function getHeader()
    {
        return 'header 體育頻道 header <br>';
    }
}

class FashionHeader implements IHeader
{
    public function getHeader()
    {
        return 'header 時尚頻道 header <br>';
    }
}

class CarHeader implements IHeader
{
    public function getHeader()
    {
        return 'header 汽車頻道 header <br>';
    }
}