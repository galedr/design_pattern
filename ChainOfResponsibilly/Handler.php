<?php

abstract class Handler
{
    protected $next; //下一個處理者

    public function setNext(Handler $handler)
    {
        $this->next = $handler;
    }

    abstract public function response(Request $request);
}

class Request
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function doRequest()
    {
        return $this->request;
    }
}