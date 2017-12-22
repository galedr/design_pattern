<?php

interface IBody
{
    public function getBody();
}

class SportBody implements IBody
{
    public function getBody()
    {
        return 'body 體育頻道 body <br>';
    }
}

class FashionBody implements IBody
{
    public function getBody()
    {
        return 'body 時尚頻道 body <br>';
    }
}

class CarBody implements IBody
{
    public function getBody()
    {
        return 'body 汽車頻道 body <br>';
    }
}