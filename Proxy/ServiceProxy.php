<?php

class ServiceProxy implements IService
{
    protected $service;

    public function __construct()
    {
        $this->service = new RemoteService();
    }

    public function response()
    {
        $this->service->response();
    }
}