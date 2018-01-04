<?php

abstract class IAbstraction
{
    protected $data;

    public function __construct(IImplementor $implementor)
    {
        $this->data = $implementor;
    }

    abstract public function update();
}

class FormalServer extends IAbstraction
{
    public function update()
    {
        echo '將 ' . $this->data->operation() . ' 上傳到正式機 <br>';
    }
}

class TestServer extends IAbstraction
{
    public function update()
    {
        echo '將 ' . $this->data->operation() . ' 上傳到測試機 <br>';
    }
}