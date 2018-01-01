<?php
// Invoker，命令請求者
class ArticleGetter
{
    private $commands = array();

    public function setCommand($key, ICommand $command)
    {
        $this->commands[$key] = $command;
    }

    public function removeCommand($key)
    {
        unset($this->commands[$key]);
    }

    public function execute($key)
    {
        return $this->commands[$key]->execute();
    }
}