<?php
// Invoker，命令請求者
class ArticleGetter
{
    private $channels = array();

    public function setCommand(ICommand $command)
    {
        $this->channels[] = $command;
    }

    public function execute()
    {
        $data = array();
        foreach ($this->channels as $key => $command) {
            $data[] = $command->execute();
        }
        return $data;
    }
}