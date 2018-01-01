<?php
// Receiver 介面
interface IReceiver
{
    public function getHotArticles();
    public function getNewestArticles();
    public function getSponsoredArticles();
}
// Receiver 命令接收者，命令具體執行者
class ComicArticles implements IReceiver
{
    protected $file;

    public function __construct()
    {
        $this->file = json_decode(file_get_contents('data.json'), true);
    }

    public function getHotArticles()
    {
        return $this->file['Comic']['Hot'];
    }
    public function getNewestArticles()
    {
        return $this->file['Comic']['Newest'];
    }
    public function getSponsoredArticles()
    {
        return $this->file['Comic']['Sponsored'];
    }
}

class GameArticles implements IReceiver
{
    protected $file;

    public function __construct()
    {
        $this->file = json_decode(file_get_contents('data.json'), true);
    }

    public function getHotArticles()
    {
        return $this->file['Game']['Hot'];
    }
    public function getNewestArticles()
    {
        return $this->file['Game']['Newest'];
    }
    public function getSponsoredArticles()
    {
        return $this->file['Game']['Sponsored'];
    }
}