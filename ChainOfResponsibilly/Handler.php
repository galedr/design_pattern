<?php

abstract class Handler
{
    protected $next; //下一個處理者

    public function setNext(Handler $handler)
    {
        $this->next = $handler;
    }

    protected function response(Request $request)
    {
        if ($this->next != null) {
            return $this->next->response($request);
        } else {
            return '無法處理的檔案類型';
        }
    }
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