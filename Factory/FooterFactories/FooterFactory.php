<?php

interface IFooter
{
    public function getFooter();
}

class SportFooter implements IFooter
{
    public function getFooter()
    {
        return 'footer 體育頻道 footer <br>';
    }
}

class FashionFooter implements IFooter
{
    public function getFooter()
    {
        return 'footer 時尚頻道 footer <br>';
    }
}

class CarFooter implements IFooter
{
    public function getFooter()
    {
        return 'footer 汽車頻道 footer <br>';
    }
}